 <?php
   include "connection.php"; 
    $get = $_SESSION['id'];            
    $result = mysql_query("SELECT * FROM post WHERE user_id='$get'");
	if( $row = mysql_fetch_assoc( $result ))
	{
      echo "<div class='col-md-6 text'>".$row['title']."</div>";
      echo "<div class='col-md-6 text'>".$row['content']."</div>";
    }
    else {
    	echo "<p style='text-align:center;'>No post added yet !!!</p>";
    }
  ?>  