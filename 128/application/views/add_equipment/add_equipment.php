<!DOCTYPE HTML>
<head>
	<title>Add Equipment</title>
</head>

<body>
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
</body>