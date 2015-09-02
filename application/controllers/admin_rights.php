<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class admin_powers extends CI_Controller {

	public function __construct()
       {
            parent::__construct();
            $this->load->model('admin');
       }
     	public function add_product()
     	{
     		$result = $this->admin->validate_product($this->input->post());
     		if($result == 'valid')
     		{
     			$data = $this->input->post();
     			$category = $this->admin->add_category($data)
     			$product = $this->admin->add_product($this->input->post());
     			redirect('/products');
     		}
     		else
     		{
     			$errors = array(validation_errors());
     			$this->session->set_flashdata('errors', $errors);
     			redirect('/products');
     		}
     	}
?>