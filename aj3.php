<?php
include("conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="free web template, business website, CSS, HTML" />
<meta name="description" content="free CSS HTML template for professional business websites" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="templatemo_fullgraybox">
<h1>Courier Informations</h1>
<br /><hr />
<br />

<table>
<?php

 	$c=$_REQUEST["c"];
	$sql="select * from courier where c_id='$c'";
	$result=mysql_query($sql);	
   if($row=mysql_fetch_array($result))
   {
	echo"<tr><td><h2>From Name:</h2></td><td>$row[1]</td></tr>
		 <tr><td><h2>To Name:</h2></td><td>$row[2]</td></tr>
		 <tr><td><h2>From Address:</h2></td><td>$row[5]</td></tr>
		 <tr><td><h2>To Address:</h2></td><td>$row[6]</td></tr>
		 <tr><td><h2>From City:</h2></td><td>$row[7]</td></tr>
		 <tr><td><h2>To City:</h2></td><td>$row[8]</td></tr>
		 <tr><td><h2>Post Date:</h2></td><td>$row[9]</td></tr>
		 <tr><td><h2>Subadmin:</h2></td><td>$row[10]</td></tr>
		 <tr><td><h2>Status:</h2></td><td>$row[11]</td></tr>
		 <tr><td><h2>City Status:</h2></td><td>$row[12]</td></tr>
	     </tr>";
   
}else {
	
	echo "<h1>Invalid Courier Id   Please   Try Again .. !</h1>";
	}
?>
</table>
</div>
</body>
</html>