<?php
session_start();
include 'includes/vt.php';
function Redirect($url)
		{
			header('Location: ' . $url);
			exit();
		}
if (isset($_GET['id'])){
	if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
		if (isset($_POST['yorumOk'])) {
			$id = $_GET['id'];
			$query = "select * from oyuninceleme where incelemeId = '$id'";
			$res = mysqli_query($con,$query);
			include 'includes/error.php';
			$num = mysqli_num_rows($res);
			if ($num == 0) {
				$con->close();
				Redirect('index.php');
			}
			else{
				$kullanici = $_SESSION['id'];
				$yorum = $con->real_escape_string($_POST['yorum']);
				$queryYorum = "insert into yoruminceleme(incelemeKod,yorumText,uyeKod) values ('$id','$yorum','$kullanici')";
				$con->query($queryYorum);
				include 'includes/error.php';
				$con->close();
				Redirect('makale.php?id='.$id);
			}
		}
		else{
			$con->close();
			Redirect('index.php');
		}
	}
	else{
		$con->close();
		Redirect('giris.php');
	}
}
else{
	$con->close();
	Redirect('index.php');
}
?>