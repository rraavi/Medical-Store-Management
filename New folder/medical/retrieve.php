
<?php
mysql_connect("localhost","root","") or die("Server Connection Faild");
mysql_select_db("medical") or die("Database Connection Failed");
if(isset($_POST['SearchBtn'])){
	$res=mysql_query("select * from medicine where name like '%$_POST[search]%' or m_name like  '%$_POST[search]%'");	
}
else
{
	$res=mysql_query("select * from medicine");
}

$count=mysql_num_rows($res);
echo "<table border=1><tr><th>name</th>
<th>m_name</th>
<th>expiry</th>
<th>quantity</th></tr>";

for($i=0;$i<$count;$i++){
$row=mysql_fetch_array($res);
echo "<tr><td>".$row["name"]."</td>";
echo "<td>".$row["m_name"]."</td>";
echo "<td>".$row["expiry"]."</td>";
echo "<td>".$row["quantity"]."</td></tr>";

}
echo "</table>"
?>
