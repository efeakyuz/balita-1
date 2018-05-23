<?php 
session_start();
function Redirect($url)
		{
			header('Location: ' . $url);
			exit();
		}
if (isset($_SESSION['user']) && $_SESSION['user'] == true){
	Redirect('/proje/profil.php?id='.$_SESSION['id']);
}
else{
$title='Kayıt Ol';?>
<!DOCTYPE html>
<html>
<head>
	<!--Header Başlangıç-->

<?php include 'layout/header.php' ?>
		<script type="text/javascript" src="./vendor/js/user-register.js"></script>
		<link href="./css/reg.css" rel="stylesheet">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<!--Header Bitiş-->
</head>
<body>
	<!--Navbar Başlangıç-->

<?php include 'layout/navbar.php' ?>

	<!-- Navbar Bitiş-->

	<!-- Content Başlangıç-->
	<div class="container" style="margin-top: 5%">
		<div class="row border-left border-right">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<form id="signupForm1" class="border-bottom" action="kayit_onay.php" method="POST">

				  <div class="form-group">
				    <label for="username" style="color: aliceblue;">Kullanıcı Adı</label>
				    <input name="username" type="text" class="form-control" id="username" placeholder="Lütfen kullanıcı adınızı giriniz">
				  </div>
				  <div class="form-group">
				    <label for="birth_date" style="color: aliceblue;">Doğum Tarihiniz</label>
				    <input name="birth_date" type="date" class="form-control" id="birth_date" min="1900-01-01" max="2010-01-01">
				  </div>
				  <div class="form-group">
				    <label for="email" style="color: aliceblue;">Email Adresiniz</label>
				    <input name="email" type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Size ait email adresinizi giriniz">
				  </div>
				  <div class="form-group">
				    <label for="password" style="color: aliceblue;">Şifre</label>
				    <input name="password" type="password" class="form-control" id="password" placeholder="Lütfen şifre giriniz">
				  </div>
				  <div class="form-group">
				    <label for="password2" style="color: aliceblue;">Şifre</label>
				    <input name="password2" type="password" class="form-control" id="password2" placeholder="Giridiğiniz şifreyi doğrulayınız">
				  </div>
				  <div class="text-center mt-4" style="color: aliceblue;">
				  	<input type="submit" name="kayitOk" value="Kayıt Ol" class="btn btn-primary"><br>
				  	<label for="server_error" class="error">
					  	<?php if (isset($_GET['err'])) {
					  		switch ($_GET['err']) {
					  			case '1':
					  				echo "Lütfen tüm alanları doldurunuz.";
					  				break;
					  			case '2':
					  				echo "Şifreleriniz uyuşmuyor, lütfen kontrol ediniz.";
					  				break;
					  			case '3':
					  				echo "Lütfen geçerli bir e-mail adresi giriniz.";
					  				break;
					  			case '4':
					  				echo "Kullanıcı adınız 4 ve 18 karakter arasında olmalıdır.";
					  					break;
					  			case '5':
					  				echo "Şifreniz 4 ve 18 karakter arasında olmalıdır.";
					  				break;
					  			case '6':
					  				echo "Kullanıcı sadece adı harf, sayı ve alt çizgi içermelidir.";
					  				break;
					  			case '7':
					  				echo "Şifrenizde boşluk kullanmayınız.";
					  				break;
					  			case '8':
					  				echo "Üzgünüz bu kullanıcı adı kullanılmaktadır.";
					  				break;
					  			case '9':
					  				echo "Daha önce bu e-mail adresi ile kayıt oluşturulmuştur.";
					  				break;
					  			default:
					  				# code...
					  				break;
					  		}
					  	}?>	
				  	</label>
				  </div>
				</form>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>
	<!-- Content Bitiş-->

	<!-- Footer Başlangıç-->

<?php include 'layout/footer.php' ?>

	<!-- Footer Bitiş-->
</body>
</html>
<?php
}
?>
