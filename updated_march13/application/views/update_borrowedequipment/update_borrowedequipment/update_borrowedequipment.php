<!DOCTYPE html>
<html>
<head>
<title>Update Dormer's Borrowed Equipment Record</title>
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
            <h1>Update Dormer's Borrowed Equipment Record</h1>
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
	
	foreach($equipments as $e){
		$control_number = $e['CONTROLNUMBER'];
		$date_borrowed_month = substr($e['DATEBORROWED'],0,2);
		$date_borrowed_day = substr($e['DATEBORROWED'],3,2);
		$date_borrowed_year = substr($e['DATEBORROWED'],6,4);
		//$date_returned = $_POST['retmonth'].'-'.$_POST['retday'].'-'.$_POST['retyear'];
		$condb = $e['CONDBEFOREBORROWED'];
		//$condr= $_POST['condr'];
	}
	
	foreach($allequipments as $ae){
		if($control_number == $ae['CONTROLNUMBER']){
			$equipment = $ae['EQUIPMENTNAME'];
			break;
		}
	}
	
	$_month = date('m');
	$_day = date('d');
	$_year = date('Y');
	
?>
<br/>
	<form id="borrowedequipmentForm" name="borrowedequipmentForm" method="post" action="updateborrowedequipment" onsubmit="">
	<table>
	<tbody>
	
	<tr>
	<td>Student Number: </td>
	<td><div class="input-control text inputStyle">
    <input type="text" name="stnum" id="stnum" pattern="[0-9]{4}-[0-9]{5}" value="<?php print $_stnum ; ?>"  required/></div></td>
	</tr>
	
	<tr>
	<td>Borrowed Equipment: </td>
	<td><div class="span3 input-control select">
	<?php echo $equipment?>
	</div></td>
	</tr>
	
	<tr>
	<td>Control Number: </td>
	<td>
	<div class="span3 input-control select">
	<input type="text" name="control_number" id="control_number" value="<?php print $control_number ; ?>"  required/></div></td>
	</div>
	</td>
	</tr>
	
	<tr>
	<td>Date borrowed:</td>
	<td>
    <div id="bday">
	<div class="span3 input-control select" id="M">
    Month:<br />
	<select name="bormonth" id="bormonth">
		<option value="01" <?php if($date_borrowed_month==01) print 'selected="selected"'?>>January</option>
		<option value="02" <?php if($date_borrowed_month==02) print 'selected="selected"'?>>February</option>
		<option value="03" <?php if($date_borrowed_month==03) print 'selected="selected"'?>>March</option>
		<option value="04" <?php if($date_borrowed_month==04) print 'selected="selected"'?>>April</option>
		<option value="05" <?php if($date_borrowed_month==05) print 'selected="selected"'?>>May</option>
		<option value="06" <?php if($date_borrowed_month==06) print 'selected="selected"'?>>June</option>
		<option value="07" <?php if($date_borrowed_month==07) print 'selected="selected"'?>>July</option>
		<option value="08" <?php if($date_borrowed_month==08) print 'selected="selected"'?>>August</option>
		<option value="09" <?php if($date_borrowed_month==09) print 'selected="selected"'?>>September</option>
		<option value="10" <?php if($date_borrowed_month==10) print 'selected="selected"'?>>October</option>
		<option value="11" <?php if($date_borrowed_month==11) print 'selected="selected"'?>>November</option>
		<option value="12" <?php if($date_borrowed_month==12) print 'selected="selected"'?>>December</option>
	</select>
	</div>
	<div class="input-control number inputStyle" id="D" >Day:<br />
    <input name="borday" id="borday" size="2" type="number" min="1" max="31" value="<?php print $date_borrowed_day;?>" required/>
    </div>
	<div class="input-control number inputStyle" id="Y">Year:<br />
    <input name="boryear" id="boryear" size="4" type="number" min="1909" max="2013" value="<?php print $date_borrowed_year;?>" required/>
    </div>
    </div>
	</td>
	</tr>
	
	<tr>
	<td>Date returned:</td>
	<td>
    <div id="bday">
	<div class="span3 input-control select" id="M">
    Month:<br />
	<select name="retmonth" id="retmonth">
		<option value="01" <?php if($_month==01) print 'selected="selected"'?>>January</option>
		<option value="02" <?php if($_month==02) print 'selected="selected"'?>>February</option>
		<option value="03" <?php if($_month==03) print 'selected="selected"'?>>March</option>
		<option value="04" <?php if($_month==04) print 'selected="selected"'?>>April</option>
		<option value="05" <?php if($_month==05) print 'selected="selected"'?>>May</option>
		<option value="06" <?php if($_month==06) print 'selected="selected"'?>>June</option>
		<option value="07" <?php if($_month==07) print 'selected="selected"'?>>July</option>
		<option value="08" <?php if($_month==08) print 'selected="selected"'?>>August</option>
		<option value="09" <?php if($_month==09) print 'selected="selected"'?>>September</option>
		<option value="10" <?php if($_month==10) print 'selected="selected"'?>>October</option>
		<option value="11" <?php if($_month==11) print 'selected="selected"'?>>November</option>
		<option value="12" <?php if($_month==12) print 'selected="selected"'?>>December</option>
	</select>
	</div>
	<div class="input-control number inputStyle" id="D" >Day:<br />
    <input name="retday" id="retday" size="2" type="number" min="1" max="31" value="<?php print $_day;?>" required/>
    </div>
	<div class="input-control number inputStyle" id="Y">Year:<br />
    <input name="retyear" id="retyear" size="4" type="number" min="1909" max="2013" value="<?php print $_year;?>" required/>
    </div>
    </div>
	</td>
	</tr>
	
	<tr>
	<td>Condition before borrowed: </td>
    <td><div class="input-control text inputStyle">
    <input type="text" name="condb" id="condb" value="<?php print $condb ; ?>" required/>
    </div></td>
	</tr>
	
	<tr>
	<td>Condition after returned: </td>
    <td><div class="input-control text inputStyle">
    <input type="text" name="condr" id="condr" required/>
    </div></td>
	</tr>
	
	<tr><td></td>
	<td style="text-align:left" colspan='2'>
	<input type="submit" class="btn-three" value="Mark Borrowed Equipment as RETURNED" onclick="" />
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