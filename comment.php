<html>
<head>
	<title></title>
    <style type="text/css">
     body { background-color: #e9f0f4 !important; height: 100%; overflow: hidden;}
    </style>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

	   <div id="main-container" class="row">
        <h1 class="text-center"> 
            <span style="position:absolute;left:20px; top:20px; color:#000; font-size:14px; text-transform:uppercase;"><a href ="index.php" >Home</a></span>
            <span>Comment on Post</span>
            <span style="position:absolute;right:20px; top:20px; color:#000; font-size:14px; text-transform:uppercase;"><a href ="logout.php" >logout</a></span>
        </h1>
        <br>
        <!-- preview -->
        <div  class="col-md-12" id="newPost" style="border:2px solid #2e3641;">
            <div class="newPostContent">
                <div class="row" style="margin:0;"> 
                    <div class="col-md-4 text-primary heading">Title</div> 
                    <div class="col-md-4 text-primary heading">Content</div>   
                    <div class="col-md-4 text-primary heading">Author</div>              
                        <?php  require_once 'action/comment-preview.php'; ?>
                  </div> 
            </div>                  
        </div>               
    </div>
</body>
</html>

