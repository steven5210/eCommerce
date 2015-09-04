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
		$this->form_validation->set_rules('price', 'Price', 'required|trim');
		$this->form_validation->set_rules('inventory', 'Inventory', 'required|trim|alpha_numeric');
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
		$values = array($category['new_category']);
		
		$this->db->query($query, $values);
		return $this->db->insert_id();
	}
	public function add_product($product, $category_id)
	{
		$query = "INSERT INTO items (name, description, price, inventory, created_at, updated_at, category_id)
				VALUES (?, ?, ?, ?, NOW(), NOW(), ?)";
		$values = array($product['name'], $product['description'], $product['price'], $product['inventory'], $category_id);
		$this->db->query($query, $values);
		return $this->db->insert_id();
	}
	public function add_image($file, $item_id)
	{
		$query = "INSERT INTO images (image, created_at, updated_at, item_id) VALUES (?, NOW(), NOW(), ?)";
		$values = array("./uploads/" . $file['file_name'], $item_id);
		$this->db->query($query, $values);
		return $this->db->insert_id();
	}
	public function update_product($data, $file)
	{
		$query = "UPDATE items, categories, images 
				SET items.name = ?, items.description = ?, items.price = ?, items.updated_at = NOW(), categories.name = ?, categories.updated_at = NOW(), images.image = ?, images.updated_at = NOW() 
				WHERE categories.id = items.category_id 
				AND items.id = images.item_id 
				AND items.id = ?";
		$values = array($data['name'], $data['description'], $data['price'],  $data['new_category'], "./uploads/" . $file, $data['id']);
		return $this->db->query($query, $values);

	}
	public function delete_product($id)
	{
		$query = "DELETE FROM items WHERE id = ?";
		$value = $id;
		$this->db->query($query, $value);
	}
	public function get_all_orders()
	{
	return $this->db->query("SELECT orders.id, concat_ws(' ', customers.ship_first_name, customers.ship_last_name) as name, orders.created_at, concat_ws(' ', customers.bill_address, customers.bill_state ) as billing_address, customers.total_price, customers.status 
						FROM orders 
						LEFT JOIN customers 
						ON customers.id = orders.customers_id 
						LEFT JOIN items 
						ON orders.items_id = items.id");

	}
}
?>
