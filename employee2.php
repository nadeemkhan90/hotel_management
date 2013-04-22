
<html>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  else
  echo"yes";

mysql_select_db("hotel_management", $con);

$sql="INSERT INTO employee (employee_no,em_name,sex,address,dob,hire_date,phone_no,qualification,designation,dept,salary)
VALUES
('$_POST[employee_no]','$_POST[em_name]','$_POST[sex]','$_POST[address]','$_POST[dob]','$_POST[hire_date]','$_POST[phone_no]','$_POST[qualification]','$_POST[designation]','$_POST[dept]','$_POST[salary]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' .mysql_error());
  }
  else
echo "1 record added";
echo '<meta http-equiv="refresh" content="0;url=./employee1.php">';
?>
 </body>
 </html>