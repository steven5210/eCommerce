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

	public function checkoutView()
=======
	
	public function checkout()
>>>>>>> master
	{
		$this->load->view('checkout');
	}
}

?>
