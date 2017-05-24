<?php
  session_start();
  if (isset($_POST['login'])) 
  {
    //login
    include "connection.php";
    $user = $_POST['user'];
    $pass = $_POST['pass'];

          $result = mysql_query("SELECT * FROM user");
          while( $row = mysql_fetch_assoc( $result ))
          {
            
           if ($user == $row['name'] && $pass == $row['password']) 
           {
               $_SESSION['login'] = '1';
               $_SESSION['user'] = $row['name'];
               $_SESSION['id'] = $row['id'];
              header("Location:../index.php");   
           }
           else 
           {
             header("Location:../login.php?msg");
           }
        }
    }
    if ($_SESSION['login'] == '1'){ header('Location:../index.php'); }
    
    if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>