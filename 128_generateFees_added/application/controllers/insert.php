<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();
	
class Insert extends CI_Controller{

	public function index()
	{
		$this->load->view("Index.php");
	}
	
	public function createPDF()
	{
		$this->load->view("create_PDF/r_search.php");
	}
	
	public function createTemplate()
	{
		$this->load->view("create_PDF/t_search.php");
	}
	
	public function viewSophomore()
	{
		$result= $this->Main_model->search_sophomore();
		$this->load->view('create_PDF/sophomore',array('data'=>$result));
	}
	
	public function viewJunior()
	{
		$result= $this->Main_model->search_junior();
		$this->load->view('create_PDF/junior',array('data'=>$result));
	}
	
	public function viewAll()
	{
		$result1= $this->Main_model->search_sophomore();
		$result2= $this->Main_model->search_junior();
		$result3= $this->Main_model->search_senior();
		$this->load->view('create_PDF/all',array('so'=>$result1,'jr'=>$result2,'sr'=>$result3));
	}
	
	public function viewBracket()
	{
		$result1= $this->Main_model->search_bracketA();
		$result2= $this->Main_model->search_bracketB();
		$result3= $this->Main_model->search_bracketC();
		$result4= $this->Main_model->search_bracketD();
		$result5= $this->Main_model->search_bracketE1();
		$result6= $this->Main_model->search_bracketE2();
		$this->load->view('create_PDF/bracket',array('a'=>$result1,'b'=>$result2,'c'=>$result3, 'de'=>$result4,'e1'=>$result5,'e2'=>$result6));
	}
	
	public function viewSenior()
	{
		$result= $this->Main_model->search_senior();
		$this->load->view('create_PDF/senior',array('data'=>$result));
	}
	
	public function viewGraduatingStudent()
	{
		$result= $this->Main_model->search_graduatingstudent();
		if($result != NULL){
			$this->load->view('create_PDF/graduatingdormers',array('data'=>$result));
		}
		else{
			echo "<script type='text/javascript'>alert('No Graduating Student.')</script>";
			$this->load->view("Reports/generateReport.php");
		}
	}
	
	public function viewCommonViolations()
	{
		$result= $this->Main_model->search_violations();
		if($result != NULL){
			$this->load->view('create_PDF/violations',array('data'=>$result));
		}
		else{
			echo "<script type='text/javascript'>alert('Violations Record empty.')</script>";
			$this->load->view("Reports/generateReport.php");
		}
	}
	
	public function goToAddDormer()
	{
		$this->load->view("add_dormer/chooseHowToAdd.php");
	}
	
	public function manualAddDormer()
	{
		$rooms = $this->Main_model->getAvailableRooms();
		
		if($rooms != NULL){
			$this->load->view('add_dormer/add_dormer',array('rooms'=>$rooms));
		}
		else{
			echo "<script type='text/javascript'>alert('There are no available room to occupy.')</script>";
			$this->load->view("Main.php");
		}
	}
	
	public function addDormerFromReservationList()
	{
	
		$result = $this->Main_model->applicant_viewer();
		
		if($result != NULL){
			$this->load->view('add_dormer/addDormerFromReservationList',array('data'=>$result));
		}
		else{
			echo "<script type='text/javascript'>alert('Reservation List Empty.')</script>";
			$this->load->view("add_dormer/chooseHowToAdd.php");
		}
	}
	
	public function confirmAddToDormers()
	{
	
		$stnum = $_POST['stnum'];
		
		$rooms = $this->Main_model->getAvailableRooms();
		
		if($rooms != NULL){
			$result = $this->Main_model->get_applicantInfo($stnum);
			$result2 = $this->Main_model->get_applicant_guardianId($stnum);
				foreach($result2 as $row){
					$guardianid = $row['GUARDIANID'];
				}
			$result2 = $this->Main_model->get_guardianinfo($guardianid);
			
			$this->load->view('add_dormer/confirmAddToDormers',array('data'=>$result, 'gdata'=>$result2, 'rooms'=>$rooms));
		}
		else{
			echo "<script type='text/javascript'>alert('There are no available room to occupy.')</script>";
			$this->load->view("add_dormer/chooseHowToAdd.php");
		}
	}
	
	public function goToGenerateReport()
	{
		$this->load->view("Reports/generateReport.php");
	}
	
	public function goToManageResident()
	{
		$this->load->view("manageResident.php");
	}
	
	public function goToSendReport()
	{
		$this->load->view("Reports/sendEmail.php");
	}
	
	public function sendReport()
	{
		$to = $_POST['to'];
		$this->load->view("Reports/email",array('data'=>$to));
	}
	
	public function checkLogin()
	{
		$adminname = $_POST['adminname'];
		$adminpwd = $_POST['adminpwd'];
		
		$checkadmin = $this->Main_model->check_admin();
		
		if($checkadmin != NULL){
			$result = $this->Main_model->search_admin($adminname, $adminpwd);
			if($result != NULL){
				$_SESSION['admin'] = 0;
				$this->load->view("Main.php");
			}
			else{
				$_SESSION['admin'] = 1;
				$this->load->view("Login.php");
			}
		}
		else{
			echo "<script type='text/javascript'>alert('Create an administrator account first.')</script>";
			$this->load->view("Login.php");
		}
	}
	
	public function goToLogin()
	{
		$this->load->view("Login.php");
	}
	
	public function goToMain()
	{
		$this->load->view("Main.php");
	}
	
