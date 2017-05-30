<?php
	if ($_SESSION['login'] == '1')
	{ 
	header('location: index.php'); 
	}
	else 
	{
	header('location:login.php?login');
	}
?>