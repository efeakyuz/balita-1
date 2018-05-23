<?php
	session_start();
	include 'includes/vt.php';
	function Redirect($url)
			{
			    header('Location: ' . $url);
			    exit();
			}
	if (isset($_POST['kayitOk'])) {
		$kullaniciAdi = $con->real_escape_string($_POST['username']);
		$uzunluk = strlen($kullaniciAdi);
		$sifre = $_POST['password'];
		$sifre2 = $_POST['password2'];
		$uzunluk2 = strlen($sifre2);
		$dogumTarihi = $con->real_escape_string($_POST['birth_date']);
		$mail = $con->real_escape_string($_POST['email']);

		// Gelen verileri kontrol aşaması

		if ($kullaniciAdi =='' && $sifre =='' && $sifre2 =='' && $dogumTarihi =='' && $mail =='' ) {
			$con->close();
			Redirect('/balita/kayit.php?err=1');
		}
		elseif (strcmp($sifre, $sifre2)) {
			$con->close();
			Redirect('/balita/kayit.php?err=2');
		}
		elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
			$con->close();
			Redirect('/balita/kayit.php?err=3');
		}
		elseif ($uzunluk < '3' || $uzunluk > '18') {
			$con->close();
			Redirect('/balita/kayit.php?err=4');
		}
		elseif ($uzunluk2 < '4' || $uzunluk2 > '18') {
			$con->close();
			Redirect('/balita/kayit.php?err=5');
		}
		elseif (!preg_match('/^\w+$/', $kullaniciAdi)) {
			$con->close();
			Redirect('/balita/kayit.php?err=6');
		}
		elseif (strpos($sifre2, ' ') !== false) {
			$con->close();
			Redirect('/balita/kayit.php?err=7');
		}
		else{
				$query = "select * from uyekayit where kullaniciAdi='$kullaniciAdi'";
				$query2 = "select * from uyekayit where mail='$mail'";
				$res = mysqli_query($con,$query);
				$res2 = mysqli_query($con,$query2);
				$kontrol = mysqli_num_rows($res);
				$kontrol2 = mysqli_num_rows($res2);

				// Hata konntrol sayfasını çağır.

				include 'includes/error.php';
					if ($kontrol == 1) {
						$con->close();
						Redirect('/balita/kayit.php?err=8');
					}
					elseif ($kontrol2 == 1) {
						$con->close();
						Redirect('/balita/kayit.php?err=9');
					}
					else{
						// Şifreleme işlemi ve veri tabanına kayıt.

						$options = ['cost' => 11];
						$hash = password_hash($sifre2, PASSWORD_BCRYPT, $options);
						$registerQuery = "insert into uyekayit(kullaniciAdi,sifre,dogumTarihi,mail,profilFotoUrl) values ('$kullaniciAdi', '$hash', '$dogumTarihi', '$mail','upload/basic_profil.png')";
						$con->query($registerQuery);

						// Hata konntrol sayfasını çağır.

						include 'includes/error.php';
						$con->close();
						Redirect('/balita/girisyap.php?status=True');
					}
		}
	}
	else{
		$con->close();
		Redirect('/balita/index.php');
	}
	$con->close();
?>
