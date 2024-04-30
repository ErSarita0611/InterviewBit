<?php

session_start();
if(isset($_SESSION['student']))
{
	session_destroy();
	header("location:login.php");
}
?>