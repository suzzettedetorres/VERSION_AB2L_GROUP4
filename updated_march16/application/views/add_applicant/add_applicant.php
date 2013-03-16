<?php
if($this->session->userdata('logged_in') != TRUE){
	$this->load->view("Login.php");
}else{

?>
<!DOCTYPE html>
<html>
<head>
<title>Add Applicant</title>
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
                <a href="goToLogout"><img src="../../img/invisible-LINK.png" /></a>
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
            <h1>Applicant Reservation</h1>
        </header>
        <section>
       
	<div class="desc bg-color-green">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere convallis ante eget condimentum. Aliquam porttitor gravida leo eget egestas. Nulla facilisi. Aenean placerat diam lectus. Phasellus id rutrum massa. Fusce fringilla, neque in ullamcorper placerat, sapien dolor fermentum nisi, ut gravida dui lorem eu nisi. Vivamus tincidunt cursus molestie. Mauris enim lacus, vestibulum eget dapibus sit amet, tempus eu augue.
	</div>


<div id="infosheet">
<table>
<tr>
</tr>
	<?php
		$_stnum = "";
		$_fname = "";
		$_mname = "";
		$_lname = "";
		$_brmonth = "";
		$_brday="";
		$_bryear="";
		$_age= "";
		$_course="";
		$_gradyear="";
		$_homeadd="";
		$_cpnum="";
		$_eadd="";
		$_scholarship="";
		$_moallow="";
		$_religion="";
		$_affiliation="";
		$_numbro="";
		$_numsis="";
		$_birthorder="";
		$_ailment="";
		$_medication="";
		$_inrel="";
		$bday="";
		
		$_gfname ="";
		$_gmname ="";
		$_glname ="";
		$_ghadd ="";
		$_gcpnum ="";
		$_geadd ="";
		$_gsoincome ="";
	?>
	<form id="appliForm" name="appliForm" method="post" action="addapplicant" onsubmit="">
    <tr>
    <td><label>Student Number:</label></td>
	<td><div class="input-control text inputStyle">
			<input class="inputINFO" type="text" name="stnum" id="stnum" pattern="[0-9]{4}-[0-9]{5}" value="<?php print $_stnum ; ?>"  required/>
		</div></td>
	</tr>				
	<tr>
    <td><label>First Name:</label></td>
	<td><div class="input-control text inputStyle">
		<input class="inputINFO"  type="text" name="fname" id="fname" value="<?php print $_fname ; ?>" required/>
	</div></td>
    </tr>
	<tr>
   <td><label>Middle Name:</label></td>
	<td><div class="input-control text inputStyle">
		<input class="inputINFO" type="text" name="mname" id="mname" value="<?php print $_mname ; ?>" required/>
	</div></td>
    <tr>
   <td> Last Name:</td>
	<td><div class="input-control text inputStyle">
		<input class="inputINFO"  type="text" name="lname" id="lname" value="<?php print $_lname ; ?>" required/>
	</div></td>
    <tr>
   <td> Birthday:</td>
    <td><div id="bday">
	<div class="span3 input-control select" id="M">
    Month:<br />
	<select name="brmonth" id="brmonth">
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
	<div class="input-control text inputStyle" id="D">Day:<br />
		<input name="brday" id="brday" size="2" type=number value="<?php print $_brday?>" min="1" max="31" required />
	</div>
	<div class="input-control text inputStyle" id="Y">Year:<br />
		<input name="bryear" id="bryear" size="4" type=number value="<?php print $_bryear?>" min="1909" max="2013" required />
	</div>
    </div></td>
    </tr>
    <tr>
    <td>Age:</td>
	<td style=" text-align:left;"><div class="input-control text inputStyle"> 
	<input type="number" name="age" id="age" value="<?php print $_age ; ?>" min="10" max="80"  required/>
	</div></td>
    </tr>
    <tr>
 <td>Course:</td>
 <td><div class="input-control text inputStyle">
		<input type="text" name="course" id="course" value="<?php print $_course ; ?>" required/>
	</div></td>
    </tr>
    <tr>
    <td>College:</td>
    <td><div class="span3 input-control select">
	<select name="college" id="college">
			<option value="College of Agriculture (CA)">College of Agriculture (CA)</option>
			<option value="College of Arts and Sciences (CAS)">College of Arts and Sciences (CAS)</option>
			<option value="College of Engineering and Agro-Industrial Technology (CEAT)">College of Engineering and Agro-Industrial Technology (CEAT)</option>
			<option value="College of Economics and Management (CEM)">College of Economics and Management (CEM)</option>
			<option value="College of Developmental Communication (CDC)">College of Developmental Communication (CDC)</option>
			<option value="College of Forestry and Natural Resources (CFNR)">College of Forestry and Natural Resources (CFNR)</option>
			<option value="College of Human Ecology (CHE)">College of Human Ecology (CHE)</option>
		</select>
</div></td>
</tr>
<tr>
<td>Classification:</td>
	<td><div class="span3 input-control select">
	<select name="classification" id="classification">
			<option value="Sophomore">Sophomore</option>
			<option value="Junior">Junior</option>
			<option value="Senior">Senior</option>
		</select>
</div></td>
</tr>
<tr>
<td> Expected Time of Graduation:</td>
	<td><div id="grad">
    <div class="span3 input-control select" id="GM"> Month:<br />
	<select name="gradmonth" id="gradmonth">
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
				
		
	<div class="span3 input-control select" id="GY">
	Year:<br /><input type="number" name="gradyear" id="gradyear" value="<?php print $_gradyear; ?>" min="2013" max="3000" pattern="[0-9]{4}" required/>
</div>
</div></td>
</tr>
	 <tr>
      <td>Civil Status:</td>
     <td><div class="span3 input-control select" >
		<select name="civilstatus" id="civilstatus">
			<option value="Single">Single</option>
			<option value="Married">Married</option>
		</select>
        </div></td>
        <tr>
      <td>Home Address:</td>
      <td><div class="input-control text inputStyle">
		<input type="text" name="hadd" id="hadd" value="<?php print $_homeadd;?>" required/>
	</div></td>
    <tr>
   <td> Cellphone Number:</td> 
   <td style=" text-align:left;"> <div class="input-control text inputStyle">
		<input type="number" name="contactnum" id="contactnum" value="<?php print $_cpnum?>" pattern="[0-9]{11}" required/>
	</div></td>
    </tr>
    <tr>
    <td>   Email Address:</td>
    <td><div class="input-control text inputStyle">
		<input type="email" name="eadd" id="eadd" value="<?php print $_eadd;?>" required/>
	</div></td>
    </tr>
    <tr>
    <td>Scholarship:</td>
    <td><div class="input-control text inputStyle">
		<input type="text" name="scho" id="scho" value="<?php print $_scholarship; ?>">
	</div></td>
    </tr>
    <tr>
    <td>STFAP Bracket:</td>
    <td><div class="span3 input-control select" > 
	<select name="stfapbracket">
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
			<option value="E1">E1</option>
			<option value="E2">E2</option>
		</select>
</div></td>
</tr>
	<tr>	
	<td>Monthly Allowance:</td>
    <td style=" text-align:left;"><div class="input-control text inputStyle">
		<input type="number" id="monthlyall" name="monthlyall" value="<?php print $_moallow;?>"required/>
	</div></td>
    </tr>
    <tr>
    <td>Religion:</td>
    <td><div class="input-control text inputStyle">
		<input type="text" id="religion" name="religion" value="<?php print $_religion;?>" required/>
	</div></td>
    </tr>
    <tr>
    <td>Affiliation(s):</td>
    <td><div class="input-control text inputStyle">
		<input type="text" id="affiliation" name="affiliation" value="<?php print $_affiliation;?>">
	</div></td>
    </tr>
    <tr>
    <td>Number of Brother: </td>
    <td style=" text-align:left;"><div class="input-control text inputStyle">
		<input type="number" id="numbro" name="numbro" value="<?php print $_numbro;?>" required/>
	</div></td>
    </tr>
    <tr>
    <td> Number of Sister:</td>
    <td style=" text-align:left;"><div class="input-control text inputStyle">
		<input type="number" id="numsis" name="numsis" value="<?php print $_numsis;?>" required/>
	</div></td>
    </tr>
    <tr>
    <td>Birth Order:</td>
    <td style=" text-align:left;"><div class="input-control text inputStyle">
		<input type="number" id="birthorder" name="birthorder" value="<?php print $_birthorder;?>" required/>
	</div></td>
    </tr>
    <tr>
    <td>Ailment(s):</td>
   <td> <div class="input-control text inputStyle">
		<input type="text" id="ailment" name="ailment" value="<?php print $_ailment;?>">
	</div></td>
    </tr>
    <tr>
    <td>Medication(s):</td>
    <td><div class="input-control text inputStyle">
		<input type="text" id="medication" name="medication" value="<?php print $_medication;?>">
	</div></td>
    </tr>
    <tr>
    <td>In Relationship?:</td>
    <td> <div class="span3 input-control select">
	<select name="inrelationship">
			<option value="No">No</option>
			<option value="Yes">Yes</option>
		</select>
</div></td>
</tr>

    <tr>
    <td>First Name:</td>
    <td><div class="input-control text inputStyle">
		<input type="text" name="gfname" id="gfname" value="<?php print $_fname ; ?>" required/>
	</div></td>
    </tr>
    <tr>
    <td>Middle Name:</td>
    <td><div class="input-control text inputStyle">
		<input type="text" name="gmname" id="gmname" value="<?php print $_mname ; ?>" required/>
	</div></td>
    </tr>
    <tr>
    <td>Last Name:</td>
    <td><div class="input-control text inputStyle">
		<input type="text" name="glname" id="glname" value="<?php print $_lname ; ?>" required/>
	</div></td>
    </tr>
    <tr>
    <td>Home Address:</td>
    <td><div class="input-control text inputStyle">
		<input type="text" name="ghadd" id="ghadd" value="<?php print $_homeadd;?>" required/>
	</div></td>
    </tr>
    <tr>
   <td> Cellphone Number:</td>
    <td style="text-align:left"><div class="input-control text inputStyle">
		<input type="number" name="gcontactnum" id="gcontactnum" value="<?php print $_cpnum?>" pattern="[0-9]{11}" required/>
	</div></td>
    </tr>
    <tr>
	<td>Email Address:</td>
	<td><div class="input-control text inputStyle">
		<input type="email" name="geadd" id="geadd" value="<?php print $_eadd;?>" required/>
	</div></td>
    </tr>
    <tr>
    <td>Civil Status:</td>
    <td><div class="span3 input-control select" > 
		<select name="gcivilstatus" id="gcivilstatus">
			<option value="Single">Single</option>
			<option value="Married">Married</option>
			<option value="Widowed">Widowed</option>
		</select>
	</div></td>
    </tr>
    <tr>
	<td>Source of Income: </td>
	<td><div class="input-control text inputStyle">
		<input type="text" name="soincome" id="soincome" value="<?php print $_gsoincome ; ?>" required/>
	</div></td>
    </tr>
    <tr>
    <td></td>
	<td style="text-align:left"><input type="submit" class="btn-three" value="Reserve Applicant" onclick="" /></td>
	</form>
    </tr>
	</table>
    </div>
        </section>
        <footer>
            (C)2013 <a class="link link-blue" href="#/">cs128 - Group 4</a>
        </footer>
    </div>

</body>

</html>

<?php } ?> 

<!--References:

Retrived at 2 February, 2013 from
http://simoborto.altervista.org
https://uho.uplb.edu.ph/index.php
http://danielrichardeviant.deviantart.com/
http://dev7studios.com/
-->