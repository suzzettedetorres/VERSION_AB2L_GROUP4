<?php
class Main_model extends CI_Model{
	public function add_dormer($stnum, $fname, $mname, $lname, $bday, $age, $course, $college, $classification, $etimeofgrad, $civilstatus, $hadd, $contactnum, $eadd, $scho, $stfapbracket, $monthlyall, $religion, $numbro, $numsis, $birthorder, $inrelationship, $statusofresidency, $roomnum, $dateaccepted){
		$this->db->query("Insert into CMSC128.DORMER(STUDENTNUMBER, FIRSTNAME, MIDDLENAME, LASTNAME, BIRTHDAY, AGE, COURSE, COLLEGE, CLASSIFICATION, ETIMEOFGRAD, CIVILSTATUS, HOMEADDRESS, CONTACTNUMBER, EMAILADDRESS, SCHOLARSHIP, STFAPBRACKET, MONTHLYALLOWANCE, RELIGION, NUMOFBROTHER, NUMOFSISTER, BIRTHORDER, INRELATIONSHIP, STATUSOFRESIDENCY, ROOMNUMBER, DATEACCEPTED) values ('$stnum', '$fname', '$mname', '$lname', '$bday', '$age', '$course', '$college', '$classification', '$etimeofgrad', '$civilstatus', '$hadd', '$contactnum', '$eadd', '$scho', '$stfapbracket', '$monthlyall', '$religion', '$numbro', '$numsis', '$birthorder', '$inrelationship', '$statusofresidency', '$roomnum', '$dateaccepted')");
	}
	
	public function add_applicant($stnum, $fname, $mname, $lname, $bday, $age, $course, $college, $classification, $etimeofgrad, $civilstatus, $hadd, $contactnum, $eadd, $scho, $stfapbracket, $monthlyall, $religion, $numbro, $numsis, $birthorder, $inrelationship, $datereserved){
		$this->db->query("insert into CMSC128.APPLICANT(STUDENTNUMBER, FIRSTNAME, MIDDLENAME, LASTNAME, BIRTHDAY, AGE, COURSE, COLLEGE, CLASSIFICATION, ETIMEOFGRAD, CIVILSTATUS, HOMEADDRESS, CONTACTNUMBER, EMAILADDRESS, SCHOLARSHIP, STFAPBRACKET, MONTHLYALLOWANCE, RELIGION, NUMOFBROTHER, NUMOFSISTER, BIRTHORDER, INRELATIONSHIP, DATERESERVED) values ('$stnum', '$fname', '$mname', '$lname', '$bday', '$age', '$course', '$college', '$classification', '$etimeofgrad', '$civilstatus', '$hadd', '$contactnum', '$eadd', '$scho', '$stfapbracket', '$monthlyall', '$religion', '$numbro', '$numsis', '$birthorder', '$inrelationship', '$datereserved')");
	}
	
	/*public function add_acceptedApplicant($stnum, $fname, $mname, $lname, $bday, $age, $course, $college, $classification, $etimeofgrad, $civilstatus, $hadd, $contactnum, $eadd, $scho, $stfapbracket, $monthlyall, $religion, $numbro, $numsis, $birthorder, $inrelationship, $datereserved, $dateaccepted){
		$this->db->query("Insert into CMSC128.ACCEPTEDAPPLICANT(STUDENTNUMBER, FIRSTNAME, MIDDLENAME, LASTNAME, BIRTHDAY, AGE, COURSE, COLLEGE, CLASSIFICATION, ETIMEOFGRAD, CIVILSTATUS, HOMEADDRESS, CONTACTNUMBER, EMAILADDRESS, SCHOLARSHIP, STFAPBRACKET, MONTHLYALLOWANCE, RELIGION, NUMOFBROTHER, NUMOFSISTER, BIRTHORDER, INRELATIONSHIP, DATERESERVED, DATEACCEPTED) values ('$stnum', '$fname', '$mname', '$lname', '$bday', '$age', '$course', '$college', '$classification', '$etimeofgrad', '$civilstatus', '$hadd', '$contactnum', '$eadd', '$scho', '$stfapbracket', '$monthlyall', '$religion', '$numbro', '$numsis', '$birthorder', '$inrelationship', '$datereserved', '$dateaccepted')");
	}*/
	
	public function add_dormer_guardian($stnum, $guardianid){
		$this->db->query("Insert into CMSC128.DORMER_GUARDIAN(STUDENTNUMBER,GUARDIANID) values ('$stnum', '$guardianid')");
	}
	
