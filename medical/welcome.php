<?php
include('validate.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	font-size: small;
}
body {
	background-color: #B1BABE;
}

a
{
	text-decoration:none;
	font-size:16px;
	color:#F30
}

a:hover
{
	text-decoration:underline;
	color:#00F;
}

.title {
	font-family: Verdana, Geneva, sans-serif;
	font-size: xx-large;
	font-style: normal;
	font-weight: bold;
	color: #606;
	margin-left:20px;
}
</style>
</head>

<body>
<table width="90%" border="0" align="center" style="background-color:#FFF">
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td width="67%"><h1 class="title">HITAM</h1></td>
        <td width="33%" align="right" valign="top"><a href="login.php">Welcome:<?php echo $_SESSION['name'] ?></a></td>
      </tr>
    </table>
    <hr /></td>
  </tr>
  <tr>
    <td>
    <?php
	include("navigation.php");
	?>
    
    
    <hr />
    </td>
  </tr>
  <tr>
    <td height="279" align="left" valign="top"><table width="100%" border="0">
      <tr>
        <td width="75%" height="268" valign="top"><table width="100%" height="365">
          <tr>
            <td height="282">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td width="25%" align="left" valign="top"><table width="100%" border="0">
          <tr>
            <td bgcolor="#FF3300"><h3>News</h3></td>
          </tr>
          <tr>
            <td height="109" align="left" valign="top"><p>News titel1</p>
              <p>News titel1</p>
              <p>News titel1</p>
              <p>News titel1</p></td>
          </tr>
        </table>
          <p>&nbsp;</p>
          <table width="100%" border="0">
            <tr>
              <td bgcolor="#FF0099"><h3>Events</h3></td>
            </tr>
            <tr>
              <td height="117" valign="top"><p>Event titel1</p>
                <p>Event titel1</p>
                <p>Event titel1</p>
                <p>Event titel1</p></td>
            </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><h6><strong><em>Designed And Developed by HITAM</em></strong></h6></td>
  </tr>
</table>
</body>
</html>