	public function goToAddApplicant()
	{
		$this->load->view("add_applicant/add_applicant.php");
	}
	
	public function goToAddRoom()
	{
		$this->load->view("add_room/add_room.php");
	}
	
	public function goToAddEquipment()
	{
		$this->load->view("add_equipment/add_equipment.php");
	}
	
	//add violation
	public function goToAddViolation()
	{
		$this->load->view("add_violation/searchDormer.php");
	}
	
	public function violation_searchADormerByStudentNumber(){
		$this->load->view("add_violation/search_dormer_bystnum.php");
	}
	
	public function violation_searchADormerByName(){
		$this->load->view("add_violation/search_dormer_byname.php");
	}
	
	public function chooseDormersToAddViolation(){
	
		$name = $_POST['name'];
		
		$result = $this->Main_model->get_name($name);
		
		if($result != NULL){
			$this->load->view('add_violation/chooseDormersToAddViolation',array('data'=>$result));
		}
		else{
			echo "<script type='text/javascript'>alert('Record is not in the Dormers\' List.')</script>";
			$this->load->view("add_violation/searchDormer.php");
		}
	}
	
	public function violation_searchDormers() {
	
		$stnum = $_POST['stnum'];
		
		$result = $this->Main_model->search_dormer($stnum);
		if($result != NULL){
			$this->load->view('add_violation/add_violation',array('data'=>$result));
		}
		else{
			echo "<script type='text/javascript'>alert('Record is not in the Dormers\' List.')</script>";
			$this->load->view("add_violation/searchDormer.php");
		}
	}
	
	public function addviolation(){
		//$violationid  = $_POST['violationid'];
		$violation  = $_POST['violation'];
		$violationdate  = $_POST['vmonth'].'-'.$_POST['vday'].'-'.$_POST['vyear'];
		$remarks  = $_POST['remarks'];
		$stnum  = $_POST['stnum'];
		
		$violationid  = $stnum.'_'.$violation.'_'.$violationdate;
		
		$this->Main_model->add_violation_data($violationid, $violation, $violationdate, $remarks, $stnum);
		
		echo "<script type='text/javascript'>alert('Violation Record has been added.')</script>";
		$this->load->view("Main.php");
	}
	
	//end add violation
	
	public function goToAddPaymentRecord()
	{
		$this->load->view("add_paymentrecord/add_paymentrecord.php");
	}
	
	public function goToView()
	{
		$this->load->view("view/view.php");
	}
	
	public function goToSearch()
	{
		$this->load->view("search/search.php");
	}
	
	public function goToRemove()
	{
		$this->load->view("remove/remove.php");
	}
	
	public function goToEdit()
	{
		$this->load->view("edit/edit.php");
	}
	
	public function goToGenerateFee(){
		$this->load->view("manageDorm/generateFee/search_byname_or_bystnum.php");
	}
	
	public function goToManageDorm(){
		$this->load->view("manageDorm/manageDorm.php");
	}
	
	public function searchADormer()
	{
		$this->load->view("search/search_dormer.php");
	}
	
	public function searchARoom()
	{
		$this->load->view("search/search_room.php");
	}
	
	public function searchByStudentNumber()
	{
		$this->load->view("remove/remove_dormer_bystnum.php");
	}
	
	public function searchByName()
	{
		$this->load->view("remove/remove_dormer_byname.php");
	}
	
	public function editADormer()
	{
		$this->load->view("edit/searchtoedit_dormer.php");
	}
	
	public function edit_searchBySNum()
	{
		$this->load->view("edit/searchstnumtoedit_dormer.php");
	}
	
	public function edit_searchByName()
	{
		$this->load->view("edit/searchnametoedit_dormer.php");
	}
	
	public function removeARoom()
	{
		$this->load->view("remove/remove_room.php");
	}
	
