<?php
$name=$_GET['name'];
mysql_connect("localhost","root","") or die("Server Connection Faild");
mysql_select_db("medical") or die("Database Connection Failed");

$res=mysql_query("delete from medicine where name='$name'");
if($res)
	echo "<script>location='remove.php'</script>";
else
{
	echo "<script>alert('Invalid Query')</script>";
echo "<script>location='remove.php'</script>";}

?>
