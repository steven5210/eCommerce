<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }
   public function buy()
   {
      $data = $this->input->post();
	   	$this->customer->buy($data);
	   	redirect ('/');
   }
}

?>