
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
<body>
<?php
$conn=mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("mislab",$conn) or die(mysql_error());

$c=mysql_query("SELECT food_name,count(1) as no_of_orders FROM `orders` GROUP BY food_name") or die(mysql_error());
$d=mysql_num_rows($c);

if($d > 0)
{
echo "<table border=1>
<tr>



<th><b>Food_name</b></th>
<th><b>No_of_Orders</b></th>



</th>

</tr>";
while($row = mysql_fetch_array($c))
   {
echo "<tr>";
 
  
   echo "<td>" . $row['food_name'] . "</td>";
   echo "<td>" . $row['no_of_orders'] . "</td>";
   
    
  echo "</tr>";
  }


}


?>

<form method = "get"
action = "http://localhost/site/delrslt.php"
class = "my">
<fieldset>
<label>Food Name:
</label>
<input type = "text"
name = "f_name" />
<input type="submit" value="remove"/>
</fieldset>
</form>
</body>

</html>