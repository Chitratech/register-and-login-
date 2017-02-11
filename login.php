<!DOCTYPE html>


<html>

<head>
  <meta charset="UTF-8">
  <title>Login Page</title>


  <link rel="stylesheet" href="style.css">


</head>

<body>

  <html lang="en">

  <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
  </head>

  <body>
    <div id="container">
     
      <div id="form_box">
        <form action="" method="post">
          <p id="form_heading">Login Form</p>
          <input type="email" name="email" placeholder="Enter Email"><br />
          <input type="password" name="password" placeholder="Enter Password"><br />
          <input type="checkbox" id="checkbox"><label for="checkbox" style="color:white; font-size:15px;">Remember Me</label><br />
          <input type="submit" value="Login"><br />
          <a id="font_20">Forgot your Password?</a><br /><br />
        </form>
      </div>
    </div>
    <div id="credits_box">
      Designed by <a href="https://in.linkedin.com/in/chitratech" target="_blank">chitra</a>
    </div>

<?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $emailname = $_POST['email'];
      $password = $_POST['password']; 
      
      $sql = "SELECT * FROM testing WHERE email = '$emailname' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		  session_start();
         $_SESSION['login_user'] = $emailname;
         
         header("location: welcome.php");
      }else {
         echo "<h1>Your Login Name or Password is invalid</h1>";
      }
   }
?>





 
  	
</body>
</html>