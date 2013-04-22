<html>
<head>
<script language="javascript" src="js/cal2.js">

</script>
<script language="javascript" src="js/cal_conf2.js"></script>
<script language="JavaScript" src="js/valid.js">

</script>

<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="maxheight.js" type="text/javascript"></script>

</style>
<title>Hotel management</title>

	</head>

<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 // else
 // echo"";

mysql_select_db("mislab", $con);

//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	//$room_no= clean($_POST['room_no']);

//$sql="select * from check_in where room_no=$room_no";
//$result=mysql_query($sql,$con);
//$row=mysql_fetch_array($result);
//if($row[0]==0)

	
$sql1="INSERT INTO orders(name,food_name)
VALUES
('$_POST[name]','$_POST[f_name1]')";
$sql2="INSERT INTO orders(name,food_name)
VALUES
('$_POST[name]','$_POST[f_name2]')";
$sql3="INSERT INTO orders(name,food_name)
VALUES
('$_POST[name]','$_POST[f_name3]')";
if (!mysql_query($sql1,$con))
  {
  die('Error: ' .mysql_error());
  }
  else
echo "1 record added";
if (!mysql_query($sql2,$con))
  {
  die('Error: ' .mysql_error());
  }
  else
echo "1 record added";
if (!mysql_query($sql3,$con))
  {
  die('Error: ' .mysql_error());
  }
  else
echo "1 record added";

/*$sql2=$query = "UPDATE available SET status = 'occupied' WHERE r_no='$_POST[room_no]'"; 
	  if (!mysql_query($sql2,$con))
  {
  die('Error: ' .mysql_error());
  }*/


?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.html">
 </body>
 </html>