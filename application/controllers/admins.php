<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class admins extends CI_Controller {

	public function __construct()
       {
            parent::__construct();
            $this->load->model('admin');
       }
	public function admin_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$admin = $this->admin->get_admin_email($email);
		if($admin && $admin['password'] == $password)
		{
			$admin = array(
				'admin_id' => $admin['id'],
				'email' => $admin['email'],
				'password' => $admin['password'],
				'is_logged_in' => true)
			;
			$this->session->set_userdata($admin);
			redirect('/ordersMain');
		}
		else
		{
			$this->session->set_flashdata('error', "Admin not found, Please try again. Or you do not have access.");
			redirect('/admin');
		}
	}
}
?>