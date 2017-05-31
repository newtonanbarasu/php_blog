 <?php
   include "connection.php";   
   
    $result = mysql_query("SELECT * FROM post");
   
  	while( $row = mysql_fetch_assoc( $result ))
  	{
      $id=$row['post_id'];
      echo "<div class='col-md-12 no-padding'>";
      echo "<div class='col-md-4 text'>".$row['title']."</div>";
      echo "<div class='col-md-4 text'>".$row['content']."</div>";
      echo "<div class='col-md-4 text'>".$row['name']."</div>";
      $comment =mysql_query("SELECT * FROM comments where post_id='$id'");
      while( $row = mysql_fetch_array( $comment ))
      {
        echo "<p class='col-md-12 co-xs-12 comment'> comment :
                <span>'".$row['content']."'</span>
                <span>".$_SESSION['user']."</span>
              </p>";
      }
      echo " <form class='row' action='action/comment-add.php' method='post'>
              <div class='col-md-12 form-group moving-top'>
                <input type='text' class='form-control' name='content' placeholder='add your comments' required>
                <input type='hidden' name='post_id' value='$id'>
              </div>
              <div class='col-md-12'>
                <input type='submit' class='btn default-btn' name='comment' value='add Comment' style='margin-left: 0; font-size:12px; padding:10px 0px 8px;line-height:14px;'>
              </div>
            </form>";
      echo "</div>";
      
      
    }
  
?>