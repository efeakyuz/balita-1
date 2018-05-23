<?php
	session_start();
	include 'includes/vt.php';
	function Redirect($url)
		{
			header('Location: ' . $url);
			exit();
		}
	if (isset($_POST['submitOk'])) {

		$_SESSION['user'] = false;
		$kullaniciAdi = $con->real_escape_string($_POST['kullaniciAdi']);
		$sifre = $_POST['sifre'];
		if ($kullaniciAdi =='' && $sifre =='') {
			$con->close();
			Redirect('/balita/girisyap.php?err=1');
		}
		else{
			$query = "select * from uyekayit where kullaniciAdi='$kullaniciAdi'";
			$res = mysqli_query($con,$query);
			$kontrol = mysqli_num_rows($res);
			include 'includes/error.php';
			if ($kontrol == 1) {
				$array = mysqli_fetch_assoc($res);
				$hash = $array['sifre'];
				if (password_verify($sifre,$hash)) {
					$_SESSION['user'] = true;
					$_SESSION['id'] = $array['kullaniciId'];
					$_SESSION['kullaniciAdi'] = $array['kullaniciAdi'];
					$_SESSION['email'] = $array['mail'];
					$_SESSION['dogumTarihi'] = $array['dogumTarihi'];
					$_SESSION['foto'] = $array['profilFotoUrl'];
					Redirect('profil.php?id='.$_SESSION['id']);
				}
				else{
					$con->close();
					Redirect('/balita/girisyap.php?err=3');
				}
			}
			elseif ($kontrol == 0) {
				$con->close();
				Redirect('/balita/girisyap.php?err=2');
			}
		}

	}
	else{
		$con->close();
		Redirect('/balita/index.php');
	}
	$con->close();
?>
