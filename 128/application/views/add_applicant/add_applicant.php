<!DOCTYPE HTML>
<head>
	<title>Reserve Applicant</title>
</head>

<body>
	<?php
		$_stnum = "2010-49621";
		$_fname = "Suzzette";
		$_mname = "Anacion";
		$_lname = "De Torres";
		$_brmonth = "November";
		$_brday="05";
		$_bryear="2000";
		$_age= "19";
		$_course="BS Computer Science";
		$_gradyear="2014";
		$_homeadd="Batangas";
		$_cpnum="09262109773";
		$_eadd="suzzettedetorres@gmail.com";
		$_scholarship="SM";
		$_moallow="10000";
		$_religion="catholic";
		$_affiliation="YSES";
		$_numbro="2";
		$_numsis="1";
		$_birthorder="3";
		$_ailment="allergy";
		$_medication="anti-histamine";
		$_inrel="no";
		$bday="05-11-1993";
		
		$_guardianid="DeTorres_201049621";
		$_gfname ="Elvira";
		$_gmname ="Anacion";
		$_glname ="De Torres";
		$_ghadd ="Batangas";
		$_gcpnum ="09153103868";
		$_geadd ="elviradetorres@gmail.com";
		$_gsoincome ="housewife";
	?>
	<form id="appliForm" name="appliForm" method="post" action="addapplicant" onsubmit="">
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
	Day:<input name="brday" id="brday" size="2" type=number value="<?php print $_brday?>" min="1" max="31" required />
	Year:<input name="bryear" id="bryear" size="4" type=number value="<?php print $_bryear?>" min="1909" max="2013" required />
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
			<option value="College of Agriculture (CA)">College of Agriculture (CA)</option>
			<option value="College of Arts and Sciences (CAS)">College of Arts and Sciences (CAS)</option>
			<option value="College of Engineering and Agro-Industrial Technology (CEAT)">College of Engineering and Agro-Industrial Technology (CEAT)</option>
			<option value="College of Economics and Management (CEM)">College of Economics and Management (CEM)</option>
			<option value="College of Developmental Communication (CDC)">College of Developmental Communication (CDC)</option>
			<option value="College of Forestry and Natural Resources (CFNR)">College of Forestry and Natural Resources (CFNR)</option>
			<option value="College of Human Ecology (CHE)">College of Human Ecology (CHE)</option>
		</select>
	</td>
	</td>
	</tr>
	<tr>
	<td>Classification: </td>
	<td>
		<select name="classification" id="classification">
			<option value="Freshman">Freshman</option>
			<option value="Sophomore">Sophomore</option>
			<option value="Junior">Junior</option>
			<option value="Senior">Senior</option>
		</select>
	</td>
	</tr>
	<tr>
	<td>Expected Time of Graduation: </td>
	<td>Month:
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
	Year: <input type="number" name="gradyear" id="gradyear" value="<?php print $_gradyear; ?>" min="2013" max="3000" pattern="[0-9]{4}" required/></td>
	</td>
	</tr>
	
	<tr>
	<td>Civil Status: </td>
	<td>
		<select name="civilstatus" id="civilstatus">
			<option value="Single">Single</option>
			<option value="Married">Married</option>
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
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
			<option value="E1">E1</option>
			<option value="E2">E2</option>
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
			<option value="No">No</option>
			<option value="Yes">Yes</option>
		</select>
	</td>
	</tr>
	
	<tr>
	<td>Room: </td>
	<td>
		<select name="room">
			<option value="2207">2207</option>
			<option value="2208">2208</option>
		</select>
	</td>
	</tr>
	
	<tr>
	<td>First Name: </td>
	<td><input type="text" name="gfname" id="gfname" value="<?php print $_fname ; ?>" required/></td>
	</tr>
	<tr>
	<td>Middle Name: </td>
	<td><input type="text" name="gmname" id="gmname" value="<?php print $_mname ; ?>" required/></td>
	</tr>
	<tr>
	<td>Last Name: </td>
	<td><input type="text" name="glname" id="glname" value="<?php print $_lname ; ?>" required/></td>
	</tr>
	<tr>
	<td>Home Address: </td>
	<td><input type="text" name="ghadd" id="ghadd" value="<?php print $_homeadd;?>" required/></td>
	</tr>
	<tr>
	<td>Cellphone Number: </td>
	<td><input type="number" name="gcontactnum" id="gcontactnum" value="<?php print $_cpnum?>" pattern="[0-9]{11}" required/></td>
	</tr>
	<tr>
	<td>Email Address: </td>
	<td><input type="email" name="geadd" id="geadd" value="<?php print $_eadd;?>" required/></td>
	</tr>
	<tr>
	<td>Civil Status: </td>
	<td>
		<select name="gcivilstatus" id="gcivilstatus">
			<option value="Single">Single</option>
			<option value="Married">Married</option>
			<option value="Widowed">Widowed</option>
		</select>
	</td>
	</tr>
	<tr>
	<td>Source of Income: </td>
	<td><input type="text" name="soincome" id="soincome" value="<?php print $_gsoincome ; ?>" required/></td>
	</tr>
	
	<td colspan='2'>
	<input type="submit" value="Reserve Applicant" onclick="" />
	</td>
	</tr>
	</table>
	</form>
</body>