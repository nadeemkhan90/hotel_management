
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
<title>Hotel management</title>

	</head>
<body>

<?php
$conn=mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("mislab",$conn) or die(mysql_error());

$c=mysql_query("SELECT * FROM `menu1` WHERE food_type='dessert'") or die(mysql_error());
$d=mysql_num_rows($c);

if($d > 0)
{
echo "<table border=1>
<tr>

<th><b>Food_type</b></th>
<th><b>Food_name</b></th>
<th><b>Food_price</b></th>



</th>

</tr>";
while($row = mysql_fetch_array($c))
   {
echo "<tr>";
 
  echo "<td>" . $row['food_type'] . "</td>";
   echo "<td>" . $row['food_name'] . "</td>";
   echo "<td>" . $row['food_rate'] . "</td>";
   
    
  echo "</tr>";
  }


}


?>

</body>

</html>