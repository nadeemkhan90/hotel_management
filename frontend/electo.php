
<html>
<head>
<title>online auctioning cart</title>

	</head>
<body>
<?php
$conn=mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("my_auction",$conn) or die(mysql_error());

$c=mysql_query("SELECT * FROM `products` WHERE category_id='e' and closing_date>=curdate() ") or die(mysql_error());
$d=mysql_num_rows($c);

if($d > 0)
{
echo "<table border=1>
<tr>

<th><b>PRODUCT ID</b></th>
<th><b>PRODUCT NAME</b></th>
<th><b>PRODUCT DETAILS</b></th>
<th><b>USERID</b></th>
<th><b>BASE PRICE</b></th>
<th><b>CURRENT PRICE</b></th>
<th><b>CLOSING DATE</b></th>
<th><b>CATEGORY ID</b></b>


</th>

</tr>";
while($row = mysql_fetch_array($c))
   {
echo "<tr>";
 
  echo "<td>" . $row['product_id'] . "</td>";
   echo "<td>" . $row['product_name'] . "</td>";
   echo "<td>" . $row['product_details'] . "</td>";
   echo "<td>" . $row['UserId'] . "</td>";
   echo "<td>" . $row['base_price'] . "</td>";
   echo "<td>" . $row['current_price'] . "</td>";
   echo "<td>" . $row['closing_date'] . "</td>";
   echo "<td>" . $row['category_id'] . "</td>";
    
  echo "</tr>";
  }

echo "<h1>click here to bid more</h1><a href=bid.php><h1>Home</h1></a>";
}

echo"<form  action=bidpro.php method=post >
<b>Productid:</b> <input type=text name=product_id />
<b>Amount:</b> <input type=text name=amount /></br></br>
<b>UserId: </b><input type=text name=UserId /></br></br>
<input type=submit />
</form>"
?>

</body>

</html>