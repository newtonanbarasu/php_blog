<html>
<head>
  <title>Blog</title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<?php
  
  if ($_SESSION['login'] == '1')
  { 
    header('location: index.php'); 
  }
  else 
  {
    header('location:login.php');
  }

  if (isset($_POST['register']))
  {
    include "action/connection.php"; 
    // register code
    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    $mobile = $_REQUEST['mobile'];
    $gender = $_REQUEST['gender'];
    $required = array ('email','name','password','mobile','gender');
    $error = false ;
      foreach($required as $fields) 
      {
        if (empty($_POST[$fields])) 
        {
          $error = true;
        }
      }
    if ($error) 
    {
      echo "<div class='error register-err'>All fields are required.</div>";
    } 
    else 
    {
      $query = mysql_query("INSERT INTO user (`email`,`name`,`password`,`mobile`,`gender`)VALUES('$email', '$name','$password', '$mobile','$gender')");
      echo "<div class='success register-succuess'>Proceed ...to login</div>";
    }
  }
  if (strpos($_SERVER['REQUEST_URI'],"msg")) 
  { 
    echo "<div class='error'>Wrong username or password</div>"; 
  }
  // if (isset($POST['register']))
  // {
  //   $result = mysql_query("SELECT * FROM user");
  // }
?>

<body>
  <!-- Login section -->
  <div class="login-page">
    <div><span style="position:absolute;right:20px; top:20px; color:#000; font-size:14px; font-weight:800; text-transform:captialize; text-shadow:none;"><a href ="landing.php" >Home</a></span><div>
    <h1 class="heading">Blog User Registration! </h1>
    <div class="form">
      <form class="register-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">
        <input type="text" placeholder="email address" name="email"/>
        <input type="text" placeholder="Username" name="name" autocomplete="off"/>
        <input type="password" placeholder="password" name="password" autocomplete="off"/>
        <div class="radio">  
            <span class="label">Gender :</span>
           <span class="equal"><input type="radio" name="gender" value="male"> <span class="text">Male</span></span> 
           <span class="equal"> <input type="radio" name="gender" value="female"> <span class="text">Female</span></span> 
        </div>
        <input type="number" placeholder="mobile" name="mobile" autocomplete="off"/>
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
     $('.register-succuess,.register-err').hide();
     
  });
    var url = window.location.href;
    if(url.indexOf('?login') != -1) {
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        $('.heading').html('Blog User login');
    }
</script>