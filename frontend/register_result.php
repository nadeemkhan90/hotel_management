<head>
<title>online Auctioning portal</title>
<script type="text/javascript" src="jquery.js"></script>
<style type="text/css">
	@import url(css.css);
</style>
<script type="text/javascript" src="js.js"></script>

<script type="text/javascript">
        var GB_ROOT_DIR = ".//greybox//";
    </script>

    <script type="text/javascript" src="greybox/AJS.js"></script>
    <script type="text/javascript" src="greybox/AJS_fx.js"></script>
    <script type="text/javascript" src="greybox/gb_scripts.js"></script>
    <link href="greybox/gb_styles.css" rel="stylesheet" type="text/css"  />


<title>add</title>
<link rel = "stylesheet" type = "text/css" href = "sheet.css">
</head>

<h1>Welcome to Company</h1>

<body>
<div id="wrapper">
    <h1>ajax ... nettuts</h1>
    <ul id="nav">
        <li><a href="index.html">welcome</a></li>

        <li><a href="login.html">LOGOUT</a></li>

</ul>
<div id="content">

<body style="background-color:black">
<p class = "left"></p>

<p class = "result">> 
</body>
</html>
<head>
<script type="text/javascript" src="jquery.js"></script>
<style type="text/css">
	@import url(css.css);
</style>
<script type="text/javascript" src="js.js"></script>

<script type="text/javascript">
        var GB_ROOT_DIR = ".//greybox//";
    </script>

    <script type="text/javascript" src="greybox/AJS.js"></script>
    <script type="text/javascript" src="greybox/AJS_fx.js"></script>
    <script type="text/javascript" src="greybox/gb_scripts.js"></script>
    <link href="greybox/gb_styles.css" rel="stylesheet" type="text/css"  />


<title>add</title>
<link rel = "stylesheet" type = "text/css" href = "sheet.css">
</head>
<h1>Welcome to Company</h1>

<body>

<body style="background-color:red ">
<p class = "left"><b>new user</b></p>
<h3>Writing a form for user input</h3>
<p class = "result">>
<?php
$product_id = filter_input(INPUT_GET, "product_id");
$product_name = filter_input(INPUT_GET, "product_name");
$product_details = filter_input(INPUT_GET, "product_details");
$UserId = filter_input(INPUT_GET, "UserId");
$base_price = filter_input(INPUT_GET, "base_price");
$current_price = filter_input(INPUT_GET, "current_price");
$closing_date = filter_input(INPUT_GET, "closing_date");
$category_id= filter_input(INPUT_GET, "proselect");
//make the database connection
$conn = mysql_connect("localhost", "root") or die (mysql_error());
mysql_select_db("my_auction", $conn);
$sql = "INSERT INTO `my_auction`.`products` (
`product_id` ,
`product_name` ,
`product_details` ,
`UserId` ,
`base_price` ,
`current_price` ,
`closing_date` ,
`category_id`
)
VALUES 
('$product_id', '$product_name', '$product_details', '$UserId', '$base_price', '$current_price', '$closing_date', '$proselect');";
$result = mysql_query($sql, $conn) or die(mysql_error());
if($result ==1)
print "Product is successfully added";
else
print "$id already exists";
?> 
</body>
</html>
