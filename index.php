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

</head>
	<!--Header Bitiş-->

    <section class="site-section pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="owl-carousel owl-theme home-slider">
              <div>
                <a href="blog-single.php" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_1.jpg'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category">Lifestyle</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                  </div>
                </a>
              </div>
              <div>
                <a href="blog-single.php" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_2.jpg'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category">Lifestyle</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                  </div>
                </a>
              </div>
              <div>
                <a href="blog-single.php" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_3.jpg'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category">Lifestyle</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                  </div>
                </a>
              </div>
            </div>

          </div>
        </div>
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
        </div>
      </div>


    </section>
    <!-- END section -->

    <section class="site-section py-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-4">Lifestyle Category</h2>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="row">
              <div class="col-md-6">
                <a href="blog-single.php" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="images/img_5.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Food</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>
              <div class="col-md-6">
                <a href="blog-single.php" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="images/img_6.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Travel</span>
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>

              <div class="col-md-6">
                <a href="blog-single.php" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="images/img_7.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Travel, Asia</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>
              <div class="col-md-6">
                <a href="blog-single.php" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="images/img_8.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Travel</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>

              <div class="col-md-6">
                <a href="blog-single.php" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="images/img_9.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Travel</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>
              <div class="col-md-6">
                <a href="blog-single.php" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="images/img_10.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Lifestyle</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>

              <div class="col-md-6">
                <a href="blog-single.php" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="images/img_11.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Lifestyle</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>
              <div class="col-md-6">
                <a href="blog-single.php" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="images/img_12.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Food</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 text-center">
                <nav aria-label="Page navigation" class="text-center">
                  <ul class="pagination">
                    <li class="page-item  active"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">

            <!-- END sidebar-box -->

            <div class="sidebar-box">
              <h3 class="heading">Categories</h3>
              <ul class="categories">
                <li><a href="#">Courses <span>(12)</span></a></li>
                <li><a href="#">News <span>(22)</span></a></li>
                <li><a href="#">Design <span>(37)</span></a></li>
                <li><a href="#">HTML <span>(42)</span></a></li>
                <li><a href="#">Web Development <span>(14)</span></a></li>
              </ul>
            </div>
            <!-- END sidebar-box -->


          </div>
          <!-- END sidebar -->

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
