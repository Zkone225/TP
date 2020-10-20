<?php
	
	
	session_start();
	
	session_destroy();
	
	Header("Location: ../public/login.php");
	
?>