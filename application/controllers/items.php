<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class items extends CI_Controller {
 
	public function __construct()
       {
       		
            parent::__construct();

            // Your own constructor code
       }
	public function index()
	{
		$items = $this->item->display_all();
		$get_items_categories = $this->item->get_all_items_categories();
		$this->load->view('index', 
						array('get_items_categories' => $get_items_categories
							  'items' => $items));
	}
	public function product_infoView($id)
	{
		$get_product = $this->item->get_product($id);
		$this->load->view('product_info', 
						array('get_product' => $get_product));
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
		// $this->session->sess_destroy();
		$this->output->enable_profiler();
		$data=array();
		if (!empty($this->session->userdata('cart')))
		{
			$cart=$this->session->userdata('cart');
			$stuff=array_count_values($cart);
			$items=array();
			foreach ($stuff as $key => $value) 
			{
				$item=array(
				'id'=>$key,
				'quantity'=>$value);
				$items[]=$this->item->fetch_item($item);
			}
			$data=array('items'=>$items);
		};
		$this->load->view('checkout.php', $data);
	}
	public function add_to_cart()
	{
		if ($this->session->userdata('cart')!==null)
		{
			$cart=$this->session->userdata('cart');
		} else {
			$this->session->set_userdata('cart', array());
			$cart=array();
		}
		for ($i=0; $i < $this->input->post('quantity'); $i++) { 
			$cart[]=$this->input->post('id');
		}
		$this->session->set_userdata('cart', $cart);
		redirect('/cart');
	}
	public function remove_from_cart($id) //removes ALL instances of one item from cart
	{
		$cart=$this->session->userdata('cart');
		foreach ($cart as $key => $value) {
			if($value==$id){
				unset($cart[$key]);
			}
		}
		$this->session->set_userdata('cart', $cart);
		redirect('/cart');
	}

	public function update_cart_quantity() //removes ALL of one item, than readds the updated amount
	{

		$item=$this->input->post();
		$cart=$this->session->userdata('cart');
		foreach ($cart as $key => $value) {
			if($value==$item['id']){
				unset($cart[$key]);
			}
		}
		$this->session->set_userdata('cart', $cart);
		for ($i=0; $i < $item['quantity']; $i++) { 
			$cart[]=$item['id'];
		}
		$this->session->set_userdata('cart', $cart);
		redirect('/cart');
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