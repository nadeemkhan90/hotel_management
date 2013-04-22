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
</head>
<body>


  <h1 class="sansserif"><i>MARCC INN</center></i></h1>
  </td>

</td>
  </tr>
  </table>
  <hr/>
 
  </body>
   <a href="http://localhost/site/employee1.php">ADD EMPLOYEE</a></br>
   <a href="http://localhost/site/empdel.php">REMOVE EMPLOYEE</a>
  </html>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  else
  
  mysql_select_db("mislab", $con);


  
 
$sql="select * from employee ";
 $result=mysql_query($sql,$con);
 if(mysql_num_rows($result)>0)
 {
 echo "<table border='3'>
<tr>
<th> em_no</th>
<th> em_name</th>
<th> sex</th>
<th> address</th>
<th> dob</th>
<th> hire date</th>
<th> phone no</th>
<th> qualification</th>
<th> designation</th>

<th> dept</th>
<th> salary</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  
  echo "<td>" . $row['em_no'] . "</td>";
  echo "<td>" . $row['em_name'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['hire_date'] . "</td>";
  echo "<td>" . $row['phone_no'] . "</td>";
  echo "<td>" . $row['qualification'] . "</td>";
  echo "<td>" . $row['designation'] . "</td>";
  
  echo "<td>" . $row['dept'] . "</td>";
  echo "<td>" . $row['salary'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}
else
echo "<h3>no detail available</h3>";
mysql_close($con);
?> 
