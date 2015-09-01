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
	}
	public function checkoutView()
	{
		$this->load->view('checkout');
	}
	public function fetch_cart()
	{

		$cart=array(1,1,2,2,1,2,1,1);
		$stuff=array_count_values($cart);
		$data=array();
		foreach ($stuff as $key => $value) {
			$item=array(
			'id'=>$key,
			'quantity'=>$value);
			$data[]=$this->item->fetch_item($item);
		}
		
		var_dump($data);
		die();
	}
}


?>

