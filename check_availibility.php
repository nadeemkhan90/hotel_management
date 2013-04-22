<html>
<body>
<?php
$con=mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  else
  echo"";

mysql_select_db("mislab", $con);
$query = "SELECT * FROM available";
$result = mysql_query($query);

while($row = mysql_fetch_array($result)){

echo $row["r_no"];
echo "\n";
echo $row["type"];
echo "\n";
echo $row["status"];
echo "\n";
echo $row["charges"];
echo $row["cin_dd"];echo $row["cin_mm"];echo $row["cin_yy"];
echo $row["cot_dd"];echo $row["cot_mm"];echo $row["cot_yy"];

}
?>
</body> 
</html>