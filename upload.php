<?php
session_start();
function Redirect($url)
            {
                header('Location: ' . $url);
                exit();
            }
$uyeId = $_SESSION["id"];
include 'includes/vt.php';
$path = $_FILES['fileToUpload']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);
$hedef_dir = "upload/";
$hedef_dosya = $hedef_dir .$_SESSION['id'].'_'.time().'_'.$_SESSION['kullaniciAdi'].'.'.$ext;
$kontrol = 1;
$dosya = pathinfo($hedef_dosya, PATHINFO_EXTENSION);
$oyunAdi = $con->real_escape_string($_POST['oyunAdi']);
$kategori = $con->real_escape_string($_POST['kategori']);
$oyunText = $con->real_escape_string($_POST['oyunText']);
if (isset($_POST["incelemeOk"])) {

    if ($hedef_dosya == "upload/") {
        $kontrol = 0;
        $con->close();
        Redirect('profil.php?id='.$uyeId);
    }
    else if ($oyunText == '' && $oyunAdi = '') {
        $kontrol = 0;
        $con->close();
        Redirect('profil.php?id='.$uyeId);
    }
    else if (ctype_space($oyunText) == true || ctype_space($oyunAdi) == true) {
        $kontrol = 0;
        $con->close();
        Redirect('profil.php?id='.$uyeId);
    }
    else if (file_exists($hedef_dosya)) {
        $kontrol = 0;
        $con->close();
        Redirect('profil.php?id='.$uyeId);
    }
    else if ($_FILES["fileToUpload"]["size"] > 5000000) {
        $kontrol = 0;
        $con->close();
        Redirect('profil.php?id='.$uyeId);
    }
    else if ($kontrol == 0) {
        $con->close();
        Redirect('profil.php?id='.$uyeId);
    }
    else {
        if (($_FILES["fileToUpload"]["type"]=='image/gif') OR ($_FILES["fileToUpload"]["type"]=='image/png') OR ($_FILES["fileToUpload"]["type"]=='image/jpeg')) {
        #if ($ext == 'jpg' OR $ext == 'png' OR $ext == 'gif' OR $ext == 'jpeg') {
           if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $hedef_dosya)) {
            $uyeId = $_SESSION['id'];
            $query = "insert into oyunInceleme(oyunAdi,kategori,fotografUrl,oyunText,uyeKod) values ('$oyunAdi','$kategori','$hedef_dosya','$oyunText','$uyeId')";
            $con->query($query);
            include 'includes/error.php';
            $con->close();
            echo ("<script LANGUAGE='JavaScript'>  window.alert('Yükleme başarılı...');
                    window.location.href='profil.php?id=".$uyeId."'; </script>");
            }
        }
        else{
            $kontrol = 0;
            $con->close();
            Redirect('profil.php?id='.$uyeId);
        }
        
    }
}
else{
    Redirect('giris.php');
}

?>
