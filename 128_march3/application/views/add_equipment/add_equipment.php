<!DOCTYPE html>
<html>
<head>
<title>Add Equipment</title>
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
        <div class="tile bg-color-blue" id="genReport">
                	<a href="goToGenerateReport"><img src="../../img/invisible-LINK.png" /></a>
                </div>
          <div class="tile bg-color-greenLight" id="search">
           	<a href="#"><img src="../../img/invisible-LINK.png" /></a>
        </div>
    </div>
    <div id="content">
    	<header>
            <h1>Add Equipment</h1>
        </header>
        <section>
       <br />
<?php
	
	$_cnum ="";
	$_eqname ="";
	$_bormonth = "November";
	$_borday="05";
	$_boryear="2000";
	$_retmonth = "November";
	$_retday="05";
	$_retyear="2000";
	$_condb ="";
	$_condr="";
	
?>
<br/>
	<form id="equipmentForm" name="equipmentForm" method="post" action="addequipment" onsubmit="">
	<table>
	<tbody>
	
	<tr>
	<td>Control Number:</td><td><input type="number" name="cnum" id="cnum" pattern="[0-9]{10}" value="<?php print $_cnum ; ?>" required/></td>
	</tr>
	
	<tr>
	<td>Equipment Name:</td><td><input type="text" id="eqname" name="eqname" value="<?php print $_eqname ; ?>" required/></td>
	</tr>
	
	<tr>
	<td>Date borrowed:</td>
	<td>
	Month:
	<select name="bormonth" id="bormonth">
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
	Day:<input name="borday" id="borday" size="2" type=number value="<?php print $_borday?>" min="1" max="31" required//>
	Year:<input name="boryear" id="boryear" size="4" type=number value="<?php print $_boryear?>" min="1909" max="2013" required//>
	</td>
	</tr>
	
	<tr>
	<td>Date returned:</td>
	<td>
	Month:
	<select name="retmonth" id="retmonth">
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
	Day:<input name="retday" id="retday" size="2" type=number value="<?php print $_retday?>" min="1" max="31" required//>
	Year:<input name="retyear" id="retyear" size="4" type=number value="<?php print $_retyear?>" min="1909" max="2013" required//>
	</td>
	</tr>
	
	<tr>
	<td>Condition before borrowed date: </td><td><input type="text" name="condb" id="condb" value="<?php print $_condb ; ?>" required/></td>
	</tr>
	
	<tr>
	<td>Condition after returned date: </td><td><input type="text" name="condr" id="condr" value="<?php print $_condr ; ?>" required/></td>
	</tr>
	
	
	<tr>
	<td colspan='2'>
	<input type="submit" value="Add Equipment" onclick="" />
	</td>
	</tr>
	
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