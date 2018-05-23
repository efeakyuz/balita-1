<?php
session_start();
include 'includes/vt.php';
		$id = 2;
		$query = "SELECT uyekayit.kullaniciId, uyekayit.kullaniciAdi,uyekayit.dogumTarihi,uyekayit.mail,uyekayit.profilFotoUrl,oyuninceleme.incelemeId, oyuninceleme.oyunAdi, oyuninceleme.uyeKod, oyuninceleme.oyunText, oyuninceleme.kategori, oyuninceleme.fotografUrl, oyuninceleme.postTarihi from uyekayit, oyuninceleme WHERE uyekayit.kullaniciId = '$id' AND oyuninceleme.uyeKod = '$id'";
		$res = mysqli_query($con,$query);
		$arrays = array();
		while ($array = mysqli_fetch_assoc($res)) {
			$arrays[] = $array;
		}
		foreach ($arrays as $array) {
			echo htmlentities($array['oyunAdi']).' '.htmlentities($array['oyunText']).'<br>';
		}
		$con->close();

		/*
SELECT oyuninceleme.incelemeId, oyuninceleme.oyunAdi, oyuninceleme.kategori, oyuninceleme.fotografUrl, oyuninceleme.oyunText, oyuninceleme.uyeKod, uyekayit.kullaniciAdi, uyekayit.kullaniciId, uyekayit.dogumTarihi, uyekayit.mail uyekayit.profilFotoUrl  FROM oyuninceleme, uyekayit WHERE oyuninceleme.uyeKod = '$id' 

SELECT uyekayit.kullaniciId, uyekayit.kullaniciAdi, oyuninceleme.oyunAdi, oyuninceleme.uyeKod from uyekayit, oyuninceleme WHERE uyekayit.kullaniciId = 2 AND oyuninceleme.uyeKod = 2

SELECT uyekayit.kullaniciId, uyekayit.kullaniciAdi,uyekayit.dogumTarihi,uyekayit.mail,uyekayit.profilFotoUrl,oyuninceleme.incelemeId, oyuninceleme.oyunAdi, oyuninceleme.uyeKod, oyuninceleme.oyunText, oyuninceleme.kategori, oyuninceleme.fotografUrl, oyuninceleme.postTarihi from uyekayit, oyuninceleme WHERE uyekayit.kullaniciId = 2 AND oyuninceleme.uyeKod = 2 
		*/
?>

