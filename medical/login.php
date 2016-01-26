<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css" />
<style type="text/css">
td {
	font-family: sans-serif;
	font-weight: bold;
}
body,td,th {
	font-size: 24px;
	font-family: verdana;
	font-weight: normal;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table align="center" width="250px" border="0">
    <tr>
      <td height="95" align="center">Welcome</td>
    </tr>
    <tr>
      <td height="59"><label for="username"></label>
        <div align="center">
          <input type="text" name="username" id="username" align="absmiddle" />
      </div></td>
    </tr>
    <tr>
      <td height="59"><label for="password"></label>
        <div align="center">
          <input type="text" name="password" id="password" />
      </div></td>
    </tr>
    <tr>
      <td height="59"><div align="center">
        <input type="submit" name="login" id="login" value="Submit" />
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
		echo "<h2>Invalid Password</h2>";
}
else
	echo "<h2>Invalid Email</h2>";
}
?>   
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>