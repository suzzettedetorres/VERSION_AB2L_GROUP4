<?php
class Main_model extends CI_Model{
	public function add_dormer($stnum, $fname, $mname, $lname, $bday, $age, $course, $college, $classification, $etimeofgrad, $civilstatus, $hadd, $contactnum, $eadd, $scho, $stfapbracket, $monthlyall, $religion, $numbro, $numsis, $birthorder, $inrelationship, $statusofresidency, $roomnum, $dateaccepted){
		$this->db->query("Insert into CMSC128.DORMER(STUDENTNUMBER, FIRSTNAME, MIDDLENAME, LASTNAME, BIRTHDAY, AGE, COURSE, COLLEGE, CLASSIFICATION, ETIMEOFGRAD, CIVILSTATUS, HOMEADDRESS, CONTACTNUMBER, EMAILADDRESS, SCHOLARSHIP, STFAPBRACKET, MONTHLYALLOWANCE, RELIGION, NUMOFBROTHER, NUMOFSISTER, BIRTHORDER, INRELATIONSHIP, STATUSOFRESIDENCY, ROOMNUMBER, DATEACCEPTED) values ('$stnum', '$fname', '$mname', '$lname', '$bday', '$age', '$course', '$college', '$classification', '$etimeofgrad', '$civilstatus', '$hadd', '$contactnum', '$eadd', '$scho', '$stfapbracket', '$monthlyall', '$religion', '$numbro', '$numsis', '$birthorder', '$inrelationship', '$statusofresidency', '$roomnum', '$dateaccepted')");
	}
	
	public function add_applicant($stnum, $fname, $mname, $lname, $bday, $age, $course, $college, $classification, $etimeofgrad, $civilstatus, $hadd, $contactnum, $eadd, $scho, $stfapbracket, $monthlyall, $religion, $numbro, $numsis, $birthorder, $inrelationship, $datereserved){
		$this->db->query("insert into CMSC128.APPLICANT(STUDENTNUMBER, FIRSTNAME, MIDDLENAME, LASTNAME, BIRTHDAY, AGE, COURSE, COLLEGE, CLASSIFICATION, ETIMEOFGRAD, CIVILSTATUS, HOMEADDRESS, CONTACTNUMBER, EMAILADDRESS, SCHOLARSHIP, STFAPBRACKET, MONTHLYALLOWANCE, RELIGION, NUMOFBROTHER, NUMOFSISTER, BIRTHORDER, INRELATIONSHIP, DATERESERVED) values ('$stnum', '$fname', '$mname', '$lname', '$bday', '$age', '$course', '$college', '$classification', '$etimeofgrad', '$civilstatus', '$hadd', '$contactnum', '$eadd', '$scho', '$stfapbracket', '$monthlyall', '$religion', '$numbro', '$numsis', '$birthorder', '$inrelationship', '$datereserved')");
	}
	
	public function add_acceptedApplicant($stnum, $fname, $mname, $lname, $bday, $age, $course, $college, $classification, $etimeofgrad, $civilstatus, $hadd, $contactnum, $eadd, $scho, $stfapbracket, $monthlyall, $religion, $numbro, $numsis, $birthorder, $inrelationship, $datereserved, $dateaccepted){
		$this->db->query("Insert into CMSC128.ACCEPTEDAPPLICANT(STUDENTNUMBER, FIRSTNAME, MIDDLENAME, LASTNAME, BIRTHDAY, AGE, COURSE, COLLEGE, CLASSIFICATION, ETIMEOFGRAD, CIVILSTATUS, HOMEADDRESS, CONTACTNUMBER, EMAILADDRESS, SCHOLARSHIP, STFAPBRACKET, MONTHLYALLOWANCE, RELIGION, NUMOFBROTHER, NUMOFSISTER, BIRTHORDER, INRELATIONSHIP, DATERESERVED, DATEACCEPTED) values ('$stnum', '$fname', '$mname', '$lname', '$bday', '$age', '$course', '$college', '$classification', '$etimeofgrad', '$civilstatus', '$hadd', '$contactnum', '$eadd', '$scho', '$stfapbracket', '$monthlyall', '$religion', '$numbro', '$numsis', '$birthorder', '$inrelationship', '$datereserved', '$dateaccepted')");
	}
	
