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
		$items_all = $this->item->get_all_items();
		$get_all_categories = $this->item->get_all_categories();
		$this->load->view('index', 
						array('items' => $items, 'get_all_categories' => $get_all_categories, 'items_all' => $items_all));
		
	}
	public function get_category($id)
	{
		$get_all_categories = $this->item->get_all_categories();
		$items=$this->item->get_category($id);
		$item_by_category = $this->item->get_items_by_category($id);
		
		$this->load->view('index', 
						array('items' => $items,
						 'get_all_categories' => $get_all_categories,
						 'id'=>$id,
						 'item_by_category' => $item_by_category));
	}
	public function product_infoView($id)
	{
		$items = $this->item->display_all();
		$get_product = $this->item->get_product($id);
		$this->load->view('product_info', 
						array('items' => $items,'get_product' => $get_product));
	}
	public function admin_login_page()
	{
		$this->load->view('admin');
	}

	public function logOff()
	{
	//	$this->session->session_destroy();
		redirect('admin');
	}
	public function checkoutView()
	{
		// $this->session->sess_destroy();
		
		$data=array();
		if (!empty($this->session->userdata('cart')))
		{
			$cart=$this->session->userdata('cart');
			foreach ($cart as $id => $quantity) 
			{
				if($quantity==0)
				{
					unset($cart[$id]);
				}else{
					$item=array(
					'id'=>$id,
					'quantity'=>$quantity);
					$items[]=$this->item->fetch_item($item);
				}
			}
			$data=array('items'=>$items);
			$this->session->set_userdata('cart', $cart);
		};
		$this->load->view('checkout.php', $data);
	}
	public function add_to_cart()
	{
		if (!empty($this->session->userdata('cart')))
		{
			$cart=$this->session->userdata('cart');
		} else {
			$this->session->set_userdata('cart', array());
			$cart=array();
		}
		if(array_key_exists($this->input->post("id"), $cart))
		{
			$cart[$this->input->post("id")]+=$this->input->post('quantity');
		}else{
			$cart[$this->input->post("id")]=$this->input->post('quantity');
		}
		$this->session->set_userdata('cart', $cart);
		redirect('/cart');
	}
	public function remove_from_cart($id) //removes ALL instances of one item from cart
	{
		$cart=$this->session->userdata('cart');
		if(array_key_exists($id, $cart))
		{
			unset($cart[$id]);
		}
		$this->session->set_userdata('cart', $cart);
		redirect('/cart');
	}
	public function empty_cart()
	{
		$this->session->set_userdata('cart', array());
		redirect('/cart');
	}
	public function update_cart_quantity() //updates item quantity
	{
		$item=$this->input->post();
		$cart=$this->session->userdata('cart');
		if(array_key_exists($item['id'], $cart))
		{
			$cart[$item["id"]]=$item['quantity'];
		}
		$this->session->set_userdata('cart', $cart);
		redirect('/cart');
	}
// AJAX SEARCH 
	public function search_ajax()
	{
		$items = $this->item->update_view($this->input->post());
            $this->load->view('/partials/index_partial',
                    array('items' => $items));
	}
	// End of AJAX search
	public function search_by_name()
	{
		$data = $this->input->post();
		$items = $this->item->search_by_name($data);
		//load product info page
	}
	public function sort_by()
	{
		$data = $this->input->post();
		if($data['sort'] == 'price_lowest')
		{
			$items = $this->item->sort_lowest();
			$this->load->view('/partials/index_partial', 
								array('items' => $items));
		}
		if($data['sort'] == 'price_highest')
		{
			$items = $this->item->sort_highest();
			$this->load->view('/partials/index_partial', 
								array('items' => $items));
		}	
	}

	public function productsPage()
	{
		$admin_products = $this->item->admin_display_all();
		$this->load->view('productsPage',
						array('admin_products' => $admin_products)
						);
	}
}
?>