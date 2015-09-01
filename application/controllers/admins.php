<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class admins extends CI_Controller {

	public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }
	public function admin_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->admin->get_admin_email($email);
	}
}
?>