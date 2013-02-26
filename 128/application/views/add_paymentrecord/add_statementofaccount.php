<!DOCTYPE HTML>
<head>
	<title>Add Statement of Account</title>
</head>

<body>
<?php
	
	$_prid ="DeTorres_201049621";
	$_soaid ="DeTorres_201049621";
	
?>
<br/>
	<form id="SoAForm" name="SoAForm" method="post" action="index.php/insert/addstatementofaccount" onsubmit="">
	<table>
	<tbody>
	
	<tr>
	<td>Payment Record ID: </td>
	<td><input type="text" name="prid" id="prid" value="<?php print $_prid; ?>" required/></td>
	</tr>
	
	<tr>
	<td>Statement of Account ID: </td>
	<td><input type="text" name="soaid" id="soaid" value="<?php print $_soaid; ?>" required/></td>
	</tr>
	
	<tr>
	<td>Month:
		<select name="month" id="month">
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
	</td>
	<tr>
	
	<tr>
	<td colspan='2'>
	<input type="submit" value="Add Statement of Account" onclick="" />
	</td>
	</tr>
	
	</table>
	</form>
</body>