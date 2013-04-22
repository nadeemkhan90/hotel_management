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


<body onLoad="setCurrentMonth()">




<table border="0" width="100%" cellpadding="10">
<tr>
<td width="30%" valign="top">

</td>
<td width="40%" valign="top">
<h1 class="sansserif"><i>HOTEL MARC IN</center></i></h1>
</td>
<td width="30%" valign="top">

</td>
</tr>
</table>
<hr/>


<center><u><i><b>CHECK IN FORM</b></i></u></center>
<table border="0" width="100%" cellpadding="10">
<tr>

<td width="40%" valign="top">

<form name="input" action="http://localhost/site/check_in2.php" method="post" >


Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" /><br/>
Address:&nbsp;&nbsp;&nbsp; &nbsp;<input type="text" name="address" ><br/>
Age: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="age" /><br/>
City: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="city"><br/>
Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="country">
<option value="" selected="selected">Select a Country&nbsp;&nbsp;</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="Andorra">Andorra</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Bulgaria">Bulgaria</option><option value="Cambodia">Cambodia</option><option value="Canada">Canada</option><option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Costa Rica">Costa Rica</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Estonia">Estonia</option><option value="Finland">Finland</option><option value="France">France</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Guatemala">Guatemala</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kenya">Kenya</option><option value="Korea, Republic Of">Korea, Republic Of</option><option value="Latvia">Latvia</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Moldova, Republic Of">Moldova, Republic Of</option><option value="Morocco">Morocco</option><option value="Myanmar">Myanmar</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Nigeria">Nigeria</option><option value="Norway">Norway</option><option value="Pakistan">Pakistan</option><option value="Panama">Panama</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Serbia">Serbia</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Thailand">Thailand</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Yemen">Yemen</option></select><br/>
Passport No:&nbsp; <input type="text" name="passport_no"><br/>

Phone No:&nbsp;&nbsp; <input type ="text" name="phone_no"><br/>


check-in-date: &nbsp;&nbsp;<input type="text" name="arrival_date" > </br>

check-out-date:&nbsp;&nbsp; <input type="text" name="depar" > </br>


Sex: &nbsp;&nbsp;
<input type="radio" name="sex" value="male" /> Male
<input type="radio" name="sex" value="female" /> Female</br>
Room no: &nbsp;&nbsp;<input type="text" name="room_no"><br/>
Room type:&nbsp;&nbsp;<br/>
<input type="radio" name="room_type" value="discounted" /> discounted
<input type="radio" name="room_type" value="business" /> business
<input type="radio" name="room_type" value="primium" /> primium <br/>

<input type="submit" value="Submit" />
</b>
</font>
</pre>
</form>
</td>

</body>
</html>