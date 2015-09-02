<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class admin_rights extends CI_Controller {

	public function __construct()
       {
            parent::__construct();
            $this->load->model('admin');
       }
     	public function add_product()
     	{     
            $data = $this->input->post();

     		$result = $this->admin->validate_product($data);
     		if($result == 'valid')
     		{
     			$data = $this->input->post();
     			$category_id = $this->admin->add_category($data); 
                var_dump($category_id);
     			$item_id = $this->admin->add_product($data, $category_id);
                var_dump($item_id);
                $image_id = $this->admin->add_image($data, $item_id);
                var_dump($image_id);
                die();
     			redirect('/products');
     		}
     		else
     		{
                echo "not valid";
                die();
     			$errors = array(validation_errors());
     			$this->session->set_flashdata('errors', $errors);
     			redirect('/products');
     		}
     	}
     }
?>