	public function add_dormer_guardian($stnum, $guardianid){
		$this->db->query("Insert into CMSC128.DORMER_GUARDIAN(STUDENTNUMBER,GUARDIANID) values ('$stnum', '$guardianid')");
	}
	
	public function add_applicant_guardian($stnum, $guardianid){
		$this->db->query("Insert into CMSC128.APPLICANT_GUARDIAN(STUDENTNUMBER,GUARDIANID) values ('$stnum', '$guardianid')");
	}
	
	public function add_aapplicant_guardian($stnum, $guardianid){
		$this->db->query("Insert into CMSC128.AAPPLICANT_GUARDIAN(STUDENTNUMBER,GUARDIANID) values ('$stnum', '$guardianid')");
	}
	
	public function add_dormer_affiliation($stnum, $affiliation){
		$this->db->query("Insert into CMSC128.DORMER_AFFILIATION(STUDENTNUMBER,AFFILIATIONID) values ('$stnum', '$affiliation')");
	}
	
	public function add_applicant_affiliation($stnum, $affiliation){
		$this->db->query("Insert into CMSC128.APPLICANT_AFFILIATION(STUDENTNUMBER,AFFILIATIONID) values ('$stnum', '$affiliation')");
	}
	
	public function add_aapplicant_affiliation($stnum, $affiliation){
		$this->db->query("Insert into CMSC128.AAPPLICANT_AFFILIATION(STUDENTNUMBER,AFFILIATIONID) values ('$stnum', '$affiliation')");
	}
	
	public function add_dormer_ailment($stnum, $ailment, $condition){
		$this->db->query("Insert into CMSC128.DORMER_AILMENT(STUDENTNUMBER, AILMENT_KEY, CONDITION) values ('$stnum', '$ailment', '$condition')");
	}
	
	public function add_applicant_ailment($stnum, $ailment, $condition){
		$this->db->query("Insert into CMSC128.APPLICANT_AILMENT(STUDENTNUMBER, AILMENT_KEY, CONDITION) values ('$stnum', '$ailment', '$condition')");
	}
	
	public function add_aapplicant_ailment($stnum, $ailment, $condition){
		$this->db->query("Insert into CMSC128.AAPPLICANT_AILMENT(STUDENTNUMBER, AILMENT_KEY, CONDITION) values ('$stnum', '$ailment', '$condition')");
	}
	
	public function add_dormer_medication($stnum, $medication_key){
		$this->db->query("Insert into CMSC128.DORMER_MEDICATION(STUDENTNUMBER,MEDICATION_KEY) values ('$stnum', '$medication_key')");
	}
	
	public function add_applicant_medication($stnum, $medication_key){
		$this->db->query("Insert into CMSC128.APPLICANT_MEDICATION(STUDENTNUMBER,MEDICATION_KEY) values ('$stnum', '$medication_key')");
	}
	
	public function add_aapplicant_medication($stnum, $medication_key){
		$this->db->query("Insert into CMSC128.AAPPLICANT_MEDICATION(STUDENTNUMBER,MEDICATION_KEY) values ('$stnum', '$medication_key')");
	}
	
	public function add_equipment($control_number, $equip_name, $date_borrowed, $date_returned, $condbeforeborrowed, $condafterreturned){
		$this->db->query("Insert into CMSC128.EQUIPMENT(CONTROLNUMBER, EQUIPMENTNAME, DATEBORROWED, DATERETURNED, CONDBEFOREBORROWED, CONDAFTERRETURNED) values ('$control_number', '$equip_name', '$date_borrowed', '$date_returned', '$condbeforeborrowed', '$condafterreturned')");
	}
	
	public function add_guardian($guardianid, $fname, $mname, $lname, $address, $contactnum, $eadd, $civilstatus, $sourceofincome){
		$this->db->query("Insert into CMSC128.GUARDIAN(GUARDIANID, FIRSTNAME, MIDDLENAME, LASTNAME, ADDRESS, CONTACTNUMBER, EMAILADDRESS, CIVILSTATUS, SOURCEOFINCOME) values ('$guardianid', '$fname', '$mname', '$lname', '$address', '$contactnum', '$eadd', '$civilstatus', '$sourceofincome')");
	}
	
