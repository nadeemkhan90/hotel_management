
<html>
<head>
<script language="JavaScript" src="js/valid6.js">

</script>
<style type="text/css">
h1 {text-align:center}
div.img
  {
  margin:5px;
  height:auto;
  width:auto;
  float:left;
  
  }
  div.img1
  {
  margin:5px;
  height:auto;
  width:auto;
  float:right;
  
  }
body
{
background-color:#E6E6FA;
}
h1.sansserif{font-family:"Comic Sans MS", cursive, sans-serif}

</style>
</head>

<body >
<table border="0" width="100%" cellpadding="10">
<tr>
<td width="30%" valign="top">
 <div class="img">  <img src="alogo.jpg"  width="90" height="70" />
</td>
<td width="40%" valign="top">
  <h1 class="sansserif"><i>HOTEL ADRIA</center></i></h1>
  </td>
  <td width="30%" valign="top">
 <div class="img1">  <img src="alogo.jpg"  width="90" height="70" />
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
  else
 { 
  mysql_select_db("mislab", $con);


  
 
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

  </body>
  </html>
 