	public function add_applicant_guardian($stnum, $guardianid){
		$this->db->query("Insert into CMSC128.APPLICANT_GUARDIAN(STUDENTNUMBER,GUARDIANID) values ('$stnum', '$guardianid')");
	}
	
	/*public function add_aapplicant_guardian($stnum, $guardianid){
		$this->db->query("Insert into CMSC128.AAPPLICANT_GUARDIAN(STUDENTNUMBER,GUARDIANID) values ('$stnum', '$guardianid')");
	}*/
	
	public function add_dormer_affiliation($stnum, $affiliation, $affiliationid){
		$this->db->query("Insert into CMSC128.DORMER_AFFILIATION(STUDENTNUMBER,AFFILIATION,AFFILIATION_ID) values ('$stnum','$affiliation', '$affiliationid')");
	}
	
	public function add_applicant_affiliation($stnum, $affiliation){
		$this->db->query("Insert into CMSC128.APPLICANT_AFFILIATION(STUDENTNUMBER,AFFILIATION,AFFILIATION_ID) values ('$stnum','$affiliation', '$affiliationid')");
	}
	
	/*public function add_aapplicant_affiliation($stnum, $affiliation){
		$this->db->query("Insert into CMSC128.AAPPLICANT_AFFILIATION(STUDENTNUMBER,AFFILIATIONID) values ('$stnum', '$affiliation')");
	}*/
	
	public function add_dormer_ailment($stnum, $ailment, $ailmentid){
		$this->db->query("Insert into CMSC128.DORMER_AILMENT(STUDENTNUMBER, AILMENT, AILMENT_KEY) values ('$stnum', '$ailment', '$ailmentid')");
	}
	
	public function add_applicant_ailment($stnum, $ailment, $condition){
		$this->db->query("Insert into CMSC128.APPLICANT_AILMENT(STUDENTNUMBER, AILMENT_KEY, CONDITION) values ('$stnum', '$ailment', '$condition')");
	}
	
	/*public function add_aapplicant_ailment($stnum, $ailment, $condition){
		$this->db->query("Insert into CMSC128.AAPPLICANT_AILMENT(STUDENTNUMBER, AILMENT_KEY, CONDITION) values ('$stnum', '$ailment', '$condition')");
	}*/
	
	public function add_dormer_medication($stnum, $medication, $medication_key){
		$this->db->query("Insert into CMSC128.DORMER_MEDICATION(STUDENTNUMBER,MEDICATION,MEDICATION_KEY) values ('$stnum','$medication', '$medication_key')");
	}
	
	public function add_applicant_medication($stnum, $medication_key){
		$this->db->query("Insert into CMSC128.APPLICANT_MEDICATION(STUDENTNUMBER,MEDICATION_KEY) values ('$stnum', '$medication_key')");
	}
	
	/*public function add_aapplicant_medication($stnum, $medication_key){
		$this->db->query("Insert into CMSC128.AAPPLICANT_MEDICATION(STUDENTNUMBER,MEDICATION_KEY) values ('$stnum', '$medication_key')");
	}*/
	
	public function add_equipment($control_number, $equip_name){
		$this->db->query("Insert into CMSC128.EQUIPMENT(CONTROLNUMBER, EQUIPMENTNAME) values ('$control_number', '$equip_name')");
	}
	
	public function add_guardian($guardianid, $fname, $mname, $lname, $address, $contactnum, $eadd, $civilstatus, $sourceofincome){
		$this->db->query("Insert into CMSC128.GUARDIAN(GUARDIANID, FIRSTNAME, MIDDLENAME, LASTNAME, ADDRESS, CONTACTNUMBER, EMAILADDRESS, CIVILSTATUS, SOURCEOFINCOME) values ('$guardianid', '$fname', '$mname', '$lname', '$address', '$contactnum', '$eadd', '$civilstatus', '$sourceofincome')");
	}
	
	public function add_paymentrecord($paymentrecordid, $totalliabilities){
		$this->db->query("Insert into CMSC128.PAYMENTRECORD(PAYMENTRECORDID, TOTALLIABILITIES) values ('$paymentrecordid', '$totalliabilities')");
	}
	
	public function add_statementofaccount($soaid, $month, $year, $total, $paymentrecordid){
		$this->db->query("Insert into CMSC128.STATEMENTOFACCOUNT(SOAID, MONTH, YEAR, TOTAL, PAYMENTRECORDID) values ('$soaid', '$month', '$year', '$total', '$paymentrecordid')");
	}
	
