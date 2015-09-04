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
      $result = $this->customer->validate_order($data);
        if($result == 'valid')
        {
          $this->customer->buy($data);
          $this->session->sess_destroy();
          redirect ('/');
        }
        else
        {
          $errors = validation_errors();
          $this->session->set_flashdata('errors', $errors);
          redirect('/cart');
        }
	   	
   }
}

?>