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
	public function admin_login_page()
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
		
	}
	public function search_by_name()
	{
		$data = $this->input->post();
		// return searched item id
		$items = $this->item->search_by_name($data);
		redirect('/');
	}
	public function sort_by()
	{
		$data = $this->input->post();
		$this->item->search_by_name($data);
	}
	public function productsPage()
	{
		$this->load->view('productsPage');
	}
	public function orderPage()
	{
		$this->load->view('OrderPage');
	}
}
?>