<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Register Page</title>


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
          <p id="form_heading">Register Form</p>
		  <input type=""name" name="name" placeholder="enter name" ><br/>
          <input type="email" name="email" placeholder="Enter Email"><br />
          <input type="password" name="password" placeholder="Enter Password"><br />
          <input type="checkbox" id="checkbox"><label for="checkbox" style="color:white; font-size:15px;">Remember Me</label><br />
          <input type="submit" name="submit" value="submit"><br />
          <a id="font_20">Forgot your Password?</a><br /><br />
        </form>
      </div>
    </div>
    <div id="credits_box">
      Designed by <a href="https://in.linkedin.com/in/chitratech" target="_blank">chitra</a>
    </div>



<?php
   include("connect.php");
   if(isset($_POST['submit'])){
 $username = $_POST['name'];
   $txtemail = $_POST['email'];
   $password = $_POST['password'];
   $sql = "INSERT INTO testing (name,email,password)
   VALUES ('$username','$txtemail', '$password')";



if ($conn->query($sql) === TRUE) {
  header("location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
   }
?>

</body>
</html>