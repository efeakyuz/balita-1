<?php
session_start();
function Redirect($url)
		{
			header('Location: ' . $url);
			exit();
		}
if (isset($_SESSION['user']) && $_SESSION['user'] == true){
	Redirect('/balita/profil.php?id='.$_SESSION['id']);
}
else{
$title='Kayıt Ol';?>
<!DOCTYPE html>
<html>
<head>
	<!--Header Başlangıç-->

<?php include 'layout/header.php' ?>

</head>
	<!--Header Bitiş-->

    <section class="site-section">
      <div class="container">
        <div class="col-12 text-center">
          <h1>Kayıt Ol</h1>
        </div>
    		<div class="row border-left border-right">
    			<div class="col-lg-3"></div>
    			<div class="col-lg-6">
    				<form id="signupForm1" class="border-bottom" action="kayit_onay.php" method="POST">

    				  <div class="form-group">
    				    <label for="username">Kullanıcı Adı</label>
    				    <input name="username" type="text" class="form-control" id="username" placeholder="Lütfen kullanıcı adınızı giriniz">
    				  </div>
    				  <div class="form-group">
    				    <label for="birth_date">Doğum Tarihiniz</label>
    				    <input name="birth_date" type="date" class="form-control" id="birth_date" min="1900-01-01" max="2010-01-01">
    				  </div>
    				  <div class="form-group">
    				    <label for="email">Email Adresiniz</label>
    				    <input name="email" type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Size ait email adresinizi giriniz">
    				  </div>
    				  <div class="form-group">
    				    <label for="password">Şifre</label>
    				    <input name="password" type="password" class="form-control" id="password" placeholder="Lütfen şifre giriniz">
    				  </div>
    				  <div class="form-group">
    				    <label for="password2">Şifre</label>
    				    <input name="password2" type="password" class="form-control" id="password2" placeholder="Giridiğiniz şifreyi doğrulayınız">
    				  </div>
    				  <div class="text-center mt-4">
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
    </section>

    <footer class="site-footer">

      <?php include 'layout/footer.php' ?>

    </footer>
    <!-- END footer -->

    <!-- loader -->
  	<?php include 'layout/loader.php' ?>
  </body>
      <script type="text/javascript" src="./vendor/js/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="./vendor/js/jquery.validate.js"></script>
    <script type="text/javascript" src="./vendor/js/user-register.js"></script>
</html>
<?php
}
?>
