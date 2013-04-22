
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


</style>
</head>

<body >
<table border="0" width="100%" cellpadding="10">
<tr>
<td width="30%" valign="top">

</td>
<td width="40%" valign="top">
 
  </td>
  <td width="30%" valign="top">
 
</td>
  </tr>
  </table>
  <hr/>
   <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
  
  mysql_select_db("mislab", $con);


  
 
 $sql="SELECT * FROM available WHERE type='discounted' and status='unoccupied'";
 
 $result=mysql_query($sql,$con);
 


  

  if(mysql_num_rows($result)>0)
  {
  echo "list of available discounted rooms";
  echo "<table border='3'>
<tr>
<th> r_no</th>
<th>type</th>
<th>status</th>
<th>charges</th>

</tr>";
  while($row=mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['r_no'] . "</td>";
  echo "<td>" . $row['type'] . "</td>";
  echo "<td>" . $row['status'] . "</td>";
  echo "<td>" . $row['charges'] . "</td>";
 
 echo "</tr>";
  }
echo "</table>";
}
  else
 echo "<h3>room is not available</h3>";

?>
<a href="http://localhost/site/check_in1.php">Book your room</a>

  </body>
  </html>
 