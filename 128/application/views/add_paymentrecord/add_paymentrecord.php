<!DOCTYPE HTML>
<head>
	<title>Add Payment Record</title>
</head>

<body>
<?php
	
	$_prid ="DeTorres_201049621";
	
?>
<br/>
	<form id="PRForm" name="PRForm" method="post" action="index.php/insert/addpaymentrecord" onsubmit="">
	<table>
	<tbody>
	
	<tr>
	<td>Payment Record ID: </td>
	<td><input type="text" name="prid" id="prid" value="<?php print $_prid; ?>" required/></td>
	</tr>
	
	<tr>
	<td colspan='2'>
	<input type="submit" value="Add Payment Record" onclick="" />
	</td>
	</tr>
	
	</table>
	</form>
</body>