	public function add_paymentrecord($paymentrecordid, $totalliabilities){
		$this->db->query("Insert into CMSC128.PAYMENTRECORD(PAYMENTRECORDID, TOTALLIABILITIES) values ('$paymentrecordid', '$totalliabilities')");
	}
	
	public function add_statementofaccount($soaid, $month, $total, $paymentrecordid){
		$this->db->query("Insert into CMSC128.STATEMENTOFACCOUNT(SOAID, MONTH, TOTAL, PAYMENTRECORDID) values ('$soaid', '$month', '$total', '$paymentrecordid')");
	}
	
	public function add_soa_resifee($resifeeid, $periodcovered, $monthaccount, $soaid){
		$this->db->query("Insert into CMSC128.SOA_RESIDENCEFEE(RESIDENCEFEEID, PERIODCOVERED, MONTHACCOUNT, SOAID) values ('$resifeeid', '$periodcovered', '$monthaccount', '$soaid')");
	}
	
	public function add_soa_appfee($appfeeid, $periodcovered, $monthaccount, $soaid){
		$this->db->query("Insert into CMSC128.SOA_APPLIANCEFEE(APPLIANCEFEEID, PERIODCOVERED, MONTHACCOUNT, SOAID) values ('$appfeeid', '$periodcovered', '$monthaccount', '$soaid')");
	}
	
	public function add_soa_transfee($transfeeid, $periodcovered, $monthaccount, $soaid){
		$this->db->query("Insert into CMSC128.SOA_TRANSIENTFEE(TRANSIENTFEEID, PERIODCOVERED, MONTHACCOUNT, SOAID) values ('$transfeeid', '$periodcovered', '$monthaccount', '$soaid')");
	}
	
	public function add_soa_reservfee($reservfeeid, $periodcovered, $monthaccount, $soaid){
		$this->db->query("Insert into CMSC128.SOA_RESERVATIONFEE(RESERVATIONFEEID, PERIODCOVERED, MONTHACCOUNT, SOAID) values ('$reservfeeid', '$periodcovered', '$monthaccount', '$soaid')");
	}
	
	public function add_soa_keydep($keydepid, $periodcovered, $monthaccount, $soaid){
		$this->db->query("Insert into CMSC128.SOA_KEY_DEPOSIT(KEY_DEPOSITID, PERIODCOVERED, MONTHACCOUNT, SOAID) values ('$keydepfeeid', '$periodcovered', '$monthaccount', '$soaid')");
	}
	
	public function add_soa_clocker($clockerid, $periodcovered, $monthaccount, $soaid){
		$this->db->query("Insert into CMSC128.SOA_CLOSED_LOCKER(CLOSED_LOCKERID, PERIODCOVERED, MONTHACCOUNT, SOAID) values ('$clockerid', '$periodcovered', '$monthaccount', '$soaid')");
	}
	
	public function add_pr_unpaidfee($ufid, $account, $mdelayed, $paymentrecordid){
		$this->db->query("Insert into CMSC128.PAYMENTRECORD_UNPAIDFEE(UFID, ACCOUNT, NUMMONTHDELAYED, PAYMENTRECORDID) values ($ufid, $account, $mdelayed, $paymentrecordid)");
	}
	
	public function add_pr_paidfee($pfid, $month, $maccount, $paymentrecordid){
		$this->db->query("Insert into CMSC128.PAYMENTRECORD_PAIDFEE(PFID, MONTH, MONTHACCOUNT, PAYMENTRECORDID) values ($pfid, $month, $maccount, $paymentrecordid)");
	}
	
	public function add_dormer_paymentrecord($stnum, $paymentrecordid){
		$this->db->query("Insert into CMSC128.DORMER_PAYMENTRECORD(STUDENTNUMBER, PAYMENTRECORDID) values ('$stnum', '$paymentrecordid')");
	}
	
