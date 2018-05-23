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
$title='Giriş Yap';?>
<!DOCTYPE html>
<html>
<head>
	<!--Header Başlangıç-->

<?php include 'layout/header.php' ?>
	<script type="text/javascript" src="./vendor/js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="./vendor/js/jquery.validate.js"></script>
	<script type="text/javascript" src="./vendor/js/user-sign.js"></script>
</head>
	<!--Header Bitiş-->

    <section class="site-section">
			<div class="container" >
				<div class="col-12 text-center">
          <h1>Giriş Yap</h1>
        </div>
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-6" >
						<div class="row">

							<div class="col-lg-2"></div>
							<div class="col-lg-8">
							<?php if (isset($_GET['status'])) {
								if ($_GET['status'] == 'True') {
									echo "KAYIT İŞLEMİ TAMAMLANDI";
							}
							} ?>
								<form id="loginForm" action="giris_onay.php" method="POST">
								  <div class="form-group">
								    <label for="username">Kullanıcı Adı</label>
								    <input name="kullaniciAdi" type="text" class="form-control" id="kullaniciAdi" placeholder="Kullanıcı adınızı giriniz.">
								  </div>
								  <div class="form-group">
								    <label for="password" >Şifre</label>
								    <input name="sifre" type="password" class="form-control" id="sifre" placeholder="Şifrenizi giriniz.">
								  </div>
								  <div class="text-center mt-4">
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
			
		</body>
		</html>
		<?php
		}
		?>
