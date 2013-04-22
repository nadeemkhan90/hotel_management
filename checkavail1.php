
<html>
<head>
<script language="JavaScript" src="js/valid6.js">

</script>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="maxheight.js" type="text/javascript"></script>

</style>
</head>

<body >
<table border="0" width="100%" cellpadding="10">
<tr>
<td width="30%" valign="top">
 
</td>
<td width="40%" valign="top">
  <h1 class="sansserif"><i>HOTEL MARC INN</center></i></h1>
  </td>
  <td width="30%" valign="top">

</td>
  </tr>
  </table>
  <hr/>
   <?php
   //$check=$_POST['cin'];
  //echo $check;
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  else
 { 
  mysql_select_db("mislab", $con);


  //echo date("Y/m/d") . "<br />";
 
 $sql="select * from available where status='unoccupied'";
 
 $result=mysql_query($sql,$con);
 


  

  if((mysql_num_rows($result))>0)
  {
  echo "list of available rooms";
  echo "<table border='3'>
<tr>
<th> r_no</th>
<th>type</th>

<th>charges</th>

</tr>";
  while($row=mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['r_no'] . "</td>";
  echo "<td>" . $row['type'] . "</td>";
  
  echo "<td>" . $row['charges'] . "</td>";
 
 echo "</tr>";
  }
echo "</table>";

}
  else 
 echo "<h3>room is not available</h3>";
 }

?>
<a href="http://localhost/site/check_in1.php">Book your room</a>


  </body>
  </html>
 