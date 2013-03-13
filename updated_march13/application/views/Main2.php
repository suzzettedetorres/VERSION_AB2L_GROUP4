<!DOCTYPE html>
<html>
<head>
<title>Main</title>
<link href="style.1.2.1.css" media="screen" rel="stylesheet" type="text/css" />
<link href="Main.css" media="screen" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="../themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../themes/dark/dark.css" type="text/css" media="screen" />
   	<link rel="stylesheet" href="../themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
   
   <!--Clock code-->
    <script type="text/javascript">
	function startTime()
	{
		var today=new Date();
		var hh=today.getHours();
		var m=today.getMinutes();
		var months = ['Jan.','Feb.','Mar.','Apr.','May','Jun.','Jul.','Aug.','Sep.','Oct.','Nov.','Dec.'];
		var weekday = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];  
		// add a zero in front of numbers<10
		m=checkTime(m);
		 var h = hh;
    if (h >= 12) {
        h = hh-12;
        dd = "PM";
    }
    if (h == 0) {
        h = 12;
    }
		today.setTime(today.getTime()); 
		  document.getElementById('clock').innerHTML=h+":"+m+"<br /><br />"+weekday[today.getDay()]+"<br /><br />"+today.getDate()+" "+months[today.getMonth()];
		t=setTimeout(function(){startTime()},500);
	}
	
	function checkTime(i)
	{
	if (i<10)
	  {
	  i="0" + i;
	  }
	return i;
	}
    </script>
	
</head>

<body onload="startTime()">	
<section>
	<div id="navigation">
    	<div id="div1"> 
                <div class="tile bg-color-red" id="logOut">
                		<a href="index.php/insert/goToLogout"><img src="img/invisible-LINK.png" /></a>
                </div>
                <div class="tile bg-color-blue" id="addApplicant">
                	<a href="index.php/insert/goToAddApplicant"><img src="img/invisible-LINK.png" /></a>
                </div>
            	<div class="tile bg-color-blue" id="genReport">
                	<a href="index.php/insert/goToGenerateReport"><img src="img/invisible-LINK.png" /></a>
                </div>
           		<div class="tile bg-color-blue" id="sendEmail">
                	<a href="index.php/insert/goToSendReport"><img src="img/invisible-LINK.png" /></a>
                </div>
    	</div>
        <div id="div2">
        	<div class="tile double-vertical bg-color-red" id="clocktile">
            <div id="clock"></div>
            </div>
        </div>
        <div id="div3">        	
        	<div class="tile double double-vertical bg-color-greenDark" id="manageResident">
            	<a href="index.php/insert/goToManageResident"><img src="img/invisible-LINK-BIG.png" /></a>
            </div>
        </div>
        <div id="div4">        	
            <div class="tile bg-color-greenLight" id="room">
            	<a href="index.php/insert/goToManageDorm"><img src="img/invisible-LINK.png" /></a>
            </div>
           	<div class="tile bg-color-blue" id="remove">
            	<a href="index.php/insert/goToManageAdminAccount"><img src="img/invisible-LINK.png" /></a>
            </div>
        </div>
    </div>
    <div id="Main">
        <div id="slide">
        	 <div id="wrapper">        
                <div class="slider-wrapper theme-default">
                      <div id="slider" class="nivoSlider">
                                <img src="images/women.jpg" data-thumb="images/women.jpg" alt="" title="#htmlcaption1"/>
                             	<img src="images/women1.jpg" data-thumb="images/women1.jpg" alt="" title="#htmlcaption2" />
                                <img src="images/women2.jpg" data-thumb="images/women2.jpg" alt="" title="#htmlcaption3" />
                                <img src="images/uplb.jpg" data-thumb="images/uplb.jpg" alt="" title="#htmlcaption4" />
                            </div>
                </div>
        
            </div>
            <script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>
            <script type="text/javascript" src="jquery.nivo.slider.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
        </div>
         <div class="fg-color-white" id="title">Women's Residence Hall Dormers Management System</div>
    	<div id="banner">This web-based database management system for Women's Residence Hall, one of the dormitories in the University of the Philippines Los Baños will keep track of the records and data of the dormers including residents' personal information, contact details, payment records, reservation records, violation records, and records on usage of furniture, appliances, equipment and other resources.</div>
    </div>
</section>
<footer>
	(C)2013 <a class="link link-blue" href="#/">cs128 - Group 4</a>
</footer>
</body>

</html>




<!--References:

Retrived at 2 February, 2013 from
http://simoborto.altervista.org
https://uho.uplb.edu.ph/index.php
http://danielrichardeviant.deviantart.com/
http://dev7studios.com/
http://stackoverflow.com/questions/4904667/html-how-do-i-insert-dynamic-date-in-webpage
http://www.w3schools.com/js/default.asp

-->