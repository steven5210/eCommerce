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
		$this->form_validation->set_rules('name', 'Name','required');
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
				VALUES (?,NOW(),NOW())";
		$values = array($category['category']);
		return $this->db->query($query, $values);
	}
	public function add_product($product, $category_id)
	{
		$query = "INSERT INTO items (name, description, price, created_at, updated_at, category_id)
				VALUES (?, ?, ?, NOW(), NOW(), ?)";
		$values = array($product['name'], $product['description'], $product['price'], $category_id);
		$this->db->query($query, $values);
		return $this->db->insert_id();
	}
	public function add_image($data, $item_id)
	{
		$query = "INSERT INTO images (image, created_at, updated_at, item_id) VALUES (?, NOW(), NOW(), ?)";
		$values = array($data['image'], $item_id);
		$this->db->query($query, $values);
		return $this->db->insert_id();
	}
}
?>
