<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>MIS PROJECT</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="maxheight.js" type="text/javascript"></script>
<!--[if lt IE 7]>
	<link href="ie_style.css" rel="stylesheet" type="text/css" />
   <script type="text/javascript" src="ie_png.js"></script>
   <script type="text/javascript">
       ie_png.fix('.png, #header .row-2, #header .nav li a, #content, .gallery li');
   </script>
<![endif]-->

<script type="text/javascript" src="swfobject.js"></script>
<script type="text/javascript">
var flashvars = {};
var params = {};
params.scale = "noscale";
params.salign = "tl";
params.wmode = "transparent";
params.allowScriptAccess = "always";
params.allowFullScreen = "true";
var attributes = {};
swfobject.embedSWF("BannerRotatorFX.swf", "BannerRotatorFXDiv", "600", "260", "9.0.0", false, flashvars, params, attributes);
</script>
</head>

<body id="page1" onload="new ElementMaxHeight();">

	<div id="main">
		<!-- header -->
		<div id="header">
	
			<div class="row-1">
         	<div class="wrapper">
            	<div class="logo">
				
               	<h1><a href="index.html"><i>MARC INN</i></a></h1>
				<div id="wb_JavaScript1" style="position:absolute;left:80px;top:120px;width:4902px;height:2px;z-index:1;" align="left">
<div style="color:#FFFFFF;font-size:28px;font-family:Salina;" id="jumpx"></div>
				<script type="text/javascript">
				
				
message="..... THE TRUE LUXURY.....";
mes=new Array();
mes[0]=-1;
mes[1]=-4;
mes[2]=-7;
mes[3]=-10;
mes[4]=-7;
mes[5]=-4;
mes[6]=-1;
num=0;
num2=0;
txt="";

function jump0()
{
   if (message.length > 6)
   {
      for(i=0; i!=message.length; i++)
      {
         txt = txt + "<span style='position:relative;' id='n"+i+"'>"+message.charAt(i)+"</span>";
      }
      jump = document.getElementById("jumpx");
      jump.innerHTML = txt;
      txt = "";
      jump1a();
   }
}

function jump1a()
{
   nfinal = document.getElementById("n0");
   nfinal.style.left = (-num2).toString() + "px";
   if (num2 != 9)
   {
      num2 = num2 + 3;
      setTimeout("jump1a()", 50);
   }
   else
   {
      jump1b();
   }
}

function jump1b()
{
   nfinal = document.getElementById("n0");
   nfinal.style.left = (-num2).toString() + "px";
   if (num2 != 0)
   {
      num2 = num2-3;
      setTimeout("jump1b()",50);
   }
   else
   {
      jump2();
   }
}

function jump2()
{
   txt = "";
   for(i=0;i != message.length; i++)
   {
      if (i+num > -1 && i+num < 7)
      {
         txt = txt + "<span style='position:relative;top:" + mes[i+num] + "px'>" + message.charAt(i) + "</span>";
      }
      else
      {
         txt = txt + "<span>" + message.charAt(i) + "</span>";
      }
   }
   jump = document.getElementById("jumpx");
   jump.innerHTML = txt;
   txt = "";
   if (num != (-message.length))
   {
      num--;
      setTimeout("jump2()",50);
   }
   else
   {
      num=0;
      setTimeout("jump0()",50);
   }
}
jump0();
</script></div>

                  <em>Hotel</em>
                 
               </div>
               <div class="phones">
               	+91-9829740468<br />
                  +91-9782138281
               </div>
            </div>
         </div>
		 
			<div class="row-2">
         	<div class="indent">
               <!-- header-box begin -->
               <div class="header-box">
                  <div class="inner">
                     <ul class="nav">
                     	<li><a href="roomsbooked.php" class="current">Rooms Booked</a></li>
                        <li><a href="roomsvacant.php">Rooms Vacant</a></li>
                        <li><a href="managemenu.php">Food Menu</a></li>
                        <li><a href="demployee.php">Employees</a></li>
                        <li><a href="testimonials.html">Expenses</a></li>
                        <li><a href="booking.html">LOG OUT</a></li>
                     </ul>
                  </div>
               </div>
               <!-- header-box end -->
            </div>
         </div>
		</div>
		<!-- content -->
		
            <div class="content">
            	<div class="indent">
               	
                        </dl>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		</div>
		<!-- footer -->
		<div id="footer">
      	<ul class="nav">
         	<li><a href="index.html">Home</a>|</li>
            <li><a href="services.html">Services</a>|</li>
            <li><a href="gallery.html">Gallery</a>|</li>
            <li><a href="restaurant.html">Restaurant</a>|</li>
            <li><a href="testimonials.html">Testimonials</a>|</li>
            <li><a href="booking.html">Booking</a></li>
         </ul>
         <div class="wrapper">
            <div class="fleft">Copyright (c) 2011 IT-2</div>
            </div>
      </div>
	</div>
	
</body>
</html>f