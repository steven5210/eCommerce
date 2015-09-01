<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class items extends CI_Controller {

	public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }
	
	public function index()
	{
		$this->load->view('index');
	}
	public function product_infoView()
	{
		$this->load->view('product_info');
	}
<<<<<<< HEAD
	public function admin_login()
	{
		$this->load->view('admin');
	}
	public function admin_loggedIn()
	{
		$this->load->view('adminDash');
	}
	public function logOff()
	{
	//	$this->session->session_destroy();
		redirect('admin');
=======
	
	public function checkout()
	{
		$this->load->view('checkout');
>>>>>>> origin/master
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */