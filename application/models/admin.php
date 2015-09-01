<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Model {

	public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }
	public function get_admin_email($email)
	{
		return $this->db->query("SELECT * FROM admins
								WHERE email =?", array($email))->row_array();
}
