<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class View extends CI_Controller{

	public function viewRooms() {	
		$result = $this->Main_model->room_viewer();
		$this->load->view('view_room',array('data'=>$result));
	}
	
	public function viewDormers() {	
		$result = $this->Main_model->dormer_viewer();
		$this->load->view('view_dormer',array('data'=>$result));
	}
	
	public function viewApplicants() {	
		$result = $this->Main_model->applicant_viewer();
		$this->load->view('view_applicant',array('data'=>$result));
	}
	
	public function viewEquipments() {	
		$result = $this->Main_model->equipment_viewer();
		$this->load->view('view_equipment',array('data'=>$result));
	}
	
	public function viewGuardians() {	
		$result = $this->Main_model->guardian_viewer();
		$this->load->view('view_guardian',array('data'=>$result));
	}
	
	public function viewPaymentRecords() {	
		$result = $this->Main_model->paymentrecord_viewer();
		$this->load->view('view_paymentrecord',array('data'=>$result));
	}
	
	public function viewVacantRooms() {	
		$result = $this->Main_model->vacantroom_viewer();
		$this->load->view('view_vacantroom',array('data'=>$result));
	}

	public function viewViolationData() {	
		$result = $this->Main_model->violationdata_viewer();
		$this->load->view('view_violationdata',array('data'=>$result));
	}

}

?>