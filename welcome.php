


<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
	<link href='//fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	  <style> body {
  background-image: url("http://www.powerpointhintergrund.com/uploads/welcome-background-14.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  font-size: 25px;
  font-family: 'Raleway', 'arial';
	  font-weight: 100;}
  
  .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
      margin-left: 556px;
    margin-top: 103px;
  
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;

}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

h1{
	    font-family: 'Sofia';
	color:#f4511e;
	font-size:82px;
	    margin-left: 932px;
    margin-top: 165px;
    padding-top: 116px;
	
}

</style>
   </head>
   
   <body>
      <h1> <?php echo $login_session; ?></h1> 
	         
    
<a href="login.php" ><button class="button" style="vertical-align:middle"><span>Sign Out</span></button></a>
   </body>
   
</html>