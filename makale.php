<?php 
session_start();
include 'includes/vt.php';
function Redirect($url)
		{
			header('Location: ' . $url);
			exit();
		}
if (isset($_GET['id'])) {

	$id = $_GET['id'];
	$query = "select * from oyuninceleme where incelemeId = '$id' ";
	$res = mysqli_query($con,$query);
	$num = mysqli_num_rows($res);
	if ($num == 0 ) {
		$con->close();
		Redirect('index.php');
	}
	$array = mysqli_fetch_assoc($res);
	$title = $array['oyunAdi']." İncelemesi";
?>
<!DOCTYPE html>
<html>
<head>
	<!--Header Başlangıç-->

<?php include 'layout/header.php' ?>

	<!--Header Bitiş-->
</head>
<body>
	<!--Navbar Başlangıç-->

<?php include 'layout/navbar.php' ?>

	<!-- Navbar Bitiş-->

	<!-- Content Başlangıç-->
	<div class="container">
		<?=$array['oyunAdi']?>
		<br>
		<?php #Makaleden sonra oluşacak yorum tarafı
			$queryYorum = "select yoruminceleme.incelemeKod, yoruminceleme.yorumText, yoruminceleme.yorumTarih, yoruminceleme.uyeKod, uyekayit.kullaniciAdi from yoruminceleme,uyekayit where yoruminceleme.incelemeKod = '$id' and yoruminceleme.uyeKod = uyekayit.kullaniciId order by yorumTarih desc";
			$resYorum = mysqli_query($con,$queryYorum);
			$kontrol = mysqli_num_rows($resYorum);
			$arrays = array();
			while ($yorumlar = mysqli_fetch_assoc($resYorum)) {
				$arrays[] = $yorumlar;
			}
			foreach ($arrays as $yorumlar) {
				echo htmlentities($yorumlar['yorumText']).' '.htmlentities($yorumlar['yorumTarih']).'<br>';
			}
			$con->close();
			if (isset($_SESSION['user']) && $_SESSION['user'] == true) {		
		?>
			<form action="yorum.php?id=<?=$id?>" method="POST">
				<label for="textarea">Yorumunuz yazınız</label><br>
				<textarea class="form-control" name="yorum" rows="8"  required ></textarea>
				<input type="submit" class="btn btn-primary" name="yorumOk" value="Gönder">
			</form>
		<?php
		}?>
	</div>
	<!-- Content Bitiş-->

	<!-- Footer Başlangıç-->

<?php include 'layout/footer.php' ?>

	<!-- Footer Bitiş-->
</body>
</html>
<?php  
}
else{
	$con->close();
	Redirect('index.php');
}
?>