<!DOCTYPE html>
<html>
<head>
<title>Add Violation</title>
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
        <<div class="tile bg-color-greenDark" id="manageResident">
           	<a href="goToManageResident"><img src="../../img/invisible-LINK.png" /></a>
        </div>
        <div class="tile bg-color-greenLight" id="room">
            	<a href="goToManageDorm"><img src="../../img/invisible-LINK.png" /></a>
        </div>
    </div>
    <div id="content">
    	<header>
            <h1>Add Violation</h1>
        </header>
        <section>
		
		<div class="desc bg-color-green">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere convallis ante eget condimentum. Aliquam porttitor gravida leo eget egestas. Nulla facilisi. Aenean placerat diam lectus. Phasellus id rutrum massa. Fusce fringilla, neque in ullamcorper placerat, sapien dolor fermentum nisi, ut gravida dui lorem eu nisi. Vivamus tincidunt cursus molestie. Mauris enim lacus, vestibulum eget dapibus sit amet, tempus eu augue.
	</div>


<div id="infosheet">
		
       <br />
<?php
	
	foreach($data as $d){
		$_stnum = $d['STUDENTNUMBER'];
	}
		$date=date('m-d-Y');
		$_violation ="Suicide";
		$_vmonth = substr($date,0,2);
		$_vday = substr($date,3,2);
		$_vyear = substr($date,6,4);
		$_remarks ="Poison";
	
?>
<br/>
	<form id="ViolationForm" name="Violation" method="post" action="addviolation" onsubmit="">
	<table>
	<tbody>
	
	<tr>
	<td>Student Number: </td>
	<td><div class="input-control text inputStyle">
    <input type="text" name="stnum" id="stnum" pattern="[0-9]{4}-[0-9]{5}" value="<?php print $_stnum ; ?>"  required/></div></td>
	</tr>
	
	<tr>
	<td>Violation:</td>
    <td><div class="input-control text inputStyle">
	<select name="violation" id="violation">
		<option value="Failure To Pay Dormitory Fees on Time">Failure To Pay Dormitory Fees on Time</option>
		<option value="Damage on Dormitory Properties">Damage on Dormitory Properties</option>
		<option value="Late Attendance">Late Attendance</option>
		<option value="Excessive Absences Without Permit or Notification">Excessive Absences Without Permit or Notification</option>
		<option value="Misconduct and/or Misbehavior">Misconduct and/or Misbehavior</option>
		<option value="Usage of Unauthorized Appliances">Usage of Unauthorized Appliances</option>
		<option value="Other Violations">Other Violations</option>
	</select>
	</tr>
	
	<tr>
	<td>Date of Violation:</td>
	<td><div id="bday">
	<div class="span3 input-control select" id="M">
    Month:<br />
	<select name="vmonth" id="vmonth">
		<option value="01">January</option>
		<option value="02">February</option>
		<option value="03">March</option>
		<option value="04">April</option>
		<option value="05">May</option>
		<option value="06">June</option>
		<option value="07">July</option>
		<option value="08">August</option>
		<option value="09">September</option>
		<option value="10">October</option>
		<option value="11">November</option>
		<option value="12">December</option>
	</select>
	</div>
	<div class="input-control number inputStyle" id="D">Day:<br />
    <input name="vday" id="vday" size="2" type="number" value="<?php print $_vday?>" min="1" max="31" required//>
    </div>
    <div class="input-control number inputStyle" id="Y">Year:<br />
    <input name="vyear" id="vyear" size="4" type="number" value="<?php print $_vyear?>" min="1909" max="2013" required//>
    </div>
    </div>
	</td>
	</tr>
	
	<tr>
	<td>Remarks:</td>
    <td><div class="input-control text inputStyle">
    <input type="text" name="remarks" id="remarks" value="<?php print $_remarks ; ?>" required/></div></td>
	</tr>
	
	<tr><td></td>
	<td style="text-align:left" colspan='2'>
	<input type="submit" class="btn-three" value="Add Violation" onclick="" />
	</td></tr>
	</table>
</form>
<br />
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