<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Main extends CI_Controller{

	public function index()
	{
		$this->load->view("Index.php");

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
		$this->load->view("Add/addApplicant.php");
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
		$this->load->view("Reports/sendReport.php");
	}
}

?>