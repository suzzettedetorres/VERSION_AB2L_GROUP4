<!DOCTYPE html>
<html>
<head>
<title>Edit Dormer</title>
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
            <h1>Edit Dormer</h1>
        </header>
        <section>
		<div class="desc bg-color-green">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere convallis ante eget condimentum. Aliquam porttitor gravida leo eget egestas. Nulla facilisi. Aenean placerat diam lectus. Phasellus id rutrum massa. Fusce fringilla, neque in ullamcorper placerat, sapien dolor fermentum nisi, ut gravida dui lorem eu nisi. Vivamus tincidunt cursus molestie. Mauris enim lacus, vestibulum eget dapibus sit amet, tempus eu augue.
	</div>
<div id="infosheet">
       <br />
<?php
		foreach($data as $d){
			$_stnum = $d['STUDENTNUMBER'];
			$_fname = $d['FIRSTNAME'];
			$_mname = $d['MIDDLENAME'];
			$_lname = $d['LASTNAME'];
			$_brmonth = substr($d['BIRTHDAY'],0,2);
			$_brday = substr($d['BIRTHDAY'],3,2);
			$_bryear = substr($d['BIRTHDAY'],6,4);
			$_age= $d['AGE'];
			$_course = $d['COURSE'];
			$_college = $d['COLLEGE'];
			$_classification = $d['CLASSIFICATION'];
			$_gradmonth = substr($d['ETIMEOFGRAD'],0,2);
			$_gradyear = substr($d['ETIMEOFGRAD'],6,4);
			$_civilstat=$d['CIVILSTATUS'];
			$_homeadd=$d['HOMEADDRESS'];
			$_cpnum=$d['CONTACTNUMBER'];
			$_eadd=$d['EMAILADDRESS'];
			$_scholarship=$d['SCHOLARSHIP'];
			$_stfapbracket=$d['STFAPBRACKET'];
			$_moallow=$d['MONTHLYALLOWANCE'];
			$_religion=$d['RELIGION'];
			$_numbro=$d['NUMOFBROTHER'];
			$_numsis=$d['NUMOFSISTER'];
			$_birthorder=$d['BIRTHORDER'];
			$_inrel=$d['INRELATIONSHIP'];
			$_roomnum=$d['ROOMNUMBER'];
		}
		$_affiliation="YSES";
		$_ailment="allergy";
		$_medication="anti-histamine";
	?>
	<form id="dormerForm" name="dormerForm" method="post" action="editdormer" onsubmit="">
	<table>
	<tr>
	<td>Student Number: </td>
	<td><div class="input-control text inputStyle">
    <input type="text" name="stnum" id="stnum" pattern="[0-9]{4}-[0-9]{5}" value="<?php print $_stnum ; ?>"  required/>
    </div></td>
	</tr>
	<tr>
	<td>First Name: </td>
	<td><div class="input-control text inputStyle">
    <input type="text" name="fname" id="fname" value="<?php print $_fname ; ?>" required/></div></td>
	</tr>
	<tr>
	<td>Middle Name: </td>
	<td><div class="input-control text inputStyle">
    <input type="text" name="mname" id="mname" value="<?php print $_mname ; ?>" required/></div></td>
	</tr>
	<tr>
	<td>Last Name: </td>
	<td><div class="input-control text inputStyle">
    <input type="text" name="lname" id="lname" value="<?php print $_lname ; ?>" required/></div></td>
	</tr>
	<tr>
	<td>Birthday:</td>
	<td><div id="bday">
	<div class="span3 input-control select" id="M">
	Month:<br />
	<select name="brmonth" id="brmonth">
		<option value="01" <?php if($_brmonth==01) print 'selected="selected"'?>>January</option>
		<option value="02" <?php if($_brmonth==02) print 'selected="selected"'?>>February</option>
		<option value="03" <?php if($_brmonth==03) print 'selected="selected"'?>>March</option>
		<option value="04" <?php if($_brmonth==04) print 'selected="selected"'?>>April</option>
		<option value="05" <?php if($_brmonth==05) print 'selected="selected"'?>>May</option>
		<option value="06" <?php if($_brmonth==06) print 'selected="selected"'?>>June</option>
		<option value="07" <?php if($_brmonth==07) print 'selected="selected"'?>>July</option>
		<option value="08" <?php if($_brmonth==08) print 'selected="selected"'?>>August</option>
		<option value="09" <?php if($_brmonth==09) print 'selected="selected"'?>>September</option>
		<option value="10" <?php if($_brmonth==10) print 'selected="selected"'?>>October</option>
		<option value="11" <?php if($_brmonth==11) print 'selected="selected"'?>>November</option>
		<option value="12" <?php if($_brmonth==12) print 'selected="selected"'?>>December</option>
	</select>
	</div>
	<div class="input-control number inputStyle" id="D">Day:<br />
    <input name="brday" id="brday" size="2" type="number" value="<?php print $_brday?>" min="1" max="31" required//></div>
	<div class="input-control number inputStyle" id="Y">Year:<br />
    <input name="bryear" id="bryear" size="4" type="number" value="<?php print $_bryear?>" min="1909" max="2013" required//>
    </div>
    </div>
	</td>
	</tr>	
	
	<tr>
	<td>Age: </td>
	<td><div class="input-control number inputStyle">
    <input type="number" name="age" id="age" value="<?php print $_age ; ?>" min="10" max="80" required/>
    </div></td>
	</tr>
	
	<tr>
	<td>Course: </td>
	<td><div class="input-control text inputStyle">
    <input type="text" name="course" id="course" value="<?php print $_course ; ?>" required/></div></td>
	</tr>
	<tr>
	<td>College: </td>
	<td><div class="span3 input-control select">
		<select name="college" id="college">
			<option value="College of Agriculture (CA)" <?php if($_college=='College of Agriculture (CA)') print 'selected="selected"'?>>College of Agriculture (CA)</option>
			<option value="College of Arts and Sciences (CAS)" <?php if($_college=='College of Arts and Sciences (CAS)') print 'selected="selected"'?>>College of Arts and Sciences (CAS)</option>
			<option value="College of Engineering and Agro-Industrial Technology (CEAT)" <?php if($_college=='College of Engineering and Agro-Industrial Technology (CEAT)') print 'selected="selected"'?>>College of Engineering and Agro-Industrial Technology (CEAT)</option>
			<option value="College of Economics and Management (CEM)" <?php if($_college=='College of Economics and Management (CEM)') print 'selected="selected"'?>>College of Economics and Management (CEM)</option>
			<option value="College of Developmental Communication (CDC)" <?php if($_college=='College of Developmental Communication (CDC)') print 'selected="selected"'?>>College of Developmental Communication (CDC)</option>
			<option value="College of Forestry and Natural Resources (CFNR)" <?php if($_college=='College of Forestry and Natural Resources (CFNR)') print 'selected="selected"'?>>College of Forestry and Natural Resources (CFNR)</option>
			<option value="College of Human Ecology (CHE)" <?php if($_college=='College of Human Ecology (CHE)') print 'selected="selected"'?>>College of Human Ecology (CHE)</option>
		</select>
        </div>
	</td>
	</td>
	</tr>
	<tr>
	<td>Classification: </td>
	<td><div class="span3 input-control select">
		<select name="classification" id="classification">
			<option value="Freshman" <?php if($_classification=='Freshman') print 'selected="selected"'?>>Freshman</option>
			<option value="Sophomore" <?php if($_classification=='Sophomore') print 'selected="selected"'?>>Sophomore</option>
			<option value="Junior" <?php if($_classification=='Junior') print 'selected="selected"'?>>Junior</option>
			<option value="Senior" <?php if($_classification=='Senior') print 'selected="selected"'?>>Senior</option>
		</select>
        </div>
	</td>
	</tr>
	<tr>
	<td>Expected Time of Graduation: </td>
	<td><div id="grad">
    <div class="span3 input-control select" id="GM"> Month:<br />
		<select name="gradmonth" id="gradmonth">
			<option value="01" <?php if($_gradmonth==01) print 'selected="selected"'?>>January</option>
			<option value="02" <?php if($_gradmonth==02) print 'selected="selected"'?>>February</option>
			<option value="03" <?php if($_gradmonth==03) print 'selected="selected"'?>>March</option>
			<option value="04" <?php if($_gradmonth==04) print 'selected="selected"'?>>April</option>
			<option value="05" <?php if($_gradmonth==05) print 'selected="selected"'?>>May</option>
			<option value="06" <?php if($_gradmonth==06) print 'selected="selected"'?>>June</option>
			<option value="07" <?php if($_gradmonth==07) print 'selected="selected"'?>>July</option>
			<option value="08" <?php if($_gradmonth==08) print 'selected="selected"'?>>August</option>
			<option value="09" <?php if($_gradmonth==09) print 'selected="selected"'?>>September</option>
			<option value="10" <?php if($_gradmonth==10) print 'selected="selected"'?>>October</option>
			<option value="11" <?php if($_gradmonth==11) print 'selected="selected"'?>>November</option>
			<option value="12" <?php if($_gradmonth==12) print 'selected="selected"'?>>December</option>
		</select></div>	
	<div class="input-control number inputStyle" id="GY">
	Year:<br />
    <input type="number" name="gradyear" id="gradyear" value="<?php print $_gradyear; ?>" min="2013" max="3000" pattern="[0-9]{4}" required/></div></td>
	</td>
	</tr>
	
	<tr>
	<td>Civil Status: </td>
	<td><div class="span3 input-control select" >
		<select name="civilstatus" id="civilstatus">
			<option value="Single" <?php if($_civilstat=='Single') print 'selected="selected"'?>>Single</option>
			<option value="Married" <?php if($_civilstat=='Married') print 'selected="selected"'?>>Married</option>
		</select>
        </div>
	</td>
	</tr>
	
	<tr>
	<td>Home Address: </td>
	<td><div class="input-control text inputStyle">
    <input type="text" name="hadd" id="hadd" value="<?php print $_homeadd;?>" required/></div></td>
	</tr>
	
	<tr>
	<td>Cellphone Number: </td>
	<td><div class="input-control number inputStyle"><input type="number" name="contactnum" id="contactnum" value="<?php print $_cpnum?>" pattern="[0-9]{11}" required/></div></td>
	</tr>
	
	<tr>
	<td>Email Address: </td>
	<td><div class="input-control text inputStyle"><input type="email" name="eadd" id="eadd" value="<?php print $_eadd;?>" required/></div></td>
	</tr>
	
	<tr>
	<td>Scholarship: </td>
	<td><div class="input-control text inputStyle"><input type="text" name="scho" id="scho" value="<?php print $_scholarship; ?>"></div></td>
	</tr>

	<tr>
	<td>STFAP Bracket: </td>
	<td><div class="span3 input-control select" > 
		<select name="stfapbracket">
			<option value="A" <?php if($_stfapbracket=='A') print 'selected="selected"'?>>A</option>
			<option value="B" <?php if($_stfapbracket=='B') print 'selected="selected"'?>>B</option>
			<option value="C" <?php if($_stfapbracket=='C') print 'selected="selected"'?>>C</option>
			<option value="D" <?php if($_stfapbracket=='D') print 'selected="selected"'?>>D</option>
			<option value="E1" <?php if($_stfapbracket=='E1') print 'selected="selected"'?>>E1</option>
			<option value="E2" <?php if($_stfapbracket=='E2') print 'selected="selected"'?>>E2</option>
		</select>
        </div>
	</td>
	</tr>
	
	<tr>
	<td>Monthly Allowance: </td>
	<td><div class="input-control number inputStyle">
    <input type="number" id="monthlyall" name="monthlyall" value="<?php print $_moallow;?>"required/></div></td>
	</tr>
	
	<tr>
	<td>Religion: </td>
	<td><div class="input-control text inputStyle">
    <input type="text" id="religion" name="religion" value="<?php print $_religion;?>" required/></div></td>
	</tr>
	<tr>
	
	<tr>
	<td>Affiliation(s): </td>
	<td><div class="input-control text inputStyle">
    <input type="text" id="affiliation" name="affiliation" value="<?php print $_affiliation;?>"></div></td>
	</tr>
	
	<tr>
	<td>Number of Brother: </td>
	<td><div class="input-control text inputStyle">
    <input type="number" id="numbro" name="numbro" value="<?php print $_numbro;?>" required/></div></td>
	</tr>
	
	<tr>
	<td>Number of Sister: </td>
	<td><div class="input-control text inputStyle">
    <input type="number" id="numsis" name="numsis" value="<?php print $_numsis;?>" required/></div></td>
	</tr>
	
	<tr>
	<td>Birth Order: </td>
	<td><div class="input-control text inputStyle">
    <input type="number" id="birthorder" name="birthorder" value="<?php print $_birthorder;?>" required/></div></td>
	</tr>
	
	<tr>
	<td>Ailment(s): </td>
	<td><div class="input-control text inputStyle">
    <input type="text" id="ailment" name="ailment" value="<?php print $_ailment;?>"></div></td>
	</tr>
	
	<tr>
	<td>Medication(s): </td>
	<td><div class="input-control text inputStyle">
    <input type="text" id="medication" name="medication" value="<?php print $_medication;?>"></div></td>
	</tr>
	
	<tr>
	<td>In Relationship?: </td>
	<td><div class="span3 input-control select" > 
		<select name="inrelationship">
			<option value="No" <?php if($_inrel=='No') print 'selected="selected"'?>>No</option>
			<option value="Yes" <?php if($_inrel=='Yes') print 'selected="selected"'?>>Yes</option>
		</select>
        </div>
	</td>
	</tr>
	
	<tr>
	<td>Room: </td>
	<td><div class="span3 input-control select" > 
	<select name="roomnum" id="roomnum">
	<?php
	foreach ($rooms as $listed_items) {
		echo "<option value=".$listed_items['ROOMNUMBER'];
		if($_roomnum==$listed_items['ROOMNUMBER'])
		{
			print ' selected="selected"';
		}
		echo ">".$listed_items['ROOMNUMBER']."</option>";
	}
	?>
	</select></div>
	</td>
	</tr>
	
	</table>
    <input type="submit" class="btn-three" value="Edit Dormer" onclick="" style="margin:8% 32%;"/>
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