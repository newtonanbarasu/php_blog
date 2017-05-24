<?php  
    require_once 'action/post-add.php'; 
?>

<html>
<head>
	<title>Blog</title>
    <style type="text/css">
     body { background-color: #e9f0f4; }
    </style>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <div id="main-container" class="row">
        <h1 class="text-center"> 
            <span >Welcome <mark><?php $get = $_SESSION['user']; echo $get; ?></mark> !!!</span>
            <span style="position:absolute;left:20px; top:20px; color:#000; font-size:14px; text-transform:uppercase;"><a href ="landing.php" >Home</a></span>
            <span style="position:absolute;right:20px; top:20px; color:#000; font-size:14px; text-transform:uppercase;"><a href ="action/logout.php" >logout</a></span>
        </h1>
        <br>
        <!-- post -->
        <div class="col-md-5" id="newPost">
            <form class="newPostContent" action="action/post-add.php" method="post">
                <h1>Add New Post</h1>               
                <div class="row"><input type="text" placeholder="Enter title here" id="post-title" name="title" required></div>
                <div class="row">
                    <div class="format-bar bar">
                        <span style="color:#fff; font-size:18px; font-weight:700; padding-left:15px;">Description</span>
                    </div>
                    <textarea class="post-body" required name="content"></textarea>
                </div> 
                <div class="row">
                    <div class="col-md-6"><?php if (strpos($_SERVER['REQUEST_URI'],"add")) { echo "<span class='text-success bg-success'  style='padding: 10px;margin-top: 8px;border-radius: 5px; display:inline-block;'>Successfully added</span>"; } ?></div>
                    <div class="col-md-6"><input type="submit" class="btn" name="publish" value="publish"></div>
                </div>
            </form>                   
        </div>   
        <div class="col-md-1"></div>
        <!-- preview -->
        <div  class="col-md-6" id="newPost" style="border:2px solid #2e3641;">
            <div class="newPostContent">
                <h1>Post Preview<span style="position:absolute;right:20px; top:20px; color:#000; font-size:14px; text-transform:uppercase;"><a href ="comment.php" >Post Comment</a></span></h1>
                <div class="row table"> 
                    <div class="col-md-6 text-primary heading">Title</div> 
                    <div class="col-md-6 text-primary heading">Content</div>              
                    <?php  require_once 'action/post-preview.php'; ?>
                  </div> 
            </div>                   
        </div>               
    </div>
</body>
</html>