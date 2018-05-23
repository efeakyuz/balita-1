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
$title='Giriş Yap';?>
<!DOCTYPE html>
<html>
<head>
	<!--Header Başlangıç-->

<?php include 'layout/header.php' ?>
	<script type="text/javascript" src="./vendor/js/user-sign.js"></script>
	<link href="./css/reg.css" rel="stylesheet">
	<!--Header Bitiş-->
</head>
<body>
	<!-- Content Başlangıç-->
	<div class="container" >
		<div class="row" style="margin-top: 8%" >
			<div class="col-lg-3"></div>
			<div class="col-lg-6" >
				<div class="row">

					<div class="col-lg-2"></div>
					<div class="col-lg-8" style="color: aliceblue">
					<?php if (isset($_GET['status'])) {
						if ($_GET['status'] == 'True') {
							echo "KAYIT İŞLEMİ TAMAMLANDI";
					}
					} ?>
						<form id="loginForm" action="giris_onay.php" method="POST">
						  <div class="form-group">
						    <label for="username" style="color: aliceblue;">Kullanıcı Adı</label>
						    <input name="kullaniciAdi" type="text" class="form-control" id="kullaniciAdi" placeholder="Kullanıcı adınızı giriniz.">
						  </div>
						  <div class="form-group">
						    <label for="password" style="color: aliceblue;">Şifre</label>
						    <input name="sifre" type="password" class="form-control" id="sifre" placeholder="Şifrenizi giriniz.">
						  </div>
						  <div class="text-center mt-4" style="color: aliceblue;">
				  	<input type="submit" name="submitOk" value="Giriş Yap" class="btn btn-primary"><br>
				  	<label for="server_error" class="error">
					  	<?php if (isset($_GET['err'])) {
					  		switch ($_GET['err']) {
					  			case '1':
					  				echo "Lütfen alanları doldurunuz.";
					  				break;
					  			case '2':
					  				echo "Kullanıcı adınız hatalı.";
					  				break;
					  			case '3':
					  				echo "Şifreniz hatalı.";
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
					<div class="col-lg-2"></div>
				</div>

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