	public function addapplicant()
	{
		$stnum = $_POST['stnum'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$bday = $_POST['brmonth'].'-'.$_POST['brday'].'-'.$_POST['bryear'];
		$age = $_POST['age'];
		$course = $_POST['course'];
		$college = $_POST['college'];
		$classification = $_POST['classification'];
		$etimeofgrad = $_POST['gradmonth'].'-01-'.$_POST['gradyear'];
		$civilstatus = $_POST['civilstatus'];
		$hadd = $_POST['hadd'];
		$contactnum = $_POST['contactnum'];
		$eadd = $_POST['eadd'];
		$scho = $_POST['scho'];
		$stfapbracket = $_POST['stfapbracket'];
		$monthlyall = $_POST['monthlyall'];
		$religion = $_POST['religion'];
		$numbro = $_POST['numbro'];
		$numsis = $_POST['numsis'];
		$birthorder = $_POST['birthorder'];
		$inrelationship = $_POST['inrelationship'];
		
		$guardianid = $lname.'_'.$stnum;
		$gfname = $_POST['gfname'];
		$gmname = $_POST['gmname'];
		$glname = $_POST['glname'];
		$gaddress = $_POST['ghadd'];
		$gcontactnum = $_POST['gcontactnum'];
		$geadd = $_POST['geadd'];
		$gcivilstatus = $_POST['gcivilstatus'];
		$gsourceofincome = $_POST['soincome'];
		
		$date=date('m-d-Y');
		
		$checkIfApplicant = $this->Main_model->get_appStudentNumber($stnum);
		$checkIfDormer = $this->Main_model->get_studentNumber($stnum);
		//$checkGuardian = $this->Main_model->get_aAppGuardianId($stnum);
		
		if($checkIfApplicant == NULL && $checkIfDormer == NULL){
			$this->Main_model->add_applicant($stnum, $fname, $mname, $lname, $bday, $age, $course, $college, $classification, $etimeofgrad, $civilstatus, $hadd, $contactnum, $eadd, $scho, $stfapbracket, $monthlyall, $religion, $numbro, $numsis, $birthorder, $inrelationship, $date);
			//if($checkGuardian == NULL)
			$this->Main_model->add_guardian($guardianid, $gfname, $gmname, $glname, $gaddress, $gcontactnum, $geadd, $gcivilstatus, $gsourceofincome);
			$this->Main_model->add_applicant_guardian($stnum,$guardianid);
			echo "<script type='text/javascript'>alert('New Applicant added in the Reservation List.')</script>";
			$this->load->view("Main.php");
		}
		else{
			if($checkIfApplicant != NULL)
				echo "<script type='text/javascript'>alert('Applicant is already in the Reservation List.')</script>";
			if($checkIfDormer != NULL)
				echo "<script type='text/javascript'>alert('Applicant is already in the Dormers\' List.')</script>";
			$this->load->view("add_applicant/add_applicant.php");
		}
		
	}
	
	public function adddormer()
	{
		$stnum = $_POST['stnum'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$bday = $_POST['brmonth'].'-'.$_POST['brday'].'-'.$_POST['bryear'];
		$age = $_POST['age'];
		$course = $_POST['course'];
		$college = $_POST['college'];
		$classification = $_POST['classification'];
		$etimeofgrad = $_POST['gradmonth'].'-01-'.$_POST['gradyear'];
		$civilstatus = $_POST['civilstatus'];
		$hadd = $_POST['hadd'];
		$contactnum = $_POST['contactnum'];
		$eadd = $_POST['eadd'];
		$scho = $_POST['scho'];
		$stfapbracket = $_POST['stfapbracket'];
		$monthlyall = $_POST['monthlyall'];
		$religion = $_POST['religion'];
		$numbro = $_POST['numbro'];
		$numsis = $_POST['numsis'];
		$birthorder = $_POST['birthorder'];
		$inrelationship = $_POST['inrelationship'];
		$roomnum = $_POST['roomnum'];
		$statusofresidency = "Warning";
		
		$guardianid = $lname.'_'.$stnum;
		$gfname = $_POST['gfname'];
		$gmname = $_POST['gmname'];
		$glname = $_POST['glname'];
		$gaddress = $_POST['ghadd'];
		$gcontactnum = $_POST['gcontactnum'];
		$geadd = $_POST['geadd'];
		$gcivilstatus = $_POST['gcivilstatus'];
		$gsourceofincome = $_POST['soincome'];
		
		$paymentrecordid = $lname.'_'.$stnum;
		
		$date=date('m-d-Y');
		
		$checkIfApplicant = $this->Main_model->get_appStudentNumber($stnum);
		$checkIfDormer = $this->Main_model->get_studentNumber($stnum);
		$checkGuardian = $this->Main_model->get_guardianinfo($guardianid);
		
		if($checkIfApplicant == NULL && $checkIfDormer == NULL){
			$this->Main_model->add_dormer($stnum, $fname, $mname, $lname, $bday, $age, $course, $college, $classification, $etimeofgrad, $civilstatus, $hadd, $contactnum, $eadd, $scho, $stfapbracket, $monthlyall, $religion, $numbro, $numsis, $birthorder, $inrelationship, $statusofresidency, $roomnum, $date);
			
			if($checkGuardian == NULL)
				$this->Main_model->add_guardian($guardianid, $gfname, $gmname, $glname, $gaddress, $gcontactnum, $geadd, $gcivilstatus, $gsourceofincome);
			
			$this->Main_model->add_dormer_guardian($stnum,$guardianid);
			$this->Main_model->add_paymentrecord($paymentrecordid,0);
			$this->Main_model->add_dormer_paymentrecord($stnum,$paymentrecordid);
			$this->Main_model->update_roomvacancy($roomnum);
			echo "<script type='text/javascript'>alert('A new Dormer is added in the Dormers\' List.')</script>";
			$this->load->view("Main.php");
		}
		else{
			if($checkIfApplicant != NULL)
				echo "<script type='text/javascript'>alert('Record is in the Reservation List.')</script>";
			if($checkIfDormer != NULL)
				echo "<script type='text/javascript'>alert('Record is already in the Dormers\' List.')</script>";
			$this->load->view("add_dormer/chooseHowToAdd.php");
		}
		
	}
	
	public function addApplicantasDormer()
	{
		$stnum = $_POST['stnum'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$bday = $_POST['brmonth'].'-'.$_POST['brday'].'-'.$_POST['bryear'];
		$age = $_POST['age'];
		$course = $_POST['course'];
		$college = $_POST['college'];
		$classification = $_POST['classification'];
		$etimeofgrad = $_POST['gradmonth'].'-01-'.$_POST['gradyear'];
		$civilstatus = $_POST['civilstatus'];
		$hadd = $_POST['hadd'];
		$contactnum = $_POST['contactnum'];
		$eadd = $_POST['eadd'];
		$scho = $_POST['scho'];
		$stfapbracket = $_POST['stfapbracket'];
		$monthlyall = $_POST['monthlyall'];
		$religion = $_POST['religion'];
		$numbro = $_POST['numbro'];
		$numsis = $_POST['numsis'];
		$birthorder = $_POST['birthorder'];
		$inrelationship = $_POST['inrelationship'];
		$roomnum = $_POST['roomnum'];
		$statusofresidency = "Warning";
		
		$guardianid = $lname.'_'.$stnum;
		$gfname = $_POST['gfname'];
		$gmname = $_POST['gmname'];
		$glname = $_POST['glname'];
		$gaddress = $_POST['ghadd'];
		$gcontactnum = $_POST['gcontactnum'];
		$geadd = $_POST['geadd'];
		$gcivilstatus = $_POST['gcivilstatus'];
		$gsourceofincome = $_POST['soincome'];
		
		$paymentrecordid = $lname.'_'.$stnum;
		$date=date('m-d-Y');
		$result=$this->Main_model->get_reservationdate($stnum);
		
			foreach($result as $row){
				$rdate = $row['DATERESERVED'];
			}
		
			$_rmonth = substr($rdate,0,2);
			$_rday = substr($rdate,3,2);
			$_ryear = substr($rdate,6,4);
			$_rdate = $_rmonth.'-'.$_rday.'-'.$_ryear;
		
		$this->Main_model->add_dormer($stnum, $fname, $mname, $lname, $bday, $age, $course, $college, $classification, $etimeofgrad, $civilstatus, $hadd, $contactnum, $eadd, $scho, $stfapbracket, $monthlyall, $religion, $numbro, $numsis, $birthorder, $inrelationship, $statusofresidency, $roomnum, $date);
		
		$this->Main_model->update_guardian($guardianid, $gfname, $gmname, $glname, $gaddress, $gcontactnum, $geadd, $gcivilstatus, $gsourceofincome);
		$this->Main_model->add_dormer_guardian($stnum,$guardianid);
		$this->Main_model->add_paymentrecord($paymentrecordid,0);
		$this->Main_model->add_dormer_paymentrecord($stnum,$paymentrecordid);
		
		//$this->Main_model->add_acceptedApplicant($stnum, $fname, $mname, $lname, $bday, $age, $course, $college, $classification, $etimeofgrad, $civilstatus, $hadd, $contactnum, $eadd, $scho, $stfapbracket, $monthlyall, $religion, $numbro, $numsis, $birthorder, $inrelationship, $_rdate, $date);
		//$this->Main_model->add_aapplicant_guardian($stnum,$guardianid);
		
		$result = $this->Main_model->remove_applicant_guardian($stnum);
		$result = $this->Main_model->remove_applicant($stnum);
		$this->Main_model->update_roomvacancy($roomnum);
		echo "<script type='text/javascript'>alert('A new Dormer is added in the Dormers\' List.')</script>";
		
		$this->load->view("Main.php");
		
	}
	
	public function addroom(){
		$roomnum = $_POST['roomnum'];
		$capacity = $_POST['capacity'];
		$vacancy = $_POST['vacancy'];
		
		if($capacity >= $vacancy){
			$checkroom = $this->Main_model->check_room($roomnum);
			
			if($checkroom == NULL){
				$this->Main_model->add_room($roomnum, $capacity, $vacancy);
				echo "<script type='text/javascript'>alert('New room has been added.')</script>";
				$this->load->view("Main.php");
			}
			else{
				echo "<script type='text/javascript'>alert('Room already exists.')</script>";
				$this->load->view("add_room/add_room.php");
			}
		}
		else{
			echo "<script type='text/javascript'>alert('Vacancy > Capacity Not Allowed.')</script>";
			$this->load->view("add_room/add_room.php");
		}
	}
	
	public function addequipment(){
		$control_number = $_POST['cnum'];
		$equip_name = $_POST['eqname'];
		$date_borrowed = $_POST['bormonth'].'-'.$_POST['borday'].'-'.$_POST['boryear'];
		$date_returned = $_POST['retmonth'].'-'.$_POST['retday'].'-'.$_POST['retyear'];
		$condb = $_POST['condb'];
		$condr= $_POST['condr'];
		
		$this->Main_model->add_equipment($control_number, $equip_name, $date_borrowed, $date_returned, $condb, $condr);
		
		$this->load->view("add_equipment/add_equipment.php");
	}
	
	public function addpaymentrecord(){
		$paymentrecordid = $_POST['prid'];
		$totalliabilities = '1000';
		
		$this->Main_model->add_paymentrecord($paymentrecordid, $totalliabilities);
		$this->load->view("manageResident.php");
	}
	
	public function addstatementofaccount(){
		$soaid  = $_POST['soaid'];
		$month = $_POST['month'];
		$total = '10000';
		$paymentrecordid = $_POST['prid'];
		
		$this->Main_model->add_statementofaccount($soaid, $month, $total, $paymentrecordid);
		$this->load->view("add_paymentrecord/add_statementofaccount.php");
	}
	
	//search
	public function searchRooms() {
	
		$room = $_POST['room'];
		
		$result = $this->Main_model->search_room($room);
		if($result != NULL){
			$this->load->view('view/view_room',array('data'=>$result));
		}
		else{
			echo "<script type='text/javascript'>alert('Room does not exist.')</script>";
			$this->load->view("search/search_room.php");
		}
	}
	
	public function searchDormers() {
	
		$stnum = $_POST['stnum'];
		
		$result = $this->Main_model->search_dormer($stnum);
		if($result != NULL){
			$this->load->view('view/view_Adormer',array('data'=>$result));
		}
		else{
			echo "<script type='text/javascript'>alert('Record is not in the Dormers\' List.')</script>";
			$this->load->view("search/search_dormer.php");
		}
	}
	
	public function searchADormerByStudentNumber(){
		$this->load->view("search/search_dormer_bystnum.php");
	}
	
	public function searchADormerByName(){
		$this->load->view("search/search_dormer_byname.php");
	}
	
	public function chooseDormersToView(){
	
		$name = $_POST['name'];
		
		$result = $this->Main_model->get_name($name);
		
		if($result != NULL){
			$this->load->view('search/chooseDormersToView',array('data'=>$result));
		}
		else{
			echo "<script type='text/javascript'>alert('Record is not in the Dormers\' List.')</script>";
			$this->load->view("search/search_dormer_byname.php");
		}
	}
	
	//remove
	public function removeDormers() {
		$flag = 0;
		$flag2 = 0;
		
		$stnum = $_POST['stnum'];
		
		$result = $this->Main_model->get_studentNumber($stnum);
		if($result != NULL){
			$result = $this->Main_model->get_roomnum($stnum);
			foreach($result as $row){
				$roomnum = $row['ROOMNUMBER'];
			}
			//$checkGuardian = $this->Main_model->get_aAppGuardianId($stnum);
			$result = $this->Main_model->get_guardianId($stnum);
				foreach($result as $row){
					$guardianid = $row['GUARDIANID'];
				}
			
			$result = $this->Main_model->get_paymentRecordId($stnum);
			if($result != NULL){
				foreach($result as $row){
					$recordid = $row['PAYMENTRECORDID'];
				}
				$flag = 1;
				
				$result = $this->Main_model->get_SOAId($recordid);
				if($result != NULL){
					foreach($result as $row){
						$soaid = $row['SOAID'];
					}
					$flag2 = 1;
				}
			}
			$result = $this->Main_model->remove_dormer_guardian($stnum);
			//if($checkGuardian == NULL)
			$result = $this->Main_model->remove_guardian($guardianid);
			$result = $this->Main_model->remove_affiliation($stnum);
			$result = $this->Main_model->remove_ailment($stnum);
			$result = $this->Main_model->remove_medication($stnum);
			$result = $this->Main_model->remove_equipment($stnum);
			$result = $this->Main_model->remove_violation($stnum);
			if($flag2 == 1){
				$result = $this->Main_model->remove_residencefee($soaid);
				$result = $this->Main_model->remove_appliancefee($soaid);
				$result = $this->Main_model->remove_transientfee($soaid);
				$result = $this->Main_model->remove_reservationfee($soaid);
				$result = $this->Main_model->remove_key_deposit_fee($soaid);
				$result = $this->Main_model->remove_closed_locker_fee($soaid);
			}
			if($flag == 1){
				$result = $this->Main_model->remove_statementofaccount($recordid);
				$result = $this->Main_model->remove_paidfee($recordid);
				$result = $this->Main_model->remove_unpaidfee($recordid);
				$result = $this->Main_model->remove_dormer_paymentrecord($stnum);
				$result = $this->Main_model->remove_paymentrecord($recordid);
			}
			$result = $this->Main_model->remove_dormer($stnum);
			$result = $this->Main_model->dormer_viewer();
			$this->Main_model->update_roomvacancy_add($roomnum);
			echo "<script type='text/javascript'>alert('Dormer is removed from the Dormers\' List.')</script>";
			$this->load->view('view/view_dormer',array('data'=>$result));
		}
		else{
			echo "<script type='text/javascript'>alert('Record is not in the Dormers\' List.')</script>";
			$this->load->view("search/search_byname_or_bystnum.php");
		}
	}
	
	public function confirmRemoveDormers() {
		
		$stnum = $_POST['stnum'];
		
		$result = $this->Main_model->get_dormer_info($stnum);
		
		if($result != NULL){
			$this->load->view('remove/confirmRemove',array('data'=>$result));
		}
		else{
			echo "<script type='text/javascript'>alert('Record is not in the Dormers\' List.')</script>";
			$this->load->view("search/search_byname_or_bystnum.php");
		}
	}
	
	public function chooseDormersToRemove(){
	
		$name = $_POST['name'];
		
		$result = $this->Main_model->get_name($name);
		
		if($result != NULL){
			$this->load->view('remove/chooseDormersToRemove',array('data'=>$result));
		}
		else{
			echo "<script type='text/javascript'>alert('Record is not in the Dormers\' List.')</script>";
			$this->load->view("remove/remove_dormer_byname.php");
		}
	}
	
	public function removeADormer()
	{
		$this->load->view("search/search_byname_or_bystnum.php");
	}
	
	public function removeRooms() {
	
		$roomnum = $_POST['roomnum'];
		
		$result = $this->Main_model->remove_room($roomnum);
		$result = $this->Main_model->room_viewer();
		$this->load->view('view/view_room',array('data'=>$result));
	}
	
	//edit
	
	public function editDormers() {
	
		$stnum = $_POST['stnum'];
		
		$result = $this->Main_model->search_dormer($stnum);
		$rooms = $this->Main_model->getRooms();
		
		if($result != NULL){
			$parent_data = array('data' => $result, 'rooms' => $rooms);
			$this->load->view('edit/edit_dormer',$parent_data);
			//$this->load->view('edit/edit_dormer',array('data'=>$result, 'rooms'));
		}
		else{
			echo "<script type='text/javascript'>alert('Record is not in the Dormers\' List.')</script>";
			$this->load->view("edit/searchtoedit_dormer.php");
		}
	}
	
	public function editdormer()
	{
		$stnum = $_POST['stnum'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$bday = $_POST['brmonth'].'-'.$_POST['brday'].'-'.$_POST['bryear'];
		$age = $_POST['age'];
		$course = $_POST['course'];
		$college = $_POST['college'];
		$classification = $_POST['classification'];
		$etimeofgrad = $_POST['gradmonth'].'-01-'.$_POST['gradyear'];
		$civilstatus = $_POST['civilstatus'];
		$hadd = $_POST['hadd'];
		$contactnum = $_POST['contactnum'];
		$eadd = $_POST['eadd'];
		$scho = $_POST['scho'];
		$stfapbracket = $_POST['stfapbracket'];
		$monthlyall = $_POST['monthlyall'];
		$religion = $_POST['religion'];
		$numbro = $_POST['numbro'];
		$numsis = $_POST['numsis'];
		$birthorder = $_POST['birthorder'];
		$inrelationship = $_POST['inrelationship'];
		$roomnum = $_POST['roomnum'];
		$statusofresidency = "Warning";
		/*
		$guardianid = $lname.'_'.$stnum;
		$gfname = $_POST['gfname'];
		$gmname = $_POST['gmname'];
		$glname = $_POST['glname'];
		$gaddress = $_POST['ghadd'];
		$gcontactnum = $_POST['gcontactnum'];
		$geadd = $_POST['geadd'];
		$gcivilstatus = $_POST['gcivilstatus'];
		$gsourceofincome = $_POST['soincome'];
		
		$paymentrecordid = $lname.'_'.$stnum;
		*/
		$this->Main_model->edit_dormer($stnum, $fname, $mname, $lname, $bday, $age, $course, $college, $classification, $etimeofgrad, $civilstatus, $hadd, $contactnum, $eadd, $scho, $stfapbracket, $monthlyall, $religion, $numbro, $numsis, $birthorder, $inrelationship, $statusofresidency, $roomnum);
		//$this->Main_model->edit_guardian($guardianid, $stnum,  $gfname, $gmname, $glname, $gaddress, $gcontactnum, $geadd, $gcivilstatus, $gsourceofincome);
		//$this->Main_model->edit_paymentrecord($paymentrecordid,0);
		//$this->Main_model->edit_dormer_paymentrecord($stnum,$paymentrecordid);
		echo "<script type='text/javascript'>alert('Record successfully updated.')</script>";
		$this->load->view("Main.php");
		
	}
	
	public function chooseDormersToEdit(){
	
		$name = $_POST['name'];
		
		$result = $this->Main_model->get_name($name);
		
		if($result != NULL){
			$this->load->view('edit/chooseDormersToEdit',array('data'=>$result));
		}
		else{
			echo "<script type='text/javascript'>alert('Record is not in the Dormers\' List.')</script>";
			$this->load->view("edit/searchnametoedit_dormer.php");
		}
	}
	
	//views
	
	public function viewRooms() {
		$result = $this->Main_model->room_viewer();
		$this->load->view('view/view_room',array('data'=>$result));
	}
	
	public function viewDormers() {	
		$result = $this->Main_model->dormer_viewer();
		$this->load->view('view/view_dormer',array('data'=>$result));
	}
	
	public function viewApplicants() {	
		$result = $this->Main_model->applicant_viewer();
		$this->load->view('view/view_applicant',array('data'=>$result));
	}
	
	public function viewEquipments() {	
		$result = $this->Main_model->equipment_viewer();
		$this->load->view('view/view_equipment',array('data'=>$result));
	}
	
	public function viewGuardians() {	
		$result = $this->Main_model->guardian_viewer();
		$this->load->view('view/view_guardian',array('data'=>$result));
	}
	
	public function viewPaymentRecords() {	
		$result = $this->Main_model->paymentrecord_viewer();
		$this->load->view('view/view_paymentrecord',array('data'=>$result));
	}
	
	public function viewVacantRooms() {	
		$result = $this->Main_model->vacantroom_viewer();
		$this->load->view('view/view_vacantroom',array('data'=>$result));
	}

	//view violation data
	public function viewViolationData() {
		$this->load->view("view/view_violation/search_byname_or_bystnum.php");
		//$result = $this->Main_model->violationdata_viewer();
		//$this->load->view('view/view_violationdata',array('data'=>$result));
	}
	
	public function violation_searchByStudentNumber(){
		$this->load->view("view/view_violation/search_dormer_bystnum.php");
	}
	
	public function violation_searchByName(){
		$this->load->view("view/view_violation/search_dormer_byname.php");
	}
	
	public function chooseDormersToViewViolation(){
		$name = $_POST['name'];
		
		$result = $this->Main_model->get_name($name);
		
		if($result != NULL){
			$this->load->view('view/view_violation/chooseDormersToViewViolation',array('data'=>$result));
		}
		else{
			echo "<script type='text/javascript'>alert('Record is not in the Dormers\' List.')</script>";
			$this->load->view("view/view_violation/search_dormer_byname.php");
		}
	}
	
	public function viewViolation(){
	
		$stnum = $_POST['stnum'];
		
		$name = $this->Main_model->get_dormer_info($stnum);
		$result = $this->Main_model->violationdata_viewer($stnum);
		
		if($name != NULL){
			if($result != NULL){
				$this->load->view('view/view_violation/view_violationdata',array('name'=>$name,'data'=>$result));
			}
			else{
				echo "<script type='text/javascript'>alert('Dormer has no recorded violation.')</script>";
				$this->load->view("view/view_violation/search_byname_or_bystnum.php");
			}
		}
		else{
			echo "<script type='text/javascript'>alert('Record is not in the Dormers\' List.')</script>";
			$this->load->view("view/view_violation/search_byname_or_bystnum.php");
		}
	}
	
	//end view violation data
	
	public function t_searchDormers() {
	
		$stnum = $_POST['stnum'];
		
		$result = $this->Main_model->search_dormer($stnum);
		if($result != NULL){
			$result2 = $this->Main_model->get_guardianId($stnum);
			foreach($result2 as $row){
				$guardianid = $row['GUARDIANID'];
			}
			$result2 = $this->Main_model->get_guardianinfo($guardianid);
			$this->load->view('create_PDF/dormerPDF',array('data'=>$result, 'guardian'=>$result2));
		}
		else{
			$this->load->view("create_PDF/t_search.php");
		}
	}
	
	
	public function r_searchDormers() {
	
		$stnum = $_POST['stnum'];
		
		$result = $this->Main_model->search_dormer($stnum);
		if($result != NULL){
			$this->load->view('create_PDF/r_dormerPDF',array('data'=>$result));
		}
		else{
			$this->load->view("create_PDF/r_search.php");
		}
	}
	
	public function t_searchADormerByStudentNumber(){
		$this->load->view("create_PDF/t_search_dormer_bystnum.php");
	}
	
	public function t_searchADormerByName(){
		$this->load->view("create_PDF/t_search_dormer_byname.php");
	}
	
	public function r_searchADormerByStudentNumber(){
		$this->load->view("create_PDF/r_search_dormer_bystnum.php");
	}
	
	public function r_searchADormerByName(){
		$this->load->view("create_PDF/r_search_dormer_byname.php");
	}
	
	public function t_chooseDormersToView(){
	
		$name = $_POST['name'];
		
		$result = $this->Main_model->get_name($name);
		
		if($result != NULL){
			$this->load->view('create_PDF/t_chooseDormersToView',array('data'=>$result));
		}
		else
			$this->load->view("create_PDF/t_search_dormer_byname.php");
	}
	
	public function r_chooseDormersToView(){
	
		$name = $_POST['name'];
		
		$result = $this->Main_model->get_name($name);
		
		if($result != NULL){
			$this->load->view('create_PDF/r_chooseDormersToView',array('data'=>$result));
		}
		else
			$this->load->view("create_PDF/t_search_dormer_byname.php");
	}
	
	//Generate Fee
	
	public function gfee_searchByStudentNumber(){
		$this->load->view("manageDorm/generateFee/search_dormer_bystnum.php");
	}
	
	public function gfee_searchByName(){
		$this->load->view("manageDorm/generateFee/search_dormer_byname.php");
	}
	
	public function chooseDormersToGenerateFee(){
	
		$name = $_POST['name'];
		
		$result = $this->Main_model->get_name($name);
		
		if($result != NULL){
			$this->load->view('manageDorm/generateFee/chooseDormersToGenerateFee',array('data'=>$result));
		}
		else{
			echo "<script type='text/javascript'>alert('Record is not in the Dormers\' List.')</script>";
			$this->load->view("manageDorm/generateFee/search_dormer_byname.php");
		}
	}
	
	public function generateFee(){
		$stnum = $_POST['stnum'];
		
		$checkstnum = $this->Main_model->get_studentNumber($stnum);
		
		if($checkstnum != NULL){
			$result = $this->Main_model->get_paymentRecordId($stnum);
				foreach($result as $row){
					$paymentrecordid = $row['PAYMENTRECORDID'];
				}
			$result = $this->Main_model->get_sffapBracket($stnum);
				foreach($result as $row){
					$stfapbracket = $row['STFAPBRACKET'];
				}
				
			/*$result = $this->Main_model->get_dateAccepted($stnum);
				foreach($result as $row){
					$dateaccepted = $row['DATEACCEPTED'];
				}
			$result = $this->Main_model->get_SOAId($paymentrecordid);
				foreach($result as $row){
					$soaid = $row['SOAID'];
				}*/
			$month = date('m');
			$year = date('Y');
			$soaid = $paymentrecordid.'_'.$month.'_'.$year;
			$checkSOA = $this->Main_model->check_statementofaccount($soaid);
			if($checkSOA == NULL){
				$this->Main_model->add_statementofaccount($soaid, $month, 0, $paymentrecordid);
				
				$result = $this->Main_model->get_residencefee($stfapbracket);
					foreach($result as $row){
						$residencefee = $row['RESIDENCEFEE'];
					}
				$resifeeid = $soaid.'_resifee';
				$this->Main_model->add_soa_resifee($resifeeid, $residencefee, $soaid);
				
				$appliancelist = $this->Main_model->get_appliancelist($stnum);
				if($appliancelist != NULL){
					foreach($appliancelist as $row){
						$appliance = $row['APPLIANCE'];
						
						$result = $this->Main_model->get_appliancefee($appliance);
						foreach($result as $row){
							$appliancefee = $row['APPLIANCEFEE'];
						}
						$this->Main_model->add_soa_appfee($appliance, $appliancefee, $soaid);
					}
				}
				
				$data = $this->Main_model->get_dormer_info($stnum);
				$soainfo = $this->Main_model->get_SOAinfo($soaid);
				$residencefee = $this->Main_model->get_soa_residencefee($soaid);
				$appliancefee = $this->Main_model->get_soa_appliancefee($soaid);
				$transientfee = $this->Main_model->get_soa_transientfee($soaid);
				$reservationfee = $this->Main_model->get_soa_reservationfee($soaid);
				$key_deposit = $this->Main_model->get_soa_key_deposit($soaid);
				$closed_locker = $this->Main_model->get_soa_closed_locker($soaid);
				
				$this->load->view('manageDorm/generateFee/viewStatementOfAccount',array('data'=>$data, 'soainfo'=>$soainfo,'residencefee'=>$residencefee,'appliancefee'=>$appliancefee,'transientfee'=>$transientfee,'reservationfee'=>$reservationfee,'key_deposit'=>$key_deposit,'closed_locker'=>$closed_locker));
			}
			else{
				$data = $this->Main_model->get_dormer_info($stnum);
				$soainfo = $this->Main_model->get_SOAinfo($soaid);
				$residencefee = $this->Main_model->get_soa_residencefee($soaid);
				$appliancefee = $this->Main_model->get_soa_appliancefee($soaid);
				$transientfee = $this->Main_model->get_soa_transientfee($soaid);
				$reservationfee = $this->Main_model->get_soa_reservationfee($soaid);
				$key_deposit = $this->Main_model->get_soa_key_deposit($soaid);
				$closed_locker = $this->Main_model->get_soa_closed_locker($soaid);
				$this->load->view('manageDorm/generateFee/viewStatementOfAccount',array('data'=>$data,'soainfo'=>$soainfo,'residencefee'=>$residencefee,'appliancefee'=>$appliancefee,'transientfee'=>$transientfee,'reservationfee'=>$reservationfee,'key_deposit'=>$key_deposit,'closed_locker'=>$closed_locker));
			}
		}
		else
		{
			echo "<script type='text/javascript'>alert('Record is not in the Dormers\' List.')</script>";
			$this->load->view("manageDorm/generateFee/search_byname_or_bystnum.php");
		}
		//$previousDatePaid = $this->Main_model->checkIfHasPaidBefore($paymentrecordid);
		//if($previousDatePaid != NULL){
			/*$result = $this->Main_model->get_periodcovered($previousDatePaid);
			foreach($result as $row){
				$periodcovered = $row['ROUND(MONTHS_BETWEEN(SYSDATE,$DATE))'];
			}*/
		//	$this->Main_model->add_soa_resifee($resifeeid, $previousDatePaid, $residencefee, $soaid);
		//	$this->Main_model->add_soa_appfee($appfeeid, $previousDatePaid, $residencefee, $soaid);
		//}
		//else{
			
			/*$result = $this->Main_model->get_dateAccepted($stnum);
			foreach($result as $row){
				$dateaccepted = $row['DATEACCEPTED'];
			}
			$result = $this->Main_model->get_periodcovered($dateaccepted);
			foreach($result as $row){
				$periodcovered = $row['ROUND(MONTHS_BETWEEN(SYSDATE,$DATE))'];
			}*/
		//	$this->Main_model->add_soa_resifee($resifeeid, $dateaccepted, $residencefee, $soaid);
		//	$this->Main_model->add_soa_appfee($appfeeid, $dateaccepted, $residencefee, $soaid);
		//}
		//$periodcovered = MONTHS_BETWEEN($dateaccepted,SYSDATE)<=1?1:MONTHS_BETWEEN($dateaccepted,SYSDATE);
		
		
	}
	
	public function markAsPaid(){
		$stnum = $_POST['stnum'];
		$month = $_POST['month'];
		$residencefee = $_POST['residencefee'];
		$appliancefee = $_POST['afee'];
		$transientfee = $_POST['tfee'];
		$reservationfee = $_POST['rfee'];
		$key_deposit = $_POST['kdeposit'];
		$closed_locker = $_POST['locker'];
		$result = $this->Main_model->get_paymentRecordId($stnum);
			foreach($result as $row){
				$paymentrecordid = $row['PAYMENTRECORDID'];
			}
		$result = $this->Main_model->get_SOAId($paymentrecordid);
			foreach($result as $row){
				$soaid = $row['SOAID'];
			}
		$date = date('m-d-Y');
		$maccount = $residencefee+$appliancefee+$transientfee+$reservationfee+$key_deposit+$closed_locker;
		$pfid = $soaid;
		
		$this->Main_model->add_pr_paidfee($pfid, $date, $month, $maccount, $paymentrecordid);
		
			$result = $this->Main_model->remove_residencefee($soaid);
			$result = $this->Main_model->remove_appliancefee($soaid);
			$result = $this->Main_model->remove_transientfee($soaid);
			$result = $this->Main_model->remove_reservationfee($soaid);
			$result = $this->Main_model->remove_key_deposit_fee($soaid);
			$result = $this->Main_model->remove_closed_locker_fee($soaid);
			$result = $this->Main_model->remove_thisStatementofaccount($soaid);
			$result = $this->Main_model->remove_thisUnpaidfee($soaid);
		
		echo "<script type='text/javascript'>alert('Marked as PAID.')</script>";
		$this->load->view("Main.php");
	}
}
?>