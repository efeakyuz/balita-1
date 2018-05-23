<?php
session_start();
include 'includes/vt.php';
function Redirect($url)
		{
			header('Location: ' . $url);
			exit();
		}
$title = 'Arama Sonuçları';
if (isset($_GET['q']) && !empty($_GET['q'])) {
#EĞER BOŞ DEĞİLS	
?>
<!DOCTYPE html>
<html>
<head>
	<!--Header Başlangıç-->

<?php include 'layout/header.php' ?>

</head>
	<!--Header Bitiş-->

    <section class="site-section pt-5">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a href="blog-single.php" class="a-block d-flex align-items-center height-md" style="background-image: url('images/img_2.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Lifestyle</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="blog-single.php" class="a-block d-flex align-items-center height-md" style="background-image: url('images/img_3.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Travel</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="blog-single.php" class="a-block d-flex align-items-center height-md" style="background-image: url('images/img_4.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Food</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="blog-single.php" class="a-block d-flex align-items-center height-md" style="background-image: url('images/img_4.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Food</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
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
</html>

<?php
}
else{
	Redirect('index.php');
}
?>