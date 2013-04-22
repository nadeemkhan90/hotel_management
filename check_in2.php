<html>
<body>
<head>
<script language="javascript" src="js/cal2.js">

</script>
<script language="javascript" src="js/cal_conf2.js"></script>
<script language="JavaScript" src="js/valid.js">
</head>


<body onLoad="setCurrentMonth()">




<table border="0" width="100%" cellpadding="10">
<tr>
<td width="30%" valign="top">
 <div class="img">  <img src="alogo.jpg"  width="90" height="70" />
</td>
<td width="40%" valign="top">
  <h1 class="sansserif"><i>HOTEL ADRIA</center></i></h1>
  </td>
  <td width="30%" valign="top">
 <div class="img1">  <img src="alogo.jpg"  width="90" height="70" />
</td>
  </tr>
  </table>
  <hr/>
  </style>
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

	
$sql1="INSERT INTO check_in(name,address,age,city,country,passport_no,phone,check_in_date,check_out_date,sex,room_no,room_type)
VALUES
('$_POST[name]','$_POST[address]','$_POST[age]','$_POST[city]','$_POST[country]','$_POST[passport_no]','$_POST[phone_no]','$_POST[arrival_date]','$_POST[depar]','$_POST[sex]','$_POST[room_no]','$_POST[room_type]')";

if (!mysql_query($sql1,$con))
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
$sql3="update available
      set status='occupied',
	  cin_date='$_POST[arrival_date]',
	  cout_date='$_POST[depar]'
	  where r_no=$_POST[room_no]";
	  if (!mysql_query($sql3,$con))
  {
  die('Error: ' .mysql_error());
  } 
  echo " ROOM HAS BEEN BOOKED";

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.html">
 </body>
 </html>