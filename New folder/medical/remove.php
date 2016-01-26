<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>welcome</title>
<style type="text/css">
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	color: #666;
	font-style: italic;
	font-weight: bold;
}
body {
	background-color: #FFF;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="firstpage.php">
<table width="100%" height="100%" border="0" align="center">
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td><div align="center">MEDICAL STORE MANAGEMENT</div></td>
        <td width="33%" align="right" valign="top"><table width="100%" border="0">
          <tr>
            <td><div align="right">WELCOME:</div></td>
          </tr>
          <tr>
            <td><div align="right">LOGOUT</div></td>
          </tr>
        </table>          </a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
    <br />
    <?php include("top_navigation.php");?></td>
  </tr>
  <tr>
    <td height="100%"><table width="100%" border="0">
      <tr>
        <td align="center"><a href="add.php">ADD MEDICINE</a> | <a href="remove.php">REMOVE MEDICINE</a></td>
      </tr>
<?php

include("database.inc");
$res=mysql_query("select * from medicine");


$count=mysql_num_rows($res);
echo "<table><tr><th>name</th>
<th>m_name</th>
<th>expiry</th>
<th>quantity</th></tr>";

for($i=0;$i<$count;$i++){
$row=mysql_fetch_array($res);
echo "<tr><td>".$row["name"]."</td>";
echo "<td>".$row["m_name"]."</td>";
echo "<td>".$row["expiry"]."</td>";
echo "<td>".$row["quantity"]."</td>";
echo "<td><a href='delete.php?name=$row[name]'>Delete</a></td></tr>";
}
echo "</table>"
?>
</table></td>
  </tr>
</table>
</form>
</body>
</html>