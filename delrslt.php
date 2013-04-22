
<html>
<head>

<link rel = "stylesheet" type = "text/css" href = "sheet.css">
</head>
<body>




<p class = "result">
<?php
$id = filter_input(INPUT_GET, "f_name");
//make the database connection
$conn = mysql_connect("localhost", "root") or die (mysql_error());
mysql_select_db("mislab", $conn);




$sql = "DELETE FROM `mislab`.`menu1` WHERE `food_name` LIKE '$id';";
$result = mysql_query($sql, $conn) or die(mysql_error());
if($result ==1)
print " food $id is successfully removed from menu";


else
print "$id doesn't exist";

?>
</p>
</body>
</html>