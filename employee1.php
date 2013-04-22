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
</head>
<body>

  <h1 class="sansserif"><i>MARCC INN</center></i></h1>
  </td>

</td>
  </tr>
  </table>
  <hr/>
</style>
</head>

<body>
<center><u><i><b>EMPLOYEE DETAIL</b></i></u></center>
<body>

<form name="input" action="employee2.php" method="post"  onsubmit="return formCheck(this);">
<pre>
<font size="4"><b>Employee No:     <input type="text" name="employee_no"><br/>
Name:            <input type="text" name="em_name" /><br/>
Sex:<br/>        
                 <input type="radio" name="sex" value="male" /> Male<br />
                 <input type="radio" name="sex" value="female" /> Female</br>
Address:         <input type="text" name="address"><br/>
DOB:            <form name="input"> <input type="text" name="dob" size=20> <small><a
href="javascript:showCal('Calendar1')"><img src="y.jpg" width=15 height=15 border=0></a></small></br>
Hire Date:       <input type="text" name="hire_date" size=20> <small><a
href="javascript:showCal('Calendar2')"><img src="y.jpg" width=15 height=15 border=0></a></small>
</form><br/>


Phone No:        <input type="text" name="phone_no"><br/>
Qualification:   <select name="qualification">
<option value="secondary">secondary</option>
<option value="higher secondary">higher secondary</option>
<option value="graduate">graduate</option>
<option value="post graduate">post graduate</option>
<option value="other">other</option>
</select>
<br/>      
Designation:     <select name="designation">
<option value="manager">manager</option>
<option value="waiter">waiter</option>
<option value="receptionist">receptionist</option>
<option value="room_boy">room_boy</option>
<option value="other">other</option>
</select>
<br/>
DEPARTMENT:      <select name="dept">
<option value="maintainance">maintainance</option>
<option value="restaurent">restaurent</option>
<option value="customer_caring">customer_caring</option>
<option value="other">other</option>
</select>
<br/>
Salary:          <input type="text" name="salary"><br/>	
             <input type="submit" value="Submit" />
			 </b>
			 </font>
</pre>
			   </form>

</body>
</html> 