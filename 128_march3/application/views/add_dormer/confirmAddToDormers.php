<!DOCTYPE html>
<html>
<head>
<title>Add Dormer</title>
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
            <h1>Add Dormer</h1>
        </header>
        <section>
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
			
			$_affiliation = 'Young Software Engineers\' Society';
			$_ailment = 'allergy';
			$_medication = 'anti-histamine';
		}
		
		foreach($gdata as $d){
			$_gfname =$d['FIRSTNAME'];
			$_gmname =$d['MIDDLENAME'];
			$_glname =$d['LASTNAME'];
			$_ghomeadd =$d['ADDRESS'];
			$_gcpnum =$d['CONTACTNUMBER'];
			$_geadd =$d['EMAILADDRESS'];
			$_gcivilstat=$d['CIVILSTATUS'];
			$_gsoincome =$d['SOURCEOFINCOME'];
		}
	?>
	<form id="dormerForm" name="dormerForm" method="post" action="addApplicantasDormer" onsubmit="">
	<table>
	<tbody>
	<tr>
	<td>Student Number: </td>
	<td><input type="text" name="stnum" id="stnum" pattern="[0-9]{4}-[0-9]{5}" value="<?php print $_stnum ; ?>"  required/></td>
	</tr>
	<tr>
	<td>First Name: </td>
	<td><input type="text" name="fname" id="fname" value="<?php print $_fname ; ?>" required/></td>
	</tr>
	<tr>
	<td>Middle Name: </td>
	<td><input type="text" name="mname" id="mname" value="<?php print $_mname ; ?>" required/></td>
	</tr>
	<tr>
	<td>Last Name: </td>
	<td><input type="text" name="lname" id="lname" value="<?php print $_lname ; ?>" required/></td>
	</tr>
	<tr>
	<td>Birthday:</td>
	<td>
	Month:
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
	Day:<input name="brday" id="brday" size="2" type=number value="<?php print $_brday?>" min="1" max="31" required//>
	Year:<input name="bryear" id="bryear" size="4" type=number value="<?php print $_bryear?>" min="1909" max="2013" required//>
	</td>
	</tr>	
	
	<tr>
	<td>Age: </td>
	<td><input type=number name="age" id="age" value="<?php print $_age ; ?>" min="10" max="80" required/></td>
	</tr>
	<tr>
	<td>Course: </td>
	<td><input type="text" name="course" id="course" value="<?php print $_course ; ?>" required/></td>
	</tr>
	<tr>
	<td>College: </td>
	<td>
		<select name="college" id="college">
			<option value="College of Agriculture (CA)" <?php if($_college=='College of Agriculture (CA)') print 'selected="selected"'?>>College of Agriculture (CA)</option>
			<option value="College of Arts and Sciences (CAS)" <?php if($_college=='College of Arts and Sciences (CAS)') print 'selected="selected"'?>>College of Arts and Sciences (CAS)</option>
			<option value="College of Engineering and Agro-Industrial Technology (CEAT)" <?php if($_college=='College of Engineering and Agro-Industrial Technology (CEAT)') print 'selected="selected"'?>>College of Engineering and Agro-Industrial Technology (CEAT)</option>
			<option value="College of Economics and Management (CEM)" <?php if($_college=='College of Economics and Management (CEM)') print 'selected="selected"'?>>College of Economics and Management (CEM)</option>
			<option value="College of Developmental Communication (CDC)" <?php if($_college=='College of Developmental Communication (CDC)') print 'selected="selected"'?>>College of Developmental Communication (CDC)</option>
			<option value="College of Forestry and Natural Resources (CFNR)" <?php if($_college=='College of Forestry and Natural Resources (CFNR)') print 'selected="selected"'?>>College of Forestry and Natural Resources (CFNR)</option>
			<option value="College of Human Ecology (CHE)" <?php if($_college=='College of Human Ecology (CHE)') print 'selected="selected"'?>>College of Human Ecology (CHE)</option>
		</select>
	</td>
	</td>
	</tr>
	<tr>
	<td>Classification: </td>
	<td>
		<select name="classification" id="classification">
			<option value="Freshman" <?php if($_classification=='Freshman') print 'selected="selected"'?>>Freshman</option>
			<option value="Sophomore" <?php if($_classification=='Sophomore') print 'selected="selected"'?>>Sophomore</option>
			<option value="Junior" <?php if($_classification=='Junior') print 'selected="selected"'?>>Junior</option>
			<option value="Senior" <?php if($_classification=='Senior') print 'selected="selected"'?>>Senior</option>
		</select>
	</td>
	</tr>
	<tr>
	<td>Expected Time of Graduation: </td>
	<td>Month:
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
		</select>
	Year: <input type="number" name="gradyear" id="gradyear" value="<?php print $_gradyear; ?>" min="2013" max="3000" pattern="[0-9]{4}" required/></td>
	</td>
	</tr>
	
	<tr>
	<td>Civil Status: </td>
	<td>
		<select name="civilstatus" id="civilstatus">
			<option value="Single" <?php if($_civilstat=='Single') print 'selected="selected"'?>>Single</option>
			<option value="Married" <?php if($_civilstat=='Married') print 'selected="selected"'?>>Married</option>
		</select>
	</td>
	</tr>
	
	<tr>
	<td>Home Address: </td>
	<td><input type="text" name="hadd" id="hadd" value="<?php print $_homeadd;?>" required/></td>
	</tr>
	
	<tr>
	<td>Cellphone Number: </td>
	<td><input type="number" name="contactnum" id="contactnum" value="<?php print $_cpnum?>" pattern="[0-9]{11}" required/></td>
	</tr>
	
	<tr>
	<td>Email Address: </td>
	<td><input type="email" name="eadd" id="eadd" value="<?php print $_eadd;?>" required/></td>
	</tr>
	
	<tr>
	<td>Scholarship: </td>
	<td><input type="text" name="scho" id="scho" value="<?php print $_scholarship; ?>"></td>
	</tr>

	<tr>
	<td>STFAP Bracket: </td>
	<td>
		<select name="stfapbracket">
			<option value="A" <?php if($_stfapbracket=='A') print 'selected="selected"'?>>A</option>
			<option value="B" <?php if($_stfapbracket=='B') print 'selected="selected"'?>>B</option>
			<option value="C" <?php if($_stfapbracket=='C') print 'selected="selected"'?>>C</option>
			<option value="D" <?php if($_stfapbracket=='D') print 'selected="selected"'?>>D</option>
			<option value="E1" <?php if($_stfapbracket=='E1') print 'selected="selected"'?>>E1</option>
			<option value="E2" <?php if($_stfapbracket=='E2') print 'selected="selected"'?>>E2</option>
		</select>
	</td>
	</tr>
	
	<tr>
	<td>Monthly Allowance: </td>
	<td><input type="number" id="monthlyall" name="monthlyall" value="<?php print $_moallow;?>"required/></td>
	</tr>
	
	<tr>
	<td>Religion: </td>
	<td><input type="text" id="religion" name="religion" value="<?php print $_religion;?>" required/></td>
	</tr>
	<tr>
	
	<tr>
	<td>Affiliation(s): </td>
	<td><input type="text" id="affiliation" name="affiliation" value="<?php print $_affiliation;?>"></td>
	</tr>
	
	<tr>
	<td>Number of Brother: </td>
	<td><input type="number" id="numbro" name="numbro" value="<?php print $_numbro;?>" required/></td>
	</tr>
	
	<tr>
	<td>Number of Sister: </td>
	<td><input type="number" id="numsis" name="numsis" value="<?php print $_numsis;?>" required/></td>
	</tr>
	
	<tr>
	<td>Birth Order: </td>
	<td><input type="number" id="birthorder" name="birthorder" value="<?php print $_birthorder;?>" required/></td>
	</tr>
	
	<tr>
	<td>Ailment(s): </td>
	<td><input type="text" id="ailment" name="ailment" value="<?php print $_ailment;?>"></td>
	</tr>
	
	<tr>
	<td>Medication(s): </td>
	<td><input type="text" id="medication" name="medication" value="<?php print $_medication;?>"></td>
	</tr>
	
	<tr>
	<td>In Relationship?: </td>
	<td>
		<select name="inrelationship">
			<option value="No" <?php if($_inrel=='No') print 'selected="selected"'?>>No</option>
			<option value="Yes" <?php if($_inrel=='Yes') print 'selected="selected"'?>>Yes</option>
		</select>
	</td>
	</tr>
	
	<tr>
	<td>Room: </td>
	<td>
	<select name="roomnum" id="roomnum">
	<?php
	foreach ($rooms as $listed_items) {
		echo "<option value=".$listed_items['ROOMNUMBER'].">".$listed_items['ROOMNUMBER']."</option>";
	}
	?>
	</select>
	</td>
	</tr>
	
	<tr>
	<td>First Name: </td>
	<td><input type="text" name="gfname" id="gfname" value="<?php print $_gfname ; ?>" required/></td>
	</tr>
	<tr>
	<td>Middle Name: </td>
	<td><input type="text" name="gmname" id="gmname" value="<?php print $_gmname ; ?>" required/></td>
	</tr>
	<tr>
	<td>Last Name: </td>
	<td><input type="text" name="glname" id="glname" value="<?php print $_glname ; ?>" required/></td>
	</tr>
	<tr>
	<td>Home Address: </td>
	<td><input type="text" name="ghadd" id="ghadd" value="<?php print $_ghomeadd;?>" required/></td>
	</tr>
	<tr>
	<td>Cellphone Number: </td>
	<td><input type="number" name="gcontactnum" id="gcontactnum" value="<?php print $_gcpnum?>" pattern="[0-9]{11}" required/></td>
	</tr>
	<tr>
	<td>Email Address: </td>
	<td><input type="email" name="geadd" id="geadd" value="<?php print $_geadd;?>" required/></td>
	</tr>
	<tr>
	<td>Civil Status: </td>
	<td>
		<select name="gcivilstatus" id="gcivilstatus">
			<option value="Single" <?php if($_gcivilstat=='Single') print 'selected="selected"'?>>Single</option>
			<option value="Married" <?php if($_gcivilstat=='Married') print 'selected="selected"'?>>Married</option>
			<option value="Widowed" <?php if($_gcivilstat=='Widowed') print 'selected="selected"'?>>Widowed</option>
		</select>
	</td>
	</tr>
	<tr>
	<td>Source of Income: </td>
	<td><input type="text" name="soincome" id="soincome" value="<?php print $_gsoincome ; ?>" required/></td>
	</tr>
	
	<td colspan='2'>
	<input type="submit" value="Add Applicant as Dormer" onclick="" />
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