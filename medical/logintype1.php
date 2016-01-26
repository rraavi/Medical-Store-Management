<?php session_start(); ?>
<html>
<head><title>Login Page</title></head>
<link rel="stylesheet" href="logintype1.css">
<body>
<div id="login">

  <h1><strong>Welcome.</strong> Please login.</h1>

  <form action="" method="post" name="form1">

   <fieldset>

    <p><input type="text" required value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' " name="username" id="username"></p> <!-- JS because of IE support; better: placeholder="Username" -->

    <p><input type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' " name="password" id="password"></p> <!-- JS because of IE support; better: placeholder="Password" -->

    <p><a href="#">Forgot Password?</a></p>

    <p><input type="submit" id="login" name="login" value="Login"></p>
    <?php
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];

include("database.inc");

$res=mysql_query("select * from user where username='$username'");
$count=mysql_num_rows($res);
if($count==1)
{
	$row=mysql_fetch_array($res);
	$db_psw=$row['password'];
	if($db_psw==$password)
	{
		echo "<script>location='welcome.php'</script>";
		$_SESSION['username']=$username;
		$_SESSION['username']=$row['username'];
	}
	else
		{
		echo "<script>alert('Invalid password')</script>";
		echo " <script> location='logintype1.php'</script>";
		}
}
else
	{echo "<script>alert('Invalid email')</script>";
		echo " <script> location='logintype1.php'</script>";
	}
}
?>   

   </fieldset>

  </form>
  
 </div>
 
</body>
</html>