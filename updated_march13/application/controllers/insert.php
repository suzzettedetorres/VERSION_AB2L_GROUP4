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
			$this->Main_model->notify_failed('No graduating student on the list.');
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
			$this->Main_model->notify_failed('Violations Record empty.');
			$this->load->view("Reports/generateReport.php");
		}
	}
	
	public function viewAccumulatedFees(){
		$month = $_POST['month'];
		$year = $_POST['year'];
		
		$result= $this->Main_model->search_paidfees_formonth($month, $year);
		$result2 = $this->Main_model->get_alldormerPR();
		$result3 = $this->Main_model->get_alldormerinfo();
		$this->load->view('manageDorm/accumulatedFees/accumulatedfees',array('data'=>$result,'dormerpr'=>$result2,'dormerinfo'=>$result3));
	}
	
	public function goToviewAccumulatedFees(){
		$this->load->view("manageDorm/accumulatedFees/choose_month_year.php");
	}
	
	public function goToAddDormer()
	{
		$this->load->view("add_dormer/chooseHowToAdd.php");
	}
	
	public function goToManageDormitoryFees(){
		$this->load->view("manageDorm/manageDormitoryFees/manageDormitoryFees.php");
	}
	
	public function goToupdate_STFAPBracketFees(){
		$brackets = $this->Main_model->bracketfee_viewer();
		$this->load->view('manageDorm/manageDormitoryFees/updateSTFAPBracketFees',array('brackets'=>$brackets));
	}
	
	public function goTomanage_AppliancesFees(){
		$this->load->view('manageDorm/manageDormitoryFees/manageApplianceFees.php');
	}
	
	public function goToadd_AppliancesFees(){
		$this->load->view('manageDorm/manageDormitoryFees/addApplianceFees.php');
	}
	
	public function goToupdate_AppliancesFees(){
		$appliancesfees = $this->Main_model->appliancefee_viewer();
		if($appliancesfees != NULL){
			$this->load->view('manageDorm/manageDormitoryFees/updateApplianceFees',array('appliancesfees'=>$appliancesfees));
		}
		else{
			$this->Main_model->notify_failed('No appliance on list.');
		}
		$this->load->view('manageDorm/manageDormitoryFees/manageApplianceFees.php');
	}
	
	public function goToremove_AppliancesFees(){
		$appliancesfees = $this->Main_model->appliancefee_viewer();
		if($appliancesfees != NULL){
			$this->load->view('manageDorm/manageDormitoryFees/chooseApplianceToRemove',array('appliancesfees'=>$appliancesfees));
		}
		else{
			$this->Main_model->notify_failed('Appliance list empty.');
		}
		$this->load->view('manageDorm/manageDormitoryFees/manageApplianceFees.php');
	}
	
	public function removeAppliance(){
		$appliance = $_POST['appliance'];
		$result = $this->Main_model->remove_thisappliancefee($appliance);
		$this->Main_model->notify_successful('An appliance record has been removed.');
		$this->load->view('manageDorm/manageDormitoryFees/manageApplianceFees.php');
	}
	
	public function update_STFAPBracketFees(){
		$brackets = $this->Main_model->bracketfee_viewer();
		foreach($brackets as $b){
			$bracketfee = 'bracketFee'.$b['BRACKET'];
			$this->Main_model->update_bracketfee($b['BRACKET'],$_POST[$bracketfee]);
		}
		$this->Main_model->notify_successful('Residence Fees updated.');
		$this->load->view('manageDorm/manageDormitoryFees/manageDormitoryFees.php');
	}
	
	public function update_AppliancesFees(){
		$appliancesfees = $this->Main_model->appliancefee_viewer();
		if($appliancesfees != NULL){
			foreach($appliancesfees as $a){
				$this_appliance = str_replace(" ", "_", $a['APPLIANCE']);
				$appliancefee = 'appliancefees'.$this_appliance;
				$this->Main_model->update_appliancefee($a['APPLIANCE'],$_POST[$appliancefee]);
			}
			$this->Main_model->notify_successful('Appliance Fees Updated.');
		}
		else{
			$this->Main_model->notify_failed('Appliance list empty.');
		}
		$this->load->view('manageDorm/manageDormitoryFees/manageApplianceFees.php');
	}
	
	public function addappliancewithfee(){
		$appliance = $_POST['appliance'];
		$appliancefee = $_POST['appliancefee'];
		$checkappliance = $this->Main_model->get_appliancefee($appliance);
		if($checkappliance == NULL){
			$this->Main_model->addappliancewithfee($appliance,$appliancefee);
			$this->Main_model->notify_successful('An appliance has been added in the list.');
		}
		else{
			$this->Main_model->notify_failed('Appliance record already exists.');
		}
		$this->load->view('manageDorm/manageDormitoryFees/manageApplianceFees.php');
	}
	
	public function manualAddDormer()
	{
		$rooms = $this->Main_model->getAvailableRooms();
		
		if($rooms != NULL){
			$this->load->view('add_dormer/add_dormer',array('rooms'=>$rooms));
		}
		else{
			$this->Main_model->notify_failed('No available room to occupy.');
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
			$this->Main_model->notify_failed('Reservation List Empty.');
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
			$this->Main_model->notify_failed('No available room to occupy.');
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
	
	//send report
	public function goToSendReport()
	{
		$this->load->view("Reports/sendReport/selectReportToSend.php");
		//$this->load->view("Reports/sendReport/search_byname_or_bystnum.php");
		//$this->load->view("Reports/sendEmail.php");
	}
	
	public function sendvio_searchByStudentNumber()
	{
		$this->load->view("Reports/sendReport/sendViolationReport/search_dormer_bystnum.php");
		//$this->load->view("Reports/sendEmail.php");
	}
	
	public function sendstat_searchByName(){
		$this->load->view("Reports/sendReport/statusOfResidency/search_dormer_byname.php");
	}
	
	public function sendstat_searchByStudentNumber()
	{
		$this->load->view("Reports/sendReport/statusOfResidency/search_dormer_bystnum.php");
		//$this->load->view("Reports/sendEmail.php");
	}
	
	public function sendvio_searchByName(){
		$this->load->view("Reports/sendReport/sendViolationReport/search_dormer_byname.php");
	}
	
	/*public function send_searchToSend()
	{
		$this->load->view("Reports/sendReport/search_byname_or_bystnum.php");
		//$this->load->view("Reports/sendEmail.php");
	}*/
	
	public function selectreportToSend(){
		$stnum = $_POST['stnum'];
		
		$result = $this->Main_model->get_detailsForSend($stnum);
		$this->load->view("Reports/sendReport/selectreportToSend",array('data'=>$result));
		
	}
	
	public function goTo_send_violationReport()
	{
		$this->load->view("Reports/sendReport/sendViolationReport/search_byname_or_bystnum.php");
	}
	
	public function goTo_send_statusOfResidency()
	{
		$this->load->view("Reports/sendReport/statusOfResidency/search_byname_or_bystnum.php");
	}
	
	public function send_violationReport()
	{
		$stnum = $_POST['stnum'];
		$result = $this->Main_model->get_detailsForSend($stnum);
		if($result != NULL){
			$result2 = $this->Main_model->get_guardianId($stnum);
				foreach($result2 as $d){
					$guardianid = $d['GUARDIANID'];
				}
			$result2 = $this->Main_model->get_guardianinfo($guardianid);
			$result3 = $this->Main_model->violationdata_viewer($stnum);
			
			$this->load->view("Reports/sendReport/sendViolationReport/sendViolationReport",array('dormer'=>$result,'guardian'=>$result2,'violations'=>$result3));
		}
		else{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
			$this->load->view("Reports/sendReport/sendViolationReport/search_byname_or_bystnum.php");
		}
	}
	
	public function send_statusOfResidency()
	{
		$stnum = $_POST['stnum'];
		$dormer = $this->Main_model->get_detailsForSend($stnum);
		if($dormer != NULL){
			$result = $this->Main_model->get_guardianId($stnum);
				foreach($result as $d){
					$guardianid = $d['GUARDIANID'];
				}
			$guardian = $this->Main_model->get_guardianinfo($guardianid);
			$violation = $this->Main_model->get_violationdata($stnum);
			$result = $this->Main_model->get_paymentRecordId($stnum);
				foreach($result as $d){
					$paymentrecordid = $d['PAYMENTRECORDID'];
				}
			$unpaidfeeinfo = $this->Main_model->get_unpaidfeeinfo($paymentrecordid);
			
			$this->load->view("Reports/sendReport/statusOfResidency/sendStatusOfResidency",array('dormer'=>$dormer,'guardian'=>$guardian,'violation'=>$violation,'unpaidfeeinfo'=>$unpaidfeeinfo));
		}
		else{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
			$this->load->view("Reports/sendReport/statusOfResidency/search_dormer_byname_or_bystnum.php");
		}
	}
	
	public function chooseDormersToSendReport(){
		$name = $_POST['name'];
		
		$result = $this->Main_model->get_name($name);
		
		if($result != NULL){
			$this->load->view('Reports/sendReport/sendViolationReport/chooseDormersToSendReport',array('data'=>$result));
		}
		else{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
			$this->load->view("Reports/sendReport/sendViolationReport/search_dormer_byname.php");
		}
	}
	
	public function stat_chooseDormersToSendReport(){
		$name = $_POST['name'];
		
		$result = $this->Main_model->get_name($name);
		
		if($result != NULL){
			$this->load->view('Reports/sendReport/statusOfResidency/chooseDormersToSendReport',array('data'=>$result));
		}
		else{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
			$this->load->view("Reports/sendReport/statusOfResidency/search_dormer_byname.php");
		}
	}
	
	public function sendReport()
	{
		$to = $_POST['to'];
		$this->load->view("Reports/sendReport/sendViolationReport/email",array('data'=>$to));
	}
	
	public function checkLogin()
	{
		$adminname = $_POST['adminname'];
		$adminpwd = $_POST['adminpwd'];
		
		$checkadmin = $this->Main_model->check_admin();
		
		if($checkadmin != NULL){
			$result = $this->Main_model->search_admin($adminname, $adminpwd);
			if($result != NULL){
				$_SESSION['admin'] = 1;
				$this->load->view("Main.php");
			}
			else{
				$_SESSION['admin'] = 0;
				$_SESSION['validadmin'] = 0;
				$this->load->view("Login.php");
			}
		}
		else{
			$this->Main_model->notify_failed('Create an administrator account first.');
			$this->load->view("Login.php");
		}
	}
	
	public function goToLogin()
	{
		$this->load->view("Login.php");
	}
	
	public function goToLogout()
	{
		$_SESSION['validadmin'] = 1;
		$_SESSION['admin'] = 0;
		$this->load->view("Login.php");
	}
	
	public function goToMain()
	{
		$this->load->view("Main.php");
	}
	
	public function goToAddApplicant()
	{
		$this->load->view("add_applicant/select_functions.php");
	}
	
	public function add_applicant()
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
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
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
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
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
		
		$this->Main_model->notify_successful('A Violation Record has been added.');
		$this->load->view("Main.php");
	}
	
	//end add violation
	
	public function addAnAffiliation() {
	
		$stnum = $_POST['stnum'];
		
		$result = $this->Main_model->search_dormer($stnum);
		if($result != NULL){
			$this->load->view('add_affiliation/add_affiliation',array('data'=>$result));
		}
		else{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
			$this->load->view("add_affiliation/search_byname_or_bystnum.php");
		}
	}
	
	public function chooseDormersToAddAffiliation(){
	
		$name = $_POST['name'];
		
		$result = $this->Main_model->get_name($name);
		
		if($result != NULL){
			$this->load->view('add_affiliation/chooseDormersToAddAffiliation',array('data'=>$result));
		}
		else{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
			$this->load->view("add_affiliation/search_byname_or_bystnum.php");
		}
	}
	
	public function addaffiliation(){
		$stnum  = $_POST['stnum'];
		$affiliation = $_POST['affiliation'];
		
		$affiliationid = $stnum.'_'.$affiliation;
		$checkaffiliation = $this->Main_model->check_dormer_affiliation($affiliationid);
		if($checkaffiliation == NULL){
			$this->Main_model->add_dormer_affiliation($stnum, $affiliation, $affiliationid);
			$this->Main_model->notify_successful('An affiliation record has been added.');
			$this->load->view("add_affiliation/search_byname_or_bystnum.php");
		}
		else{
			$this->Main_model->notify_failed('Affiliation record of dormer already exists.');
			$this->load->view("add_affiliation/search_byname_or_bystnum.php");
		}
	}
	
	public function chooseDormersToAddAilment(){
	
		$name = $_POST['name'];
		
		$result = $this->Main_model->get_name($name);
		
		if($result != NULL){
			$this->load->view('add_ailment/chooseDormersToAddAilment',array('data'=>$result));
		}
		else{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
			$this->load->view("add_ailment/search_byname_or_bystnum.php");
		}
	}
	
	public function addAnAilment() {
	
		$stnum = $_POST['stnum'];
		
		$result = $this->Main_model->search_dormer($stnum);
		if($result != NULL){
			$this->load->view('add_ailment/add_ailment',array('data'=>$result));
		}
		else{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
			$this->load->view("add_ailment/search_byname_or_bystnum.php");
		}
	}
	
	public function addailment(){
		$stnum  = $_POST['stnum'];
		$ailment = $_POST['ailment'];
		$ailmentid = $stnum.'_'.$ailment;
		$checkailment = $this->Main_model->check_dormer_ailment($ailmentid);
		if($checkailment == NULL){
			$this->Main_model->add_dormer_ailment($stnum, $ailment, $ailmentid);
			$this->Main_model->notify_successful('An ailment record has been added.');
			$this->load->view("add_ailment/search_byname_or_bystnum.php");
		}
		else{
			$this->Main_model->notify_failed('Ailment record of dormer already exists.');
			$this->load->view("add_ailment/search_byname_or_bystnum.php");
		}
	}
	
	public function addAMedication() {
	
		$stnum = $_POST['stnum'];
		
		$result = $this->Main_model->search_dormer($stnum);
		if($result != NULL){
			$this->load->view('add_medication/add_medication',array('data'=>$result));
		}
		else{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
			$this->load->view("add_medication/search_byname_or_bystnum.php");
		}
	}
	
	public function addmedication(){
		$stnum  = $_POST['stnum'];
		$medication = $_POST['medication'];
		$medicationid = $stnum.'_'.$medication;
		$checkmedication = $this->Main_model->check_dormer_medication($medicationid);
		if($checkmedication == NULL){
			$this->Main_model->add_dormer_medication($stnum, $medication, $medicationid);
			$this->Main_model->notify_successful('A medication record has been added.');
			$this->load->view("add_medication/search_byname_or_bystnum.php");
		}
		else{
			$this->Main_model->notify_failed('Medication record of dormer already exists.');
			$this->load->view("add_medication/search_byname_or_bystnum.php");
		}
	}
	
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
	
	public function goToFinancial(){
		$this->load->view("manageDorm/goToFinancial.php");
	}
	
	public function goToManageDorm(){
		$this->load->view("manageDorm/manageDorm.php");
	}
	
	public function goToManageRoom(){
		$this->load->view("manageDorm/manageRoom.php");
	}
	
	public function goToManageEquipment(){
		$this->load->view("manageDorm/manageEquipment.php");
	}
	
	public function goToManageAdminAccount(){
		$this->load->view("manageAdminAccount/manageAdminAccount.php");
	}
	
	public function goToAddAffiliation(){
		$this->load->view("add_affiliation/search_byname_or_bystnum.php");
	}
	
	public function goToAddAilment(){
		$this->load->view("add_ailment/search_byname_or_bystnum.php");
	}
	
	public function goToAddMedication(){
		$this->load->view("add_medication/search_byname_or_bystnum.php");
	}
	
	public function goToUpdateBorrowedEquipment(){
		$this->load->view("update_borrowedequipment/update_borrowed_equipment.php");
	}
	
	public function goToAddBorrowedEquipment(){
		$this->load->view("update_borrowedequipment/add_borrowedequipment/search_byname_or_bystnum.php");
	}
	
	public function goTo_UpdateBorrowedEquipment(){
		$this->load->view("update_borrowedequipment/update_borrowedequipment/search_byname_or_bystnum.php");
	}
	
	public function chooseDormersToAddBorrowedEquipment(){
	
		$name = $_POST['name'];
		
		$result = $this->Main_model->get_name($name);
		
		if($result != NULL){
			$this->load->view('update_borrowedequipment/add_borrowedequipment/chooseDormersToAddBorrowedEquipment',array('data'=>$result));
		}
		else{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
			$this->load->view("update_borrowedequipment/add_borrowedequipment/search_byname_or_bystnum.php");
		}
	}
	
	public function addABorrowedEquipment() {
	
		$stnum = $_POST['stnum'];
		
		$result = $this->Main_model->search_dormer($stnum);
		if($result != NULL){
			$equipments = $this->Main_model->equipment_viewer();
			if($equipments != NULL){
				$this->load->view('update_borrowedequipment/add_borrowedequipment/add_borrowedequipment',array('data'=>$result,'equipments'=>$equipments));
			}
			else{
				$this->Main_model->notify_failed('Equipment List empty.');
				$this->load->view("update_borrowedequipment/add_borrowedequipment/search_byname_or_bystnum.php");
			}
		}
		else{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
			$this->load->view("update_borrowedequipment/add_borrowedequipment/search_byname_or_bystnum.php");
		}
	}
	
	public function addborrowedequipment(){
		$stnum = $_POST['stnum'];
		$control_number = $_POST['control_number'];
		$date_borrowed = $_POST['bormonth'].'-'.$_POST['borday'].'-'.$_POST['boryear'];
		//$date_returned = $_POST['retmonth'].'-'.$_POST['retday'].'-'.$_POST['retyear'];
		$condb = $_POST['condb'];
		//$condr= $_POST['condr'];
		$borrowedkey = $stnum.'_'.$control_number;
		$checkborrowedkey = $this->Main_model->check_dormer_borrowedkey($borrowedkey);
		if($checkborrowedkey == NULL){
			$checkavailability = $this->Main_model->check_equipment_ifavailable($control_number);
			if($checkavailability == NULL){
				$this->Main_model->add_dormer_equipment($borrowedkey,$stnum, $control_number, $date_borrowed,$condb,'borrowed');
				$this->Main_model->notify_successful('A borrowed equipment record has been added.');
				$this->load->view("update_borrowedequipment/add_borrowedequipment/search_byname_or_bystnum.php");
			}
			else{
				$this->Main_model->notify_failed('Equipment has been borrowed by another dormer.');
				$this->load->view("update_borrowedequipment/add_borrowedequipment/search_byname_or_bystnum.php");
			}
		}
		else{
			$this->Main_model->notify_failed('Dormer has already borrowed that equipment.');
			$this->load->view("update_borrowedequipment/add_borrowedequipment/search_byname_or_bystnum.php");
		}
	}
	
	public function chooseDormersToUpdateBorrowedEquipment(){
	
		$name = $_POST['name'];
		
		$result = $this->Main_model->get_name($name);
		
		if($result != NULL){
			$this->load->view('update_borrowedequipment/update_borrowedequipment/chooseDormersToUpdateBorrowedEquipment',array('data'=>$result));
		}
		else{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
			$this->load->view("update_borrowedequipment/update_borrowedequipment/search_byname_or_bystnum.php");
		}
	}
	
	public function updateABorrowedEquipment() {
	
		$stnum = $_POST['stnum'];
		
		$result = $this->Main_model->search_dormer($stnum);
		if($result != NULL){
			$equipments = $this->Main_model->check_dormer_borrowedequipment($stnum);
			if($equipments != NULL){
				$allequipments = $this->Main_model->equipment_viewer();
				$this->load->view('update_borrowedequipment/update_borrowedequipment/update_borrowedequipment',array('data'=>$result,'equipments'=>$equipments, 'allequipments'=>$allequipments));
			}
			else{
				$this->Main_model->notify_failed('The dormer didn\'t borrow any equipment.');
				$this->load->view("update_borrowedequipment/update_borrowedequipment/search_byname_or_bystnum.php");
			}
		}
		else{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
			$this->load->view("update_borrowedequipment/update_borrowedequipment/search_byname_or_bystnum.php");
		}
	}
	
	public function updateborrowedequipment(){
		$stnum = $_POST['stnum'];
		$control_number = $_POST['control_number'];
		$date_borrowed = $_POST['bormonth'].'-'.$_POST['borday'].'-'.$_POST['boryear'];
		$date_returned = $_POST['retmonth'].'-'.$_POST['retday'].'-'.$_POST['retyear'];
		$condb = $_POST['condb'];
		$condr= $_POST['condr'];
		$borrowedkey = $stnum.'_'.$control_number;
			$this->Main_model->update_dormer_equipment($borrowedkey,$stnum, $control_number, $date_borrowed,$date_returned,$condb,$condr,'returned');
			$this->Main_model->notify_successful('A borrowed equipment has been returned.');
			$this->load->view("update_borrowedequipment/update_borrowedequipment/search_byname_or_bystnum.php");
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
	
	public function aff_searchByStudentNumber()
	{
		$this->load->view("add_affiliation/search_dormer_bystnum.php");
	}
	
	public function aff_searchByName()
	{
		$this->load->view("add_affiliation/search_dormer_byname.php");
	}
	
	public function ail_searchByStudentNumber()
	{
		$this->load->view("add_ailment/search_dormer_bystnum.php");
	}
	
	public function ail_searchByName()
	{
		$this->load->view("add_ailment/search_dormer_byname.php");
	}
	
	public function med_searchByStudentNumber()
	{
		$this->load->view("add_medication/search_dormer_bystnum.php");
	}
	
	public function med_searchByName()
	{
		$this->load->view("add_medication/search_dormer_byname.php");
	}
	
	public function equip_searchByStudentNumber()
	{
		$this->load->view("update_borrowedequipment/add_borrowedequipment/search_dormer_bystnum.php");
	}
	
	public function equip_searchByName()
	{
		$this->load->view("update_borrowedequipment/add_borrowedequipment/search_dormer_byname.php");
	}
	
	public function updateequip_searchByStudentNumber()
	{
		$this->load->view("update_borrowedequipment/update_borrowedequipment/search_dormer_bystnum.php");
	}
	
	public function updateequip_searchByName()
	{
		$this->load->view("update_borrowedequipment/update_borrowedequipment/search_dormer_byname.php");
	}
	
	public function editADormer()
	{
		$this->load->view("edit/searchtoedit_dormer.php");
	}
	
	public function editAdminAccount()
	{
		$adminaccount = $this->Main_model->get_adminaccount();
		$this->load->view('manageAdminAccount/editAdminAccount',array('adminaccount'=>$adminaccount));
	}
	
	public function edit_AdminAccount(){
		$username = $_POST['username'];
		$old_password = $_POST['previous_password'];
		$new_password = $_POST['new_password'];
		$new2_password = $_POST['new2_password'];
		
		$checkoldpassword = $this->Main_model->check_adminaccount_password($old_password);
		
		if($checkoldpassword != NULL){
			if($new_password == $new2_password){
				$oldaccount = $this->Main_model->check_admin();
				foreach($oldaccount as $d){
					$oldusername = $d['USERNAME'];
				}
				$this->Main_model->edit_adminAccount($oldusername,$username,$new_password);
				$this->Main_model->notify_successful('The account information has been changed.');
				$this->load->view('manageAdminAccount/manageAdminAccount.php');
			}
			else{
				$this->Main_model->notify_failed('New password confirmation mismatched.');
				$this->load->view('manageAdminAccount/manageAdminAccount.php');
			}
		}
		else{
			$this->Main_model->notify_failed('Wrong previous password.');
			$this->load->view('manageAdminAccount/manageAdminAccount.php');
		}
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
			$this->Main_model->notify_successful('A new Applicant has been added in the Reservation List.');
			$this->load->view("Main.php");
		}
		else{
			if($checkIfApplicant != NULL)
				$this->Main_model->notify_failed('Applicant is already in the Reservation List.');
			if($checkIfDormer != NULL)
				$this->Main_model->notify_failed('Applicant is already in the Dormers\' List.');
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
		$statusofresidency = "Good";
		
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
			
			if($_POST['affiliation'] != NULL){
				$this->Main_model->add_dormer_affiliation($stnum, $_POST['affiliation'], $stnum.'_'.$_POST['affiliation']);
			}
			if($_POST['ailment'] != NULL){
				$this->Main_model->add_dormer_ailment($stnum, $_POST['ailment'], $stnum.'_'.$_POST['ailment']);
			}
			if($_POST['medication'] != NULL){
				$this->Main_model->add_dormer_medication($stnum, $_POST['medication'], $stnum.'_'.$_POST['medication']);
			}
			
			if($checkGuardian == NULL)
				$this->Main_model->add_guardian($guardianid, $gfname, $gmname, $glname, $gaddress, $gcontactnum, $geadd, $gcivilstatus, $gsourceofincome);
			
			$this->Main_model->add_dormer_guardian($stnum,$guardianid);
			$this->Main_model->add_paymentrecord($paymentrecordid,0);
			$this->Main_model->add_dormer_paymentrecord($stnum,$paymentrecordid);
			$this->Main_model->update_roomvacancy($roomnum);
			$this->Main_model->notify_successful('A new Dormer has been added in the Dormers\' List.');
			$this->load->view("Main.php");
		}
		else{
			if($checkIfApplicant != NULL)
				$this->Main_model->notify_failed('Record is already in the Reservation List.');
			if($checkIfDormer != NULL)
				$this->Main_model->notify_failed('Record is already in the Dormers\' List.');
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
		$statusofresidency = "Good";
		
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
		$this->Main_model->notify_successful('A new Dormer has been added in the Dormers\' List.');
		
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
				$this->Main_model->notify_successful('A new room has been added.');
				$this->load->view("Main.php");
			}
			else{
				$this->Main_model->notify_failed('The room already exists.');
				$this->load->view("add_room/add_room.php");
			}
		}
		else{
			$this->Main_model->notify_failed('Room with vacancy > capacity not allowed.');
			$this->load->view("add_room/add_room.php");
		}
	}
	
	public function removeAnEquipment(){
		$equipments = $this->Main_model->equipment_viewer();
		
		if($equipments != NULL){
			$this->load->view('manageDorm/manageEquipment/chooseEquipmentToRemove',array('equipments'=>$equipments));
		}
		else{
			$this->Main_model->notify_failed('Equipment list empty.');
			$this->load->view("manageDorm/manageEquipment.php");
		}
	}
	
	public function addequipment(){
		$control_number = $_POST['cnum'];
		$equip_name = $_POST['eqname'];
		//$date_borrowed = $_POST['bormonth'].'-'.$_POST['borday'].'-'.$_POST['boryear'];
		//$date_returned = $_POST['retmonth'].'-'.$_POST['retday'].'-'.$_POST['retyear'];
		//$condb = $_POST['condb'];
		//$condr= $_POST['condr'];
		$checkEquipment = $this->Main_model->search_equipment($control_number);
		//$this->Main_model->add_equipment($control_number, $equip_name, $date_borrowed, $date_returned, $condb, $condr);
		if($checkEquipment == NULL){
			$this->Main_model->add_equipment($control_number, $equip_name);
			$this->Main_model->notify_successful('A new dormitory equipment has been added.');
			$this->load->view("Main.php");
		}
		else{
			$this->Main_model->notify_failed('Control Number already exists.');
			$this->load->view("add_equipment/add_equipment.php");
		}
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
			$this->Main_model->notify_failed('The room does not exist.');
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
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
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
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
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
			$this->Main_model->notify_successful('A dormer has been removed from the Dormers\' List.');
			$this->load->view('view/view_dormer',array('data'=>$result));
		}
		else{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
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
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
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
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
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
	
	public function removeEquipment() {
	
		$eqid = $_POST['eqid'];
		$checkEquipment = $this->Main_model->search_equipment($eqid);
		
		if($checkEquipment != NULL){
			$result = $this->Main_model->remove_an_equipment($eqid);
			$this->Main_model->notify_successful('An equipment has been removed from the list.');
			$this->load->view("manageDorm/manageEquipment.php");
		}
		else{
			$this->Main_model->notify_failed('Record is not in the equipment List.');
			$this->load->view("manageDorm/manageEquipment/chooseEquipmentToRemove.php");
		}
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
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
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
		$get_statusofresidency = get_statusOfResidency($stnum);
		foreach($get_statusofresidency as $g){
			$statusofresidency = $g['STATUSOFRESIDENCY'];
		}
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
		$this->Main_model->notify_successful('A dormer\'s record has been successfully updated.');
		$this->load->view("Main.php");
		
	}
	
	public function chooseDormersToEdit(){
	
		$name = $_POST['name'];
		
		$result = $this->Main_model->get_name($name);
		
		if($result != NULL){
			$this->load->view('edit/chooseDormersToEdit',array('data'=>$result));
		}
		else{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
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
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
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
				$this->Main_model->notify_failed('Dormer has no recorded violation.');
				$this->load->view("view/view_violation/search_byname_or_bystnum.php");
			}
		}
		else{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
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
			$checkIfHasPaidBefore = $this->Main_model->checkIfHasPaidBefore($soaid);
			if($checkIfHasPaidBefore == NULL){
				$checkSOA = $this->Main_model->check_statementofaccount($soaid);
				if($checkSOA == NULL){
					$this->Main_model->add_statementofaccount($soaid, $month, $year, 0, $paymentrecordid);
					
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
					
					$maccount = 0;
					foreach($residencefee as $d)
						$maccount += $d['RESIDENCEFEE'];
					foreach($appliancefee as $d)
						$maccount += $d['APPLIANCEFEE'];
					foreach($transientfee as $d)
						$maccount += $d['TRANSIENTFEE'];
					foreach($reservationfee as $d)
						$maccount += $d['RESERVATIONFEE'];
					foreach($key_deposit as $d)
						$maccount += $d['KEYDEPOSITFEE'];
					foreach($closed_locker as $d)
						$maccount += $d['CLOSEDLOCKERFEE'];
					
					$this->Main_model->add_pr_unpaidfee($soaid, $maccount, $month, $year, $paymentrecordid);
					
					$this->load->view('create_PDF/r_dormerPDF',array('data'=>$data, 'soainfo'=>$soainfo,'residencefee'=>$residencefee,'appliancefee'=>$appliancefee,'transientfee'=>$transientfee,'reservationfee'=>$reservationfee,'key_deposit'=>$key_deposit,'closed_locker'=>$closed_locker));
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
					$this->load->view('create_PDF/r_dormerPDF',array('data'=>$data,'soainfo'=>$soainfo,'residencefee'=>$residencefee,'appliancefee'=>$appliancefee,'transientfee'=>$transientfee,'reservationfee'=>$reservationfee,'key_deposit'=>$key_deposit,'closed_locker'=>$closed_locker));
				}
			}
			else
			{
				$this->Main_model->notify_failed('The dormer has already paid for her account this month.');
				$this->load->view("create_PDF/r_search.php");
			}
		}
		else
		{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
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
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
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
			$checkIfHasPaidBefore = $this->Main_model->checkIfHasPaidBefore($soaid);
			if($checkIfHasPaidBefore == NULL){
				$checkSOA = $this->Main_model->check_statementofaccount($soaid);
				if($checkSOA == NULL){
					$this->Main_model->add_statementofaccount($soaid, $month, $year, 0, $paymentrecordid);
					
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
					
					$maccount = 0;
					foreach($residencefee as $d)
						$maccount += $d['RESIDENCEFEE'];
					foreach($appliancefee as $d)
						$maccount += $d['APPLIANCEFEE'];
					foreach($transientfee as $d)
						$maccount += $d['TRANSIENTFEE'];
					foreach($reservationfee as $d)
						$maccount += $d['RESERVATIONFEE'];
					foreach($key_deposit as $d)
						$maccount += $d['KEYDEPOSITFEE'];
					foreach($closed_locker as $d)
						$maccount += $d['CLOSEDLOCKERFEE'];
					
					$this->Main_model->add_pr_unpaidfee($soaid, $maccount, $month, $year, $paymentrecordid);
					
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
				$this->Main_model->notify_failed('The dormer has already paid for her account this month.');
				$this->load->view("manageDorm/generateFee/search_byname_or_bystnum.php");
			}
		}
		else
		{
			$this->Main_model->notify_failed('Record is not in the Dormers\' List.');
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
		$year = $_POST['year'];
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
		
		$this->Main_model->add_pr_paidfee($pfid, $date, $month, $year, $maccount, $paymentrecordid);
		
			$result = $this->Main_model->remove_residencefee($soaid);
			$result = $this->Main_model->remove_appliancefee($soaid);
			$result = $this->Main_model->remove_transientfee($soaid);
			$result = $this->Main_model->remove_reservationfee($soaid);
			$result = $this->Main_model->remove_key_deposit_fee($soaid);
			$result = $this->Main_model->remove_closed_locker_fee($soaid);
			$result = $this->Main_model->remove_thisStatementofaccount($soaid);
			$result = $this->Main_model->remove_thisUnpaidfee($soaid);
		
		$this->Main_model->notify_successful('A dormer\'s Statement of Acccount has been marked as PAID.');
		$this->load->view("Main.php");
	}
	
	public function updateStatusofResidency()
	{
		$stnum = $_POST['stnum'];
		
		$checkstnum = $this->Main_model->get_studentNumber($stnum);
		
		if($checkstnum != NULL)
		{
			$result = search_dormer($studentnumber);
		}
		else
		{
		
		}
	
	}
}
?>