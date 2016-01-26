<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<p>&nbsp;</p>
<table width="100%" height="100%" align="center">
<tr>
<td align="left" valign="middle">
<table width="200" border="0" align="center">
  <tr>
    <td align="center" valign="middle"><form id="form1" name="form1" method="post" action="">
      <input type="text" name="username" id="username" placeholder="username" />
    </form></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><form id="form2" name="form2" method="post" action="">
      <input type="password" name="password" id="password" placeholder="password" />
    </form></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><form id="form3" name="form3" method="post" action="">
    
      <input type="submit" name="button" id="button" value="LOGIN" />
      <?php
if(isset($_POST['button']))
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
		echo "<h2>Invalid Password</h2>";
}
else
	echo "<h2>Invalid Email</h2>";
}
?>
    </form></td>
  </tr>
</table>
</td>
</tr>
</table>
<p>&nbsp;</p>
</body>
</html>