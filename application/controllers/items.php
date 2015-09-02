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
	// 	$this->load->view('checkout');
	// }
	// public function fetch_cart()
	// {

		$cart=array(1,1,2,2,1,2,1,1);
		$stuff=array_count_values($cart);
		$items=array();
		foreach ($stuff as $key => $value) {
			$item=array(
			'id'=>$key,
			'quantity'=>$value);
			$items[]=$this->item->fetch_item($item);
		}
		$data=array('items'=>$items);
		$this->load->view('checkout.php', $data);
	}
	public function add_to_cart()
	{
		
	}

	public function search_by_name()
	{
		$data = $this->input->post();
		$items = $this->item->search_by_name($data);
		//load product info page
	}
	public function sort_by()
	{

		if($data['sort'] == 'price_lowest')
		{
			$this->item->sort_lowest();
			redirect('/');
		}
		if($data['sort'] == 'price_highest')
		{
			$this->item->sort_highest();
			redirect('/');
		}
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