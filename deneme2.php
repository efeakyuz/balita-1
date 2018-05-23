<?php
$file = file_get_contents('includes/deneme.json');
$deneme = json_decode($file,true);
$arrays = array();
foreach ($deneme as $key => $value) {
	$arrays[] = $key;
}
for ($i=0; $i < count($arrays) ; $i++) { 
	echo $arrays[$i];
}
/*php 
session_start();
include 'includes/vt.php';
function Redirect($url)
		{
			header('Location: ' . $url);
			exit();
		}?>
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
			<div class="col-lg-3 infoBox"></div>
			<div class="col-lg-7 infoBox2">
				<?php 
					$query = "select * from oyuninceleme order by postTarihi desc";
					$res = mysqli_query($con,$query);
					$arrays = array();
					while ($array = mysqli_fetch_assoc($res)) {
						$arrays[] = $array;
					}
					foreach ($arrays as $array) {
					#Html içerik	?>
						<div class="card" style="">
							<img class="card-img-top" src="<?=$array['fotografUrl']?>" alt="Card image cap" height="300px">
							<div class="card-body">
								<h5 class="card-title"><?=htmlentities($array['oyunAdi'])?></h5>
								<p class="card-text"><small><?=$array['postTarihi']?></small></p>
								<hr>
								<a href="makale.php?id=<?=$array['incelemeId']?>" class="">İnceleme için tıklayınız.</a>
							</div>
						</div>
						<?php
						}
						$con->close();
					?>
			</div>
			<div class="col-lg-2">
			</div>
		</div>
	</div>
	<!-- Content Bitiş-->

	<!-- Footer Başlangıç-->

<?php include 'layout/footer.php' ?>

	<!-- Footer Bitiş-->
</body>
</html>*/?>