	public function add_soa_resifee($resifeeid, $residencefee, $soaid){
		//$periodcovered = $this->db->query("select ROUND(MONTHS_BETWEEN(SYSDATE,'$date')) from DUAL");
		//$monthaccount = $residencefee*$periodcovered;
		$this->db->query("Insert into CMSC128.SOA_RESIDENCEFEE(RESIDENCEFEEID, RESIDENCEFEE, SOAID) values ('$resifeeid', '$residencefee', '$soaid')");
	}
	
	public function add_soa_appfee($appliance, $appliancefee, $soaid){
		//$periodcovered = $this->db->query("select ROUND(MONTHS_BETWEEN(SYSDATE,'$date')) from DUAL");
		//$monthaccount = $appliancefee*$periodcovered;
		$this->db->query("Insert into CMSC128.SOA_APPLIANCEFEE(APPLIANCE, APPLIANCEFEE, SOAID) values ('$appliance', '$appliancefee', '$soaid')");
	}
	
	public function add_soa_transfee($transfeeid, $transientfee, $soaid){
		$this->db->query("Insert into CMSC128.SOA_TRANSIENTFEE(TRANSIENTFEEID, TRANSIENTFEE, SOAID) values ('$transfeeid', '$transientfee', '$soaid')");
	}
	
	public function add_soa_reservfee($reservfeeid, $reservationfee, $soaid){
		$this->db->query("Insert into CMSC128.SOA_RESERVATIONFEE(RESERVATIONFEEID, RESERVATIONFEE, SOAID) values ('$reservfeeid', '$reservationfee', '$soaid')");
	}
	
	public function add_soa_keydep($keydepid, $keydepfee, $soaid){
		$this->db->query("Insert into CMSC128.SOA_KEY_DEPOSIT(KEY_DEPOSITID, KEYDEPOSITFEE, SOAID) values ('$keydepfeeid', '$keydepfee', '$soaid')");
	}
	
	public function add_soa_clocker($clockerid, $clockerfee, $soaid){
		$this->db->query("Insert into CMSC128.SOA_CLOSED_LOCKER(CLOSED_LOCKERID, CLOSEDLOCKERFEE, SOAID) values ('$clockerid', '$clockerfee', '$soaid')");
	}
	
	public function add_pr_unpaidfee($ufid, $account, $month, $year, $paymentrecordid){
		$this->db->query("Insert into CMSC128.PAYMENTRECORD_UNPAIDFEE(UFID, MONTHACCOUNT, MONTH, YEAR, PAYMENTRECORDID) values ('$ufid', '$account', '$month', '$year', '$paymentrecordid')");
	}
	
	public function add_pr_paidfee($pfid, $date, $month, $year, $maccount, $prid){
		$this->db->query("Insert into CMSC128.PAYMENTRECORD_PAIDFEE(PFID, DATEOFPAYMENT, MONTH, YEAR, MONTHACCOUNT, PAYMENTRECORDID) values ('$pfid', '$date', '$month', '$year', '$maccount', '$prid')");
	}
	
	public function add_dormer_paymentrecord($stnum, $paymentrecordid){
		$this->db->query("Insert into CMSC128.DORMER_PAYMENTRECORD(STUDENTNUMBER, PAYMENTRECORDID) values ('$stnum', '$paymentrecordid')");
	}
	
	public function add_dormer_equipment($borrowedkey, $stnum, $controlnum,  $date_borrowed, $condbeforeborrowed,$borrowed_returned){
		$this->db->query("Insert into CMSC128.DORMER_EQUIPMENT(BORROWEDKEY,STUDENTNUMBER, CONTROLNUMBER, DATEBORROWED, CONDBEFOREBORROWED,BORROWED_RETURNED) values ('$borrowedkey', '$stnum', '$controlnum', '$date_borrowed', '$condbeforeborrowed','$borrowed_returned')");
	}
	
	public function add_room($roomnum, $capacity, $vacancy){
		$this->db->query("Insert into CMSC128.ROOM(ROOMNUMBER, CAPACITY, VACANCY) values ('$roomnum', '$capacity', '$vacancy')");
	}
	
	public function add_violation_data($violationid, $violation, $violationdate, $remarks, $stnum){
		$this->db->query("Insert into CMSC128.VIOLATIONDATA(VIOLATIONID, VIOLATION, DATEOFVIOLATION, REMARK, STUDENTNUMBER) values ('$violationid', '$violation', '$violationdate', '$remarks', '$stnum')");
	}
	
	public function addappliancewithfee($appliance,$appliancefee){
		$this->db->query("Insert into CMSC128.APPLIANCEFEE(APPLIANCE,APPLIANCEFEE) values ('$appliance','$appliancefee')");
	}
	
