
  <head>
      <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <?php include 'loader.php' ?>
  </head>
  <body>



    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-9 social">
              <a href="#"><span class="fa fa-twitter"></span></a>
              <a href="#"><span class="fa fa-facebook"></span></a>
              <a href="#"><span class="fa fa-instagram"></span></a>
              <a href="#"><span class="fa fa-youtube-play"></span></a>
              <a href="#"><span class="fa fa-vimeo"></span></a>
              <a href="#"><span class="fa fa-snapchat"></span></a>
            </div>
            <div class="col-3 search-top">
              <!-- <a href="#"><span class="fa fa-search"></span></a> -->
              <form action="arama.php" method="GET" class="search-top-form">
                <span class="icon fa fa-search"></span>
                <input type="text" id="s" name="q" placeholder="Type keyword to search...">
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="container logo-wrap">
        <div class="row pt-5">
          <div class="col-12 text-center">
            <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
            <h1 class="site-logo"><a href="index.php">İnç İnç Oyun</a></h1>
          </div>
        </div>
      </div>

      <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">


          <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="category.php" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategoriler</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="arama.php?q=FPS">FPS</a>
                  <a class="dropdown-item" href="arama.php?q=RPG">RPG</a>
                  <a class="dropdown-item" href="arama.php?q=MMO">MMO</a>
                  <a class="dropdown-item" href="arama.php?q=Simülasyon">Simülasyon</a>
                </div>

              </li>
              <?php
                if (isset($_SESSION['user']) && $_SESSION['user'] == true){
              ?>
                <li><a class="nav-link" href="profil.php?id=<?=$_SESSION['id']?>"><?=htmlentities($_SESSION['kullaniciAdi'])?></a></li>
                <li><a class="nav-link" href="cikis.php">Oturumu Kapat</a></li>
              <?php
              }
                else{
              ?>
              <li class="nav-item">
                <a class="nav-link" href="kayit.php">Kayıt Ol</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="girisyap.php">Giriş Yap</a>
              </li>
            </ul>

          </div>
        </div>
        <?php
        }
        ?>
      </nav>
    </header>

