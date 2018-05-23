<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="index.php">Ana Sayfa</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Oyunlar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">İletişim</a>
      </li>

    </ul>
    <ul class="nav navbar-nav ">
      <?php
        if (isset($_SESSION['user']) && $_SESSION['user'] == true){
      ?>
        <li><a class="nav-link" href="profil.php?id=<?=$_SESSION['id']?>"><?=htmlentities($_SESSION['kullaniciAdi'])?></a></li>
        <li><a class="nav-link" href="cikis.php">Oturumu Kapat</a></li>
      <?php
      }
        else{
      ?>
        <li><a class="nav-link" href="kayit.php">Kayıt OL</a></li>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Giriş Yap
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Giriş Yap</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <script type="text/javascript" src="./vendor/js/user-sign.js"></script>
                  <form id="loginForm" action="giris_onay.php" method="POST">
                    <div class="form-group">
                      <input name="kullaniciAdi" type="text" class="form-control" id="kullaniciAdi" placeholder="Kullanıcı adınızı giriniz.">
                    </div>
                    <div class="form-group">
                      <input name="sifre" type="password" class="form-control" id="sifre" placeholder="Şifrenizi giriniz.">
                    </div>
                    <div class="text-center mt-4" style="color: aliceblue;">
                  <input type="submit" name="submitOk" value="Giriş Yap" class="btn btn-primary"><br>
                </div>
              </form>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </ul>
  </div>
</div>
</nav> 