	public function applicant_viewer()
	{
		return $this->db->query("select * from APPLICANT order by DATERESERVED")->result_array();
	}
	
	public function dormer_viewer()
	{
		return $this->db->query("select * from DORMER")->result_array();
	}
	
	public function equipment_viewer()
	{
	 return $this->db->query("select * from EQUIPMENT")->result_array();
	}
	
	public function guardian_viewer()
	{
	return $this->db->query("select * from GUARDIAN")->result_array();
	}
	
	public function paymentrecord_viewer()
	{
		return $this->db->query("select * from PAYMENTRECORD")->result_array();
	}
	
	public function bracketfee_viewer()
	{
		return $this->db->query("select * from RESIDENCEFEE")->result_array();
	}
	
	public function appliancefee_viewer()
	{
		return $this->db->query("select * from APPLIANCEFEE")->result_array();
	}
	
	public function get_adminaccount()
	{
		return $this->db->query("select * from ADMIN_LOGIN")->result_array();
	}
	
	public function check_adminaccount_password($password)
	{
		return $this->db->query("select * from ADMIN_LOGIN where PASSWORD = '$password'")->result_array();
	}
	
	/*public function room_viewer()
	{
	$selected = $this->db->query("SELECT COUNT(ROOMNUMBER) FROM ROOM")->result_array();
	foreach ($selected as $instance) {
			$count = $instance['COUNT(ROOMNUMBER)'];
	}
	if ($count != 0){
	$result = $this->db->query("SELECT * FROM ROOM")->result_array();
	return $result;
	}
	else
		return array();
	}*/
	
	public function check_room($roomnum){
		return $this->db->query("select * from ROOM where ROOMNUMBER = '$roomnum'")->result_array();
	}
	
	public function room_viewer(){
		return $this->db->query("select * from ROOM")->result_array();
	}
	
	public function vacantroom_viewer()
	{
		return $this->db->query("select * from ROOM where VACANCY > 0")->result_array();
	}
	
