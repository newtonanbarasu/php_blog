<?php
    include "index-check.php";
    if (isset($_POST['comment']))
      {
        include "connection.php"; 
        $content = $_REQUEST['content'];
        $post_id = $_REQUEST['post_id'];
        $query = mysql_query("INSERT INTO comments (`post_id`,`content`,`user_id`)VALUES('$post_id', '$content','".$_SESSION['user']."')");
        header("Location:../comment.php");
      }
?>