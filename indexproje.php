<?php 
session_start();
include 'includes/vt.php';
function Redirect($url)
		{
			header('Location: ' . $url);
			exit();
		}
		$title = 'Ana Sayfa';?>
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
		<div class="row">
			<div class="col-lg-3 infoBox">SOL MENÜ</div>
			<div class="col-lg-9 infoBox2">
				<?php 
					$query = "SELECT uyekayit.kullaniciId, uyekayit.kullaniciAdi,oyuninceleme.incelemeId,oyuninceleme.kategori, oyuninceleme.fotografUrl,oyuninceleme.oyunText , oyuninceleme.oyunAdi, oyuninceleme.uyeKod, oyuninceleme.postTarihi from uyekayit, oyuninceleme WHERE oyuninceleme.uyeKod = uyekayit.kullaniciId order by postTarihi desc";
					$res = mysqli_query($con,$query);
					include 'includes/error.php';
					$arrays = array();
					while ($array = mysqli_fetch_assoc($res)) {
						$arrays[] = $array;
					}
					foreach ($arrays as $array) {
					#Html içerik	?>
					<div class="row">
						<div class="col-md-4">
							<img class="rounded" style="margin: 5px" src="<?=$array['fotografUrl']?>" width="100%" height="250px">
						</div>
						<div class="col-md-7">
							<h5 class="card-title text-uppercase"><?=htmlentities($array['oyunAdi'])?></h5>
							<hr>
							<small>Yazan <a href="profil.php?id=<?=$array['kullaniciId']?>"><?=$array['kullaniciAdi']?></a> / <?=$array['postTarihi']?></small>
							<div class="card-text">
								<br>
								<br>
								<a href="makale.php?id=<?=$array['incelemeId']?>" class="">İnceleme için tıklayınız.</a>
							</div>
						</div>

					<!--	<div class="card" style="">
							<img class="card-img-top" src="<?=$array['fotografUrl']?>" alt="Card image cap" height="300px">
							<div class="card-body">
								<h5 class="card-title"><?=htmlentities($array['oyunAdi'])?></h5>
								<p class="card-text"><small><?=$array['postTarihi']?></small></p>
								<hr>
								<a href="makale.php?id=<?=$array['incelemeId']?>" class="">İnceleme için tıklayınız.</a>
							</div>
						-->
						</div>
						<hr>
						<?php
						}
						$con->close();
					?>
			</div>
		</div>
	</div>
	<!-- Content Bitiş-->

	<!-- Footer Başlangıç-->

<?php include 'layout/footer.php' ?>

	<!-- Footer Bitiş-->
</body>
</html>