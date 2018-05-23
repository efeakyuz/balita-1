<?php
session_start();
function Redirect($url)
		{
			header('Location: ' . $url);
			exit();
		}
session_destroy();
Redirect('/balita/index.php');
?>
