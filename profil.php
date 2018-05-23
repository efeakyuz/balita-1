<?php
session_start();
include 'includes/vt.php';
function Redirect($url)
		{
			header('Location: ' . $url);
			exit();
		}
if (isset($_GET['id'])) {
	$file = file_get_contents('includes/kategori.json');
	$deneme = json_decode($file,true);
	$arrays = array();
	foreach ($deneme as $key => $value) {
		$arrays[] = $key;
	}
	if (isset($_SESSION['user']) && $_SESSION['user'] == true && $_SESSION['id'] == $_GET['id']) {
		$title= $_SESSION['kullaniciAdi']." | Profil Sayfası";
#HTML BAŞLANGIÇ
		?>
<!DOCTYPE html>
<html>
<head>
	<!--Header Başlangıç-->

<?php include 'layout/header.php' ?>

	<!--Header Bitiş-->
</head>
<body>
	<!-- Content Başlangıç-->
	<section class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="infoBox border">
					<img src="<?=$_SESSION['foto']?>" height="150px" width="150px" class="rounded-circle" style="margin-left: 30%; "><br><br>
					<p style="margin-left: 10%"><b><?=$_SESSION['kullaniciAdi']?></b> <?=$_SESSION['dogumTarihi']?></p>
				</div>
			</div>
			<div class="col-lg-8 infoBox2 border">
				<button id="more" class="btn btn-secondary btn-block" data-toggle="modal" data-target="#inceleme">Yeni Bir İnceleme Yaz</button>
				<br>
				<!-- MODAL -->
				<div class="modal fade" id="inceleme" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">İnceleme Yazınız</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				         <form enctype="multipart/form-data" action="upload.php" method="POST">
										<input class="form-control" type="text" name="oyunAdi" required placeholder="Lütfen oyunun adını giriniz." size="50">
										<label for="fileToUpload">Dosya seçiniz</label>
										<input class="form-control" name="fileToUpload" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" required>
										<label for="selected">Kategori seçiniz</label>
										<select class="custom-select" id="inputGroupSelect01" name="kategori">
										<?php
											for ($i=0; $i < count($arrays) ; $i++) {
											echo "<option value=".$arrays[$i].">".$arrays[$i]."</option>";
										}?>
										</select>
										<label for="textarea">Oyun incelemenizi yazınız</label><br>
										<textarea class="form-control" name="oyunText" rows="8"  required ></textarea>
										<input type="submit" class="btn btn-primary" name="incelemeOk" value="Gönder">
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- MODAL -->
				<?php #İçerik başlangıcı
					$id = $_GET['id'];
					$icerik = "select * from oyuninceleme where uyeKod = '$id' ORDER BY postTarihi DESC";
					$icerikRes = mysqli_query($con,$icerik);
					include 'includes/error.php';
					$arrays = array();
					while ($icerikler = mysqli_fetch_assoc($icerikRes)) {
						$arrays[] = $icerikler;
					}
					foreach ($arrays as $icerikler) {
						?>
						<div class="card" style="">
						  <img class="card-img-top" src="<?=$icerikler['fotografUrl']?>" alt="Card image cap" height="300px">
						  <div class="card-body">
						    <h5 class="card-title"><?=htmlentities($icerikler['oyunAdi'])?></h5>
						    <p class="card-text"><small><?=$icerikler['postTarihi']?></small></p>
						    <hr>
						    <a href="makale.php?id=<?=$icerikler['incelemeId']?>" class="">İnceleme için tıklayınız.</a>
						  </div>
						</div>
						<hr>
					<?php
					}
				?>

			</div>
		</div>
	</div>
	</section>
	<!-- Content Bitiş-->

	<!-- Footer Başlangıç-->
<footer class="site-footer">
<?php include 'layout/footer.php' ?>
</footer>
	<!-- Footer Bitiş-->
</body>
</html>
<?php
$con->close();
}

		else{
			#Giriş Yapmamış ya da kendi sayfası olmayan profil sayfası.
			#HTML BAŞLANGIÇ ZİYARETÇİ İÇİN veri tabanı işlemleri
				$id = $_GET['id'];
				$query = "select kullaniciAdi, dogumTarihi, profilFotoUrl from uyeKayit Where kullaniciId = '$id'";
				$res = mysqli_query($con,$query);
				include 'includes/error.php';
				$num = mysqli_num_rows($res);
				if ($num == 0) {
						$con->close();
						Redirect('/proje/index.php');
				}
				$array = mysqli_fetch_assoc($res);
				$title= $array['kullaniciAdi']." | Profil Sayfası";
			?>
<!DOCTYPE html>
<html>
<head>
	<!--Header Başlangıç-->
<section class="site-section">
<?php include 'layout/header.php' ?>
</script>
	<!--Header Bitiş-->
</head>
<body style="background-color: #e1e6e8">

	<!-- Content Başlangıç-->

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="infoBox border">
					<img src="<?=$array['profilFotoUrl']?>" height="150px" width="150px" class="rounded-circle" style="margin-left: 30%; "><br><br>
					<p style="margin-left: 10%"><b><?=$array['kullaniciAdi']?></b> <?=$array['dogumTarihi']?></p>
				</div>
			</div>
			<div class="col-lg-8 infoBox2 border">
				<?php #İçerik başlangıcı
					$icerik = "select * from oyuninceleme where uyeKod = '$id' ORDER BY postTarihi DESC";
					$icerikRes = mysqli_query($con,$icerik);
					include 'includes/error.php';
					$arrays = array();
					while ($icerikler = mysqli_fetch_assoc($icerikRes)) {
						$arrays[] = $icerikler;
					}
					foreach ($arrays as $icerikler) {
						?>
						<div class="card" style="">
						  <img class="card-img-top"  src="<?=$icerikler['fotografUrl']?>" alt="Card image cap" height="300px">
						  <div class="card-body">
						    <h5 class="card-title"><?=htmlentities($icerikler['oyunAdi'])?></h5>
						    <p class="card-text"><small><?=$icerikler['postTarihi']?></small></p>
						    <hr>
						    <a href="makale.php?id=<?=$icerikler['incelemeId']?>" class="">İnceleme için tıklayınız.</a>
						  </div>
						</div>
						<hr>
					<?php
					}
				?>
			</div>
		</div>
	</div>
	</section>
	<!-- Content Bitiş-->

	<!-- Footer Başlangıç-->
<footer class="site-footer">
<?php include 'layout/footer.php' ?>
</footer>
	<!-- Footer Bitiş-->
</body>
</html>
<?php
$con->close();
		}
}
else{
	if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
		$con->close();
		Redirect('profil.php?id='.$_SESSION['id']);
	}
	else{
		$con->close();
		Redirect('/proje/index.php');
	}
}?>
