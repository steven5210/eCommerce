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
	public function validate_product($post)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name','required|alpha');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required|is_natural|trim');
		if($this->form_validation->run())
		{
			return 'valid';
		}
		else
		{
			return array(validation_errors());
		}
	}
	public function add_category($category)
	{
		$query = "INSERT INTO categories (name, created_at, updated_at)
				VALUES (?,?,?)";
		$values = array($category['category'], NOW(), NOW());
		return $this->db->query($query, $values);
	}
	public function add_product($product)
	{
		$query = "INSERT INTO items (name, description, price, created_at, updated_at)
				VALUES"
	}
}
?>