	public function add_dormer_equipment($stnum, $controlnum){
		$this->db->query("Insert into CMSC128.DORMER_EQUIPMENT(STUDENTNUMBER, CONTROLNUMBER) values ('$stnum', '$controlnum')");
	}
	
	public function add_room($roomnum, $capacity, $vacancy){
		$this->db->query("Insert into CMSC128.ROOM(ROOMNUMBER, CAPACITY, VACANCY) values ('$roomnum', '$capacity', '$vacancy')");
	}
	
	public function add_violation_data($violationid, $violation, $violationdate, $remarks, $stnum){
		$this->db->query("Insert into CMSC128.VIOLATIONDATA(VIOLATIONID, VIOLATION, DATEOFVIOLATION, REMARK, STUDENTNUMBER) values ('$violationid', '$violation', '$violationdate', '$remarks', '$stnum')");
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
	
	public function room_viewer(){
		return $this->db->query("select * from ROOM")->result_array();
	}
	
	public function vacantroom_viewer()
	{
		return $this->db->query("select * from ROOM where VACANCY > 0")->result_array();
	}
	
	public function violationdata_viewer()
	{
		return $this->db->query("select * from VIOLATIONDATA")->result_array();
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
	
	public function search_equipment($eqid)
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
	}
	
	public function edit_dormer($stnum, $fname, $mname, $lname, $bday, $age, $course, $college, $classification, $etimeofgrad, $civilstatus, $hadd, $contactnum, $eadd, $scho, $stfapbracket, $monthlyall, $religion, $numbro, $numsis, $birthorder, $inrelationship, $statusofresidency, $roomnum){
		$this->db->query("UPDATE DORMER SET STUDENTNUMBER='$stnum', FIRSTNAME='$fname', MIDDLENAME='$mname', LASTNAME='$lname', BIRTHDAY='$bday', AGE='$age', COURSE='$course', COLLEGE='$college', CLASSIFICATION='$classification', ETIMEOFGRAD='$etimeofgrad', CIVILSTATUS='$civilstatus', HOMEADDRESS='$hadd', CONTACTNUMBER='$contactnum', EMAILADDRESS='$eadd', SCHOLARSHIP='$scho', STFAPBRACKET='$stfapbracket', MONTHLYALLOWANCE='$monthlyall', RELIGION='$religion', NUMOFBROTHER='$numbro', NUMOFSISTER='$numsis', BIRTHORDER='$birthorder', INRELATIONSHIP='$inrelationship', STATUSOFRESIDENCY='$statusofresidency', ROOMNUMBER='$roomnum' where STUDENTNUMBER = '$stnum'");
	}
	
	public function update_guardian($guardianid, $gfname, $gmname, $glname, $gaddress, $gcontactnum, $geadd, $gcivilstatus, $gsourceofincome){
		$this->db->query("UPDATE GUARDIAN SET GUARDIANID = '$guardianid', FIRSTNAME = '$gfname', MIDDLENAME = '$gmname', LASTNAME = '$glname',  ADDRESS = '$gaddress', CONTACTNUMBER = '$gcontactnum', EMAILADDRESS = '$geadd', CIVILSTATUS = '$gcivilstatus', SOURCEOFINCOME = '$gsourceofincome'  where GUARDIANID = '$guardianid'");
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
	
	public function get_studentNumber($stnum)
	{
		return $this->db->query("select STUDENTNUMBER from DORMER where STUDENTNUMBER = '$stnum'")->result_array();
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
		return $this->db->query("select STUDENTNUMBER, FIRSTNAME, MIDDLENAME, LASTNAME from DORMER where (FIRSTNAME = '$name' OR MIDDLENAME='$name' OR LASTNAME='$name')")->result_array();
	}
	
	public function get_dormer_info($stnum)
	{
		return $this->db->query("select STUDENTNUMBER, FIRSTNAME, MIDDLENAME, LASTNAME from DORMER where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function get_guardianId($stnum)
	{
		return $this->db->query("select GUARDIANID from DORMER_GUARDIAN where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
	public function get_aAppGuardianId($stnum)
	{
		return $this->db->query("select GUARDIANID from AAPPLICANT_GUARDIAN where STUDENTNUMBER = '$stnum'")->result_array();
	}
	
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
}