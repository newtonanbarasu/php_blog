<html>
<head>
	<title></title>
    <style type="text/css">
     body { background-color: #e9f0f4 !important; height: 100%; }
    </style>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
</head>
<body>
    <h1 id="header">My Blog <span style="position:absolute;right:20px; top:20px; color:#000; font-size:14px; text-transform:captialize; text-shadow:none;"><a href ="login.php">Sign up</a> / <a href="login.php?login">login</a></span></span></h1>
    <div class="container list-article">
      <div class="btn-group pull-right" id="switch-view">
        <button class="active">
          <i class="fa fa-list" aria-hidden="true"></i>
        </button>
        <button class="">
          <i class="fa fa-th-large" aria-hidden="true"></i>
        </button>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <?php
        include "action/connection.php"; 
        $comment =mysql_query("SELECT * FROM post");
        $count =mysql_num_rows($comment);
        if($count>0)
        {
          while( $row = mysql_fetch_assoc( $comment ))
          {
            echo "<div class='col-xs-12 article-wrapper'>";
            echo "<article>";
            echo "<div class='img-wrapper'><img src='http://emblemsbattlefield.com/uploads/posts/2014/10/facebook-default-photo-male_1.jpg' /></div>";
            echo "<h1>".$row['title']."</h1>";
            echo "<p>".$row['content']."</p>";
            echo "</article>";
            echo "</div>";
          }
        }
        else
        {
          echo "<div class='col-xs-12 article-wrapper'>";
          echo "<article style='padding-left:75px;'>";
          echo "<h1 style='text-align:center;'>No new post added !!!</h1>";
          echo "<p></p>";
          echo "</article>";
          echo "</div>";
        }
      ?>
      </div>
    </div>
</body>
</html>
<script type="text/javascript">
  $(function(){
    $("#switch-view").click(function(){
      $(this).find("button").toggleClass("active");
      $(".article-wrapper").toggleClass("blog col-xs-12 col-xs-4");
    });
  });
</script>
