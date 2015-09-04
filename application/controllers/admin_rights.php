<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class admin_rights extends CI_Controller {

	public function __construct()
       {
            parent::__construct();
            $this->load->model('admin');
       }
     	public function add_product()
     	{     
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '3000';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $file = $this->upload->data();
            $data = $this->input->post();
     		$result = $this->admin->validate_product($data);
     		if($result == 'valid')
     		{
     			$data = $this->input->post();
     			$category_id = $this->admin->add_category($data); 
     			$item_id = $this->admin->add_product($data, $category_id);
                $image_id = $this->admin->add_image($file, $item_id);
     			redirect('/products');
     		}
     		else
     		{
     			$errors = array(validation_errors());
     			$this->session->set_flashdata('errors', $errors);
     			redirect('/products');
     		}
     	}
        public function update_product()
        {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '3000';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $file = $this->upload->data();
            $data = $this->input->post();
            $result = $this->admin->update_product($data, $file['file_name']);
            redirect('/products');
        }
        public function delete_product($id)
        {
            $this->admin->delete_product($id);
            redirect('/products');
        }
        public function orderPage()
        {   
        // $orders = $this->admin->get_all_admin_orders();
        $this->load->view('OrderPage');
        }
        public function get_admin_products()
        {
            $admin_products = $this->admin->get_admin_products($this->input->post());
            $this->load->view('/partials/admin_partials',
                    array('admin_products' => $admin_products));
        }
// Main page for orders after logging in for ADMIN
        public function admin_loggedIn()
        {
            $admin_orders = $this->admin->get_all_admin_orders();
            $this->load->view('adminDash',
                            array('admin_orders' => $admin_orders));
        }
        public function get_admin_orders()
        {
            $admin_orders = $this->admin->get_admin_orders($this->input->post());
            $this->load->view('/partials/admin_dash_partials',
                            array('admin_orders' => $admin_orders));
        }

}
?>