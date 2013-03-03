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
        <div class="tile bg-color-blue" id="genReport">
                	<a href="goToGenerateReport"><img src="../../img/invisible-LINK.png" /></a>
                </div>
          <div class="tile bg-color-greenLight" id="search">
           	<a href="#"><img src="../../img/invisible-LINK.png" /></a>
        </div>
    </div>
    <div id="content">
    	<header>
            <h1>Add Violation</h1>
        </header>
        <section>
       <br />
<?php
	
	foreach($data as $d){
		$_stnum = $d['STUDENTNUMBER'];
	}
		//$_violationid ="DeTorres_Suicide";
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
	<td><input type="text" name="stnum" id="stnum" pattern="[0-9]{4}-[0-9]{5}" value="<?php print $_stnum ; ?>"  required/></td>
	</tr>
	
	<!--<tr>
	<td>Violation ID: </td>
	<td><input type="text" name="violationid" id="violationid" value="<?php print $_violationid; ?>" required/></td>
	</tr>-->
	
	<tr>
	<td>Violation:</td><td><input type="text" id="violation" name="violation" value="<?php print $_violation; ?>" required/></td>
	</tr>
	
	<tr>
	<td>Date of Violation:</td>
	<td>Month:
		<select name="vmonth" id="vmonth">
			<option value="01" <?php if($_vmonth==01) print 'selected="selected"'?>>January</option>
			<option value="02" <?php if($_vmonth==02) print 'selected="selected"'?>>February</option>
			<option value="03" <?php if($_vmonth==03) print 'selected="selected"'?>>March</option>
			<option value="04" <?php if($_vmonth==04) print 'selected="selected"'?>>April</option>
			<option value="05" <?php if($_vmonth==05) print 'selected="selected"'?>>May</option>
			<option value="06" <?php if($_vmonth==06) print 'selected="selected"'?>>June</option>
			<option value="07" <?php if($_vmonth==07) print 'selected="selected"'?>>July</option>
			<option value="08" <?php if($_vmonth==08) print 'selected="selected"'?>>August</option>
			<option value="09" <?php if($_vmonth==09) print 'selected="selected"'?>>September</option>
			<option value="10" <?php if($_vmonth==10) print 'selected="selected"'?>>October</option>
			<option value="11" <?php if($_vmonth==11) print 'selected="selected"'?>>November</option>
			<option value="12" <?php if($_vmonth==12) print 'selected="selected"'?>>December</option>
		</select>
	Day:<input name="vday" id="vday" size="2" type=number value="<?php print $_vday?>" min="1" max="31" required//>
	Year:<input name="vyear" id="vyear" size="4" type=number value="<?php print $_vyear?>" min="1909" max="2013" required//>
	</td>
	</tr>
	
	<tr>
	<td>Remarks:</td><td><input type="text" name="remarks" id="remarks" value="<?php print $_remarks ; ?>" required/></td>
	</tr>
	
	<tr><td colspan='2'>
	<input type="submit" value="Add Violation" onclick="" />
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