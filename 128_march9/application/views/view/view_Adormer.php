<!DOCTYPE html>
<html>
<head>
<title>View a Dormer</title>
<link href="../../style.1.2.1.css" media="screen" rel="stylesheet" type="text/css" />
<link href="../../subPages.css" media="screen" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="../../../themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../../themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../../themes/dark/dark.css" type="text/css" media="screen" />
   	<link rel="stylesheet" href="../../../themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../nivo-slider.css" type="text/css" media="screen" />
   
   
	
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
	<div id="naviSub">
    	<div id="half1">
            <div class="tile bg-color-red" id="logOut">
                <a href="goToLogin"><img src="../../img/invisible-LINK.png" /></a>
            </div>
            <div class="tile bg-color-green" id="home">
                <a href="goToMain"><img src="../../img/invisible-LINK.png" /></a>
            </div>
        </div>
    	<div class="tile double-vertical bg-color-red" id="clocktile">
            <div id="clock"></div>
        </div>
        <div class="tile double bg-color-blue" id="slide">
           <div id="slide">
        	 <div id="wrapper">        
                <div class="slider-wrapper theme-default">
                      <div id="slider" class="nivoSlider">
                                <img src="../../images/women.jpg" data-thumb="../../images/women.jpg" alt="" title="#htmlcaption1"/>
                             	<img src="../../images/women1.jpg" data-thumb="../../images/women1.jpg" alt="" title="#htmlcaption2" />
                                <img src="../../images/women2.jpg" data-thumb="../../images/women2.jpg" alt="" title="#htmlcaption3" />
                                <img src="../../images/uplb.jpg" data-thumb="../../images/uplb.jpg" alt="" title="#htmlcaption4" />
                            </div>
                </div>
        
            </div>
           <script type="text/javascript" src="../../scripts/jquery-1.7.1.min.js"></script>
            <script type="text/javascript" src="../../jquery.nivo.slider.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
        </div>
        </div>
         <div class="tile bg-color-greenDark" id="manageResident">
           	<a href="goToManageResident"><img src="../../img/invisible-LINK.png" /></a>
        </div>
        <div class="tile bg-color-greenLight" id="room">
            	<a href="goToManageDorm"><img src="../../img/invisible-LINK.png" /></a>
        </div>
    </div>
    <div id="content">
    	<header>
            <h1>View a Dormer</h1>
        </header>
        <section>
<div id="infosheet">
       <br />
<?php
			foreach($data as $d){
				echo '<h1>'.$d['LASTNAME'].', '.$d['FIRSTNAME'].' '.$d['MIDDLENAME'].'</h1>';
				echo 'Student Number : '.$d['STUDENTNUMBER'].'<br>';
				echo 'Birthday : ';
				switch(substr($d['BIRTHDAY'],0,2)){
						case '01':
							echo 'January';
							break;
						case '02':
							echo 'February';
							break;
						case '03':
							echo 'March';
							break;
						case '04':
							echo 'April';
							break;
						case '05':
							echo 'May';
							break;
						case '06':
							echo 'June';
							break;
						case '07':
							echo 'July';
							break;
						case '08':
							echo 'August';
							break;
						case '09':
							echo 'September';
							break;
						case '10':
							echo 'October';
							break;
						case '11':
							echo 'November';
							break;
						case '12':
							echo 'December';
							break;
					}
				echo ' '.(substr($d['BIRTHDAY'],3,2));
				echo ' '.(substr($d['BIRTHDAY'],6,4)).'<br>';
				echo 'Age : '.$d['AGE'].'<br>';
				echo 'Course : '.$d['COURSE'].'<br>';
				echo 'College : '.$d['COLLEGE'].'<br>';
				echo 'Classification : '.$d['CLASSIFICATION'].'<br>';
				echo 'Expected Time of Graduation : ';
					switch(substr($d['ETIMEOFGRAD'],0,2)){
						case '01':
							echo 'January';
							break;
						case '02':
							echo 'February';
							break;
						case '03':
							echo 'March';
							break;
						case '04':
							echo 'April';
							break;
						case '05':
							echo 'May';
							break;
						case '06':
							echo 'June';
							break;
						case '07':
							echo 'July';
							break;
						case '08':
							echo 'August';
							break;
						case '09':
							echo 'September';
							break;
						case '10':
							echo 'October';
							break;
						case '11':
							echo 'November';
							break;
						case '12':
							echo 'December';
							break;
					}
				echo ' '.(substr($d['ETIMEOFGRAD'],6,4)).'<br>';
				echo 'Civil Status : '.$d['CIVILSTATUS'].'<br>';
				echo 'Home Address : '.$d['HOMEADDRESS'].'<br>';
				echo 'Contact Number : '.$d['CONTACTNUMBER'].'<br>';
				echo 'Email Address : '.$d['EMAILADDRESS'].'<br>';
				echo 'Scholarship : '.$d['SCHOLARSHIP'].'<br>';
				echo 'STFAP Bracket : '.$d['STFAPBRACKET'].'<br>';
				echo 'Monthly Allowance : '.$d['MONTHLYALLOWANCE'].'<br>';
				echo 'Religion : '.$d['RELIGION'].'<br>';
				echo 'Number of Brother : '.$d['NUMOFBROTHER'].'<br>';
				echo 'Number of Sister : '.$d['NUMOFSISTER'].'<br>';
				echo 'Birth Order : '.$d['BIRTHORDER'].'<br>';
				echo 'In Relationship? : '.$d['INRELATIONSHIP'].'<br>';
				echo 'Status of Residency : '.$d['STATUSOFRESIDENCY'].'<br>';
				echo 'Room Number : '.$d['ROOMNUMBER'].'<br>';
				echo 'Date Accepted : ';
				switch(substr($d['DATEACCEPTED'],0,2)){
						case '01':
							echo 'January';
							break;
						case '02':
							echo 'February';
							break;
						case '03':
							echo 'March';
							break;
						case '04':
							echo 'April';
							break;
						case '05':
							echo 'May';
							break;
						case '06':
							echo 'June';
							break;
						case '07':
							echo 'July';
							break;
						case '08':
							echo 'August';
							break;
						case '09':
							echo 'September';
							break;
						case '10':
							echo 'October';
							break;
						case '11':
							echo 'November';
							break;
						case '12':
							echo 'December';
							break;
					}
				echo ' '.(substr($d['DATEACCEPTED'],3,2));
				echo ' '.(substr($d['DATEACCEPTED'],6,4)).'<br>';
				
			}
		?>
<br />
</div>
        </section>
        <footer>
            (C)2013 <a class="link link-blue" href="#/">cs128 - Group 4</a>
        </footer>
    </div>

</body>

</html>




<!--References:

Retrived at 2 February, 2013 from
http://simoborto.altervista.org
https://uho.uplb.edu.ph/index.php
http://danielrichardeviant.deviantart.com/
http://dev7studios.com/
-->