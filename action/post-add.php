<?php
    session_start(); 

    if ($_SESSION['login'] == '' ) 
    {
    	header ('location:login.php');
	}

	 if (isset($_POST['publish']))
	  {
	    include "connection.php"; 
	    // register code
	    $title = $_REQUEST['title'];
	    $content = $_REQUEST['content'];
	    $user_id = $_REQUEST['user-id'];
	    $name = $_REQUEST['name'];
	    $query = mysql_query("INSERT INTO post (`title`,`content`,`name`,`user_id`)VALUES('$title', '$content','".$_SESSION['user']."','".$_SESSION['id']."')");
	     header("Location:../index.php");
	     exit;
	  }
?>