	public function violationdata_viewer($stnum)
	{
		return $this->db->query("select * from VIOLATIONDATA where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function search_dormer($studentnumber){
		return $this->db->query("select * from DORMER where STUDENTNUMBER = '$studentnumber'")->result_array();
	}
	
	public function search_room($roomnum){
		return $this->db->query("select * from ROOM where ROOMNUMBER = '$roomnum'")->result_array();
	}
	
	public function search_applicant($studentnumber)
	{
	$selected = $this->db->query("SELECT COUNT(STUDENTNUMBER) FROM DORMER WHERE STUDENTNUMBER = '$studentnumber' AND ISRESIDENT = 'no'")->result_array();
	foreach ($selected as $instance) {
			$count = $instance['COUNT(STUDENTNUMBER)'];
	}
	if ($count != 0){
	$result = $this->db->query("SELECT * FROM DORMER WHERE STUDENTNUMBER = '$studentno' AND ISRESIDENT = 'no'")->result_array();
	return $result;
	}
	else
		return array();
	}
	/*
	public function search_dormer($studentnumber)
	{
	$selected = $this->db->query("SELECT COUNT(STUDENTNUMBER) FROM DORMER WHERE STUDENTNUMBER = '$studentnumber' AND ISRESIDENT = 'yes'")->result_array();
	foreach ($selected as $instance) {
			$count = $instance['COUNT(STUDENTNUMBER)'];
	}
	if ($count != 0){
	$result = $this->db->query("SELECT * FROM DORMER WHERE STUDENTNUMBER = '$studentno' AND ISRESIDENT = 'yes'")->result_array();
	return $result;
	}
	else
		return array();
	}
	*/
	
	/*public function search_equipment($eqid)
	{
	$selected = $this->db->query("SELECT COUNT(CONTROLNUMBER) FROM EQUIPMENT WHERE CONTROLNUMBER = '$eqid'")->result_array();
	foreach ($selected as $instance) {
			$count = $instance['COUNT(CONTROLNUMBER)'];
	}
	if ($count != 0){
	$result = $this->db->query("SELECT * FROM EQUIPMENT WHERE CONTROLNUMBER = '$eqid'")->result_array();
	return $result;
	}
	else
		return array();
	}*/
	
	public function search_equipment($eqid){
		return $this->db->query("select * from EQUIPMENT where CONTROLNUMBER = '$eqid'")->result_array();
	}
	
	public function edit_dormer($stnum, $fname, $mname, $lname, $bday, $age, $course, $college, $classification, $etimeofgrad, $civilstatus, $hadd, $contactnum, $eadd, $scho, $stfapbracket, $monthlyall, $religion, $numbro, $numsis, $birthorder, $inrelationship, $statusofresidency, $roomnum){
		$this->db->query("UPDATE DORMER SET STUDENTNUMBER='$stnum', FIRSTNAME='$fname', MIDDLENAME='$mname', LASTNAME='$lname', BIRTHDAY='$bday', AGE='$age', COURSE='$course', COLLEGE='$college', CLASSIFICATION='$classification', ETIMEOFGRAD='$etimeofgrad', CIVILSTATUS='$civilstatus', HOMEADDRESS='$hadd', CONTACTNUMBER='$contactnum', EMAILADDRESS='$eadd', SCHOLARSHIP='$scho', STFAPBRACKET='$stfapbracket', MONTHLYALLOWANCE='$monthlyall', RELIGION='$religion', NUMOFBROTHER='$numbro', NUMOFSISTER='$numsis', BIRTHORDER='$birthorder', INRELATIONSHIP='$inrelationship', STATUSOFRESIDENCY='$statusofresidency', ROOMNUMBER='$roomnum' where STUDENTNUMBER = '$stnum'");
	}
	
	public function edit_adminAccount($oldusername, $newusername, $password){
		$this->db->query("UPDATE ADMIN_LOGIN SET USERNAME='$newusername', PASSWORD='$password' where USERNAME = '$oldusername'");
	}
	
	public function update_guardian($guardianid, $gfname, $gmname, $glname, $gaddress, $gcontactnum, $geadd, $gcivilstatus, $gsourceofincome){
		$this->db->query("UPDATE GUARDIAN SET GUARDIANID = '$guardianid', FIRSTNAME = '$gfname', MIDDLENAME = '$gmname', LASTNAME = '$glname',  ADDRESS = '$gaddress', CONTACTNUMBER = '$gcontactnum', EMAILADDRESS = '$geadd', CIVILSTATUS = '$gcivilstatus', SOURCEOFINCOME = '$gsourceofincome'  where GUARDIANID = '$guardianid'");
	}
	
	public function update_roomvacancy($roomnum){
		$this->db->query("UPDATE ROOM SET VACANCY=VACANCY-1 where ROOMNUMBER = '$roomnum'");
	}
	
	public function update_roomvacancy_add($roomnum){
		$this->db->query("UPDATE ROOM SET VACANCY=VACANCY+1 where ROOMNUMBER = '$roomnum'");
	}
	
	public function update_dormer_equipment($borrowedkey,$stnum, $control_number, $date_borrowed,$date_returned,$condb,$condr,$borrowed_returned){
		$this->db->query("UPDATE DORMER_EQUIPMENT SET BORROWEDKEY='$borrowedkey',STUDENTNUMBER='$stnum', CONTROLNUMBER='$control_number', DATEBORROWED='$date_borrowed',DATERETURNED='$date_returned',CONDBEFOREBORROWED='$condb',CONDAFTERRETURNED='$condr',BORROWED_RETURNED='$borrowed_returned' where BORROWEDKEY = '$borrowedkey' and STUDENTNUMBER='$stnum' and BORROWED_RETURNED = 'borrowed'");
	}
	
	public function update_bracketfee($bracket,$bracketfee){
		$this->db->query("UPDATE RESIDENCEFEE SET RESIDENCEFEE='$bracketfee' where BRACKET = '$bracket'");
	}
	
	public function update_appliancefee($appliance,$appliancefee){
		$this->db->query("UPDATE APPLIANCEFEE SET APPLIANCEFEE='$appliancefee' where APPLIANCE = '$appliance'");
	}
	
	public function update_statusofresidency($stnum,$statusofresidency){
		$this->db->query("UPDATE DORMER SET STATUSOFRESIDENCY='$statusofresidency' where STUDENTNUMBER = '$stnum'");
	}
	
	public function remove_dormer_guardian($stnum)
	{
		return $this->db->query("delete from DORMER_GUARDIAN where STUDENTNUMBER = '$stnum'");
	}
	
	public function remove_applicant($stnum)
	{
		return $this->db->query("delete from APPLICANT where STUDENTNUMBER = '$stnum'");
	}
	
	public function remove_applicant_guardian($stnum)
	{
		return $this->db->query("delete from APPLICANT_GUARDIAN where STUDENTNUMBER = '$stnum'");
	}
	
	public function remove_guardian($guardianid)
	{
		return $this->db->query("delete from GUARDIAN where GUARDIANID = '$guardianid'");
	}
	
	public function remove_affiliation($stnum)
	{
		return $this->db->query("delete from DORMER_AFFILIATION where STUDENTNUMBER = '$stnum'");
	}
	
	public function remove_ailment($stnum)
	{
		return $this->db->query("delete from DORMER_AILMENT where STUDENTNUMBER = '$stnum'");
	}
	
	public function remove_medication($stnum)
	{
		return $this->db->query("delete from DORMER_MEDICATION where STUDENTNUMBER = '$stnum'");
	}
	
	public function remove_violation($stnum)
	{
		return $this->db->query("delete from VIOLATIONDATA where STUDENTNUMBER = '$stnum'");
	}
	
	public function remove_equipment($stnum)
	{
		return $this->db->query("delete from DORMER_EQUIPMENT where STUDENTNUMBER = '$stnum'");
	}
	
	public function remove_an_equipment($eqid)
	{
		return $this->db->query("delete from EQUIPMENT where CONTROLNUMBER = '$eqid'");
	}
	
	public function remove_paidfee($precordid)
	{
		return $this->db->query("delete from PAYMENTRECORD_PAIDFEE where PAYMENTRECORDID = '$precordid'");
	}
	
	public function remove_unpaidfee($precordid)
	{
		return $this->db->query("delete from PAYMENTRECORD_UNPAIDFEE where PAYMENTRECORDID = '$precordid'");
	}
	
	public function remove_residencefee($soaid)
	{
		return $this->db->query("delete from SOA_RESIDENCEFEE where SOAID = '$soaid'");
	}
	
	public function remove_appliancefee($soaid)
	{
		return $this->db->query("delete from SOA_APPLIANCEFEE where SOAID = '$soaid'");
	}
	
	public function remove_transientfee($soaid)
	{
		return $this->db->query("delete from SOA_TRANSIENTFEE where SOAID = '$soaid'");
	}
	
	public function remove_reservationfee($soaid)
	{
		return $this->db->query("delete from SOA_RESERVATIONFEE where SOAID = '$soaid'");
	}
	
	public function remove_key_deposit_fee($soaid)
	{
		return $this->db->query("delete from SOA_KEY_DEPOSIT where SOAID = '$soaid'");
	}
	
	public function remove_closed_locker_fee($soaid)
	{
		return $this->db->query("delete from SOA_CLOSED_LOCKER where SOAID = '$soaid'");
	}
	
	public function remove_statementofaccount($precordid)
	{
		return $this->db->query("delete from STATEMENTOFACCOUNT where PAYMENTRECORDID = '$precordid'");
	}
	
	public function remove_paymentrecord($precordid)
	{
		return $this->db->query("delete from PAYMENTRECORD where PAYMENTRECORDID = '$precordid'");
	}
	
	public function remove_dormer_paymentrecord($stnum)
	{
		return $this->db->query("delete from DORMER_PAYMENTRECORD where STUDENTNUMBER = '$stnum'");
	}
	
	public function remove_dormer($stnum)
	{
		return $this->db->query("delete from DORMER where STUDENTNUMBER = '$stnum'");
	}
	
	public function remove_room($roomnum)
	{
		return $this->db->query("delete from ROOM where ROOMNUMBER = '$roomnum'");
	}
	
	public function remove_thisappliancefee($appliance)
	{
		return $this->db->query("delete from APPLIANCEFEE where APPLIANCE = '$appliance'");
	}
	
	public function get_studentNumber($stnum)
	{
		return $this->db->query("select STUDENTNUMBER from DORMER where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function get_statusOfResidency($stnum)
	{
		return $this->db->query("select STATUSOFRESIDENCY from DORMER where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function get_appStudentNumber($stnum)
	{
		return $this->db->query("select STUDENTNUMBER from APPLICANT where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function get_paymentRecordId($stnum)
	{
		return $this->db->query("select PAYMENTRECORDID from DORMER_PAYMENTRECORD where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function get_SOAId($recordid)
	{
		return $this->db->query("select SOAID from STATEMENTOFACCOUNT where PAYMENTRECORDID = '$recordid'")->result_array();
	}
	
	public function getRooms()
	{
		return $this->db->query("select ROOMNUMBER from ROOM")->result_array();
	}
	
	public function getAvailableRooms()
	{
		return $this->db->query("select ROOMNUMBER from ROOM where VACANCY > 0")->result_array();
	}
	
	public function get_name($name)
	{
		return $this->db->query("select STUDENTNUMBER, FIRSTNAME, MIDDLENAME, LASTNAME from DORMER where (upper(FIRSTNAME) = upper('$name') OR upper(MIDDLENAME)=upper('$name') OR upper(LASTNAME)=upper('$name'))")->result_array();
	}
	
	public function get_dormer_info($stnum)
	{
		return $this->db->query("select STUDENTNUMBER, FIRSTNAME, MIDDLENAME, LASTNAME from DORMER where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function get_guardianId($stnum)
	{
		return $this->db->query("select GUARDIANID from DORMER_GUARDIAN where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function get_roomnum($stnum)
	{
		return $this->db->query("select ROOMNUMBER from DORMER where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	/*public function get_aAppGuardianId($stnum)
	{
		return $this->db->query("select GUARDIANID from AAPPLICANT_GUARDIAN where STUDENTNUMBER = '$stnum'")->result_array();
	}*/
	
	public function get_applicant_guardianId($stnum)
	{
		return $this->db->query("select GUARDIANID from APPLICANT_GUARDIAN where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function get_applicantInfo($stnum)
	{
		return $this->db->query("select * from APPLICANT where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function get_guardianinfo($guardianid)
	{
		return $this->db->query("select * from GUARDIAN where GUARDIANID = '$guardianid'")->result_array();
	}
	
	public function get_reservationdate($stnum)
	{
		return $this->db->query("select DATERESERVED from APPLICANT where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function get_violationdata($stnum)
	{
		return $this->db->query("select * from VIOLATIONDATA where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function search_sophomore()
	{
		return $this->db->query("select * from DORMER where CLASSIFICATION = 'Sophomore'" )->result_array();
	}
	
	public function search_junior()
	{
		return $this->db->query("select * from DORMER where CLASSIFICATION = 'Junior'" )->result_array();
	}
	
	public function search_senior()
	{
		return $this->db->query("select * from DORMER where CLASSIFICATION = 'Senior'" )->result_array();
	}
	
	public function search_bracketA()
	{
		return $this->db->query("select * from DORMER where STFAPBRACKET = 'A'" )->result_array();
	}
	
	public function search_bracketB()
	{
		return $this->db->query("select * from DORMER where STFAPBRACKET = 'B'" )->result_array();
	}
	
	public function search_bracketC()
	{
		return $this->db->query("select * from DORMER where STFAPBRACKET = 'C'" )->result_array();
	}
	public function search_bracketD()
	{
		return $this->db->query("select * from DORMER where STFAPBRACKET = 'D'" )->result_array();
	}
	public function search_bracketE1()
	{
		return $this->db->query("select * from DORMER where STFAPBRACKET = 'E1'" )->result_array();
	}
	
	public function search_bracketE2()
	{
		return $this->db->query("select * from DORMER where STFAPBRACKET = 'E2'" )->result_array();
	}
	
	public function search_admin($adminname, $adminpwd)
	{
		return $this->db->query("select * from ADMIN_LOGIN where USERNAME = '$adminname' and PASSWORD = '$adminpwd'" )->result_array();
	}
	
	public function check_admin()
	{
		return $this->db->query("select * from ADMIN_LOGIN" )->result_array();
	}
	
	public function search_graduatingstudent()
	{
		return $this->db->query("select * from DORMER where MONTHS_BETWEEN(ETIMEOFGRAD,SYSDATE) < 5" )->result_array();
	}
	
	public function search_violations(){
		return $this->db->query("select * from VIOLATIONDATA" )->result_array();
	}
	
	public function search_paidfees(){
		return $this->db->query("select * from PAYMENTRECORD_PAIDFEE" )->result_array();
	}
	
	public function search_paidfees_formonth($month, $year){
		return $this->db->query("select * from PAYMENTRECORD_PAIDFEE where MONTH = '$month' and YEAR = '$year'" )->result_array();
	}
	
	public function get_sffapBracket($stnum)
	{
		return $this->db->query("select STFAPBRACKET from DORMER where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function get_dateAccepted($stnum)
	{
		return $this->db->query("select DATEACCEPTED from DORMER where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function get_appliancelist($stnum){
		return $this->db->query("select * from APPLIANCE where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function get_residencefee($stfapbracket){
		return $this->db->query("select RESIDENCEFEE from RESIDENCEFEE where BRACKET = '$stfapbracket'")->result_array();
	}
	
	public function get_appliancefee($appliance){
		return $this->db->query("select APPLIANCEFEE from APPLIANCEFEE where APPLIANCE = '$appliance'")->result_array();
	}
	
	public function checkIfHasPaidBefore($soaid){
		return $this->db->query("select PFID from PAYMENTRECORD_PAIDFEE where PFID = '$soaid'")->result_array();
	}
	
	public function get_periodcovered($date){
		return $this->db->query("select ROUND(MONTHS_BETWEEN(SYSDATE,'$date')) from DUAL")->result_array();
	}
	
	public function check_statementofaccount($soaid){
		return $this->db->query("select SOAID from STATEMENTOFACCOUNT where SOAID = '$soaid'")->result_array();
	}
	
	public function check_dormer_affiliation($affiliationid){
		return $this->db->query("select AFFILIATION_ID from DORMER_AFFILIATION where AFFILIATION_ID = '$affiliationid'")->result_array();
	}
	
	public function check_dormer_ailment($ailmentid){
		return $this->db->query("select AILMENT_KEY from DORMER_AILMENT where AILMENT_KEY = '$ailmentid'")->result_array();
	}
	
	public function check_dormer_medication($medicationid){
		return $this->db->query("select MEDICATION_KEY from DORMER_MEDICATION where MEDICATION_KEY = '$medicationid'")->result_array();
	}
	
	public function check_dormer_borrowedkey($borrowedkey){
		return $this->db->query("select BORROWEDKEY from DORMER_EQUIPMENT where BORROWEDKEY = '$borrowedkey' and BORROWED_RETURNED = 'borrowed'")->result_array();
	}
	
	public function check_equipment_ifavailable($control_number){
		return $this->db->query("select * from DORMER_EQUIPMENT where CONTROLNUMBER = '$control_number' and BORROWED_RETURNED = 'borrowed'")->result_array();
	}
	
	public function check_dormer_borrowedequipment($stnum){
		return $this->db->query("select * from DORMER_EQUIPMENT where STUDENTNUMBER = '$stnum'  and BORROWED_RETURNED = 'borrowed'")->result_array();
	}
	
	public function get_soa_residencefee($soaid){
		return $this->db->query("select * from SOA_RESIDENCEFEE where SOAID = '$soaid'")->result_array();
	}
	
	public function get_soa_appliancefee($soaid){
		return $this->db->query("select * from SOA_APPLIANCEFEE where SOAID = '$soaid'")->result_array();
	}
	
	public function get_soa_transientfee($soaid){
		return $this->db->query("select * from SOA_TRANSIENTFEE where SOAID = '$soaid'")->result_array();
	}
	
	public function get_soa_reservationfee($soaid){
		return $this->db->query("select * from SOA_RESERVATIONFEE where SOAID = '$soaid'")->result_array();
	}
	
	public function get_soa_key_deposit($soaid){
		return $this->db->query("select * from SOA_KEY_DEPOSIT where SOAID = '$soaid'")->result_array();
	}
	
	public function get_soa_closed_locker($soaid){
		return $this->db->query("select * from SOA_CLOSED_LOCKER where SOAID = '$soaid'")->result_array();
	}
	
	public function remove_thisStatementofaccount($soaid)
	{
		return $this->db->query("delete from STATEMENTOFACCOUNT where SOAID = '$soaid'");
	}
	
	public function remove_thisUnpaidfee($soaid)
	{
		return $this->db->query("delete from PAYMENTRECORD_UNPAIDFEE where UFID = '$soaid'");
	}
	
	public function get_SOAinfo($soaid)
	{
		return $this->db->query("select * from STATEMENTOFACCOUNT where SOAID = '$soaid'")->result_array();
	}
	
	public function get_alldormerinfo()
	{
		return $this->db->query("select STUDENTNUMBER, FIRSTNAME, MIDDLENAME, LASTNAME from DORMER")->result_array();
	}
	
	public function get_alldormerPR()
	{
		return $this->db->query("select * from DORMER_PAYMENTRECORD")->result_array();
	}
	
	public function get_detailsForSend($stnum)
	{
		return $this->db->query("select STUDENTNUMBER, FIRSTNAME, MIDDLENAME, LASTNAME, EMAILADDRESS from DORMER where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function get_unpaidfeeinfo($paymentrecordid)
	{
		return $this->db->query("select * from PAYMENTRECORD_UNPAIDFEE where PAYMENTRECORDID = '$paymentrecordid'")->result_array();
	}
	
	public function notify_successful($notification)
	{
		echo '<center><div class="desc2 bg-color-blue"><div class="fg-color-white" id="title">'.$notification.'</div></div></center>';
	}
	
	public function notify_failed($notification)
	{
		echo '<center><div class="desc2 bg-color-red"><div class="fg-color-white" id="title">'.$notification.'</div></div></center>';
	}
}