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
<p>
<?php
$flag =0;
$Id = filter_input(INPUT_GET, "login");
$pass = filter_input(INPUT_GET, "password");

$conn = mysql_connect("localhost", "root") or die (mysql_error());
mysql_select_db("mislab", $conn);




 

$sql2 = "(Select * FROM `mislab`.`user` WHERE `UserId`='$Id')";
$result = mysql_query($sql2, $conn) or die(mysql_error());
$check2 = mysql_num_rows($result);
	if ($check2 == 0) 
	{
	die('<html><title>lOGIN FAILED</title><body background="./images/register_form/paperbg.jpg"></body><h3 align=center><br><br><br><br><br><br><br><br>USER NAME DOES NOT EXIST<br><h4 align=center>redirecting you IN 3 seconds</h4></h3><meta http-equiv="refresh" content=3;url="index.html#index"></HTML>');
	}
	

	
while($row = mysql_fetch_assoc($result)){
if ( $pass != $row[password]) {

die('<html><title>lOGIN FAILED</title><body background="./images/register_form/paperbg.jpg"></body><h3 align=center><br><br><br><br><br><br><br><br>USER NAME DOES AND PASSWORD DOES NOT MATCH<br><h4 align=center>redirecting you IN 3 seconds</h4></h3><meta http-equiv="refresh" content=3;url="index.html#index"></HTML>');
}


if ($row[post]=="manager")
print "<b>Since you have a <b>manager</b> so </b><br/><h3><b>you can</b><ul>
<li><a href = \"manager.php\"> <b>ADMINISTRATIVE TASKS</b></li>

</ul> ";
else

{
print " <b>you are a receptionist so you can </b></br><a href= \"reception.php\"><b><strong>1.do the queries</strong></b></a> ";


}
} 




/*else
{
print "<h3>passworrd is wrong!!</h3>";
}
else

{
print "<h3>the Id does not exist!!</h3>";
}*/
?>
</p>
</body>
</html>