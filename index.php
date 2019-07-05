<?php 

	session_start();

	if(!isset($_SESSION['username'])){
		header("location: app/inicio/iniciar.php");
		return;
	}else{
		header("location: app/home.php");
		return;
	}


 ?>