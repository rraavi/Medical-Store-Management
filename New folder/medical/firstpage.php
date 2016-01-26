<?php
include("database.inc");

$name=$_POST["name"];
$m_name=$_POST["m_name"];
$expiry=$_POST["expiry"];
$quantity=$_POST["quantity"];

echo "<h1>$name</h1>";
$res=mysql_query("insert into medicine values('$name','$m_name','$expiry',$quantity)");

if($res)
{
	echo "<script>alert('Record Inserted Sucessfully')</script>";
echo "<script>location='add.php'</script>";
}
else
	echo "Query failed";
?>