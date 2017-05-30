<html>
<head>
  <title>Blog</title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<?php
  include "action/connection-check.php";
  if (isset($_POST['register']))
  {
    include "action/connection.php"; 
    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    $mobile = $_REQUEST['mobile'];
    $gender = $_REQUEST['gender'];
    $image_name=$_FILES['image']['name'];
    $image_path = 'images/'.$image_name;    
    $query = mysql_query("INSERT INTO user (`email`,`name`,`password`,`mobile`,`gender`,`image`)VALUES('$email', '$name','$password', '$mobile','$gender','".$image_path."')");
    if(move_uploaded_file($_FILES['image']['tmp_name'],$image_path)){
       // if(move_uploaded_file($_FILES['image']['tmp_name'],$image_path . $image_name)){
      // echo 'Your profile image was successful added, view the file <a href="' . $image_path . $image_name . '" title="Your File">here</a>';
      header('Location:login.php?login');
      $_SESSION['image'] = $row['image'];
     }
  }
    if (strpos($_SERVER['REQUEST_URI'],"msg")) 
    { 
      echo "<div class='error'>Wrong username or password</div>"; 
    }
?>

<body>
  <!-- Login section -->
  <div class="col-md-12 home-float"><span><a href ="landing.php" target="_blank" ><i class="fa fa-home" aria-hidden="true"></i>
</a></span><div>
  <div class="login-page">
    <h1 class="heading">Blog User Registration! </h1>
    <div class="form">
      <form class="register-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off" enctype="multipart/form-data" >
        <input type="email" placeholder="email address" name="email" required/>
        <input type="text" placeholder="Username" name="name" autocomplete="off" required/>
        <input type="password" placeholder="password" name="password" autocomplete="off" required/>
        <div class="radio">  
            <span class="label">Gender :</span>
           <span class="equal"><input type="radio" name="gender" value="male"> <span class="text">Male</span></span> 
           <span class="equal"> <input type="radio" name="gender" value="female"> <span class="text">Female</span></span> 
        </div>
        <input type="number" placeholder="mobile" name="mobile" maxlength='10' autocomplete="off" required/>
        <input type="file" placeholder="upload image" name="image" required />
        <button type="submit" name="register" value="create">create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>
      <form class="login-form" action="action/login-check.php" method="post">
        <input type="text" placeholder="username" name="user" required/>
        <input type="password" placeholder="password" name="pass" required/>
        <button type="submit" name="login" value="login">Login</button>
        <p class="message" id="message">Not registered? <a href="#">Create an account</a></p>
      </form>
    </div>
  </div>
</body>
</html>

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
  $('.message a').click(function(e){
      e.preventDefault();
     $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
     $('.heading').html('Blog User login');
     $('.register-succuess,.register-err,.error').hide();
     
  });
    var url = window.location.href;
    if(url.indexOf('?login') != -1) {
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        $('.heading').html('Blog User login');
    }
</script>