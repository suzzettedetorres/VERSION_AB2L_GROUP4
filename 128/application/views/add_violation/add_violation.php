<?php
	
	$_stnum = "2010-49621";
	$_violationid ="DeTorres_Suicide";
	$_violation ="Suicide";
	$_vday = "17";
	$_vyear = "2013";
	$_remarks ="Poison";
	
?>
<br/>
	<form id="ViolationForm" name="Violation" method="post" action="index.php/insert/addviolation" onsubmit="">
	<table>
	<tbody>
	
	<tr>
	<td>Student Number: </td>
	<td><input type="text" name="stnum" id="stnum" pattern="[0-9]{4}-[0-9]{5}" value="<?php print $_stnum ; ?>"  required/></td>
	</tr>
	
	<tr>
	<td>Violation ID: </td>
	<td><input type="text" name="violationid" id="violationid" value="<?php print $_violationid; ?>" required/></td>
	</tr>
	
	<tr>
	<td>Violation:</td><td><input type="text" id="violation" name="violation" value="<?php print $_violation; ?>" required/></td>
	</tr>
	
	<tr>
	<td>Date of Violation:</td>
	<td>
	Month:
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