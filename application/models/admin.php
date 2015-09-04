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
	public function get_all_order()
	{

	}
	public function get_admin_products($search)
	{
		$query = "SELECT items.id, items.name, items.description, items.price, items.inventory, images.image, categories.name AS category_name, 
			(SELECT COUNT(*) FROM items WHERE (items.name LIKE ?)) AS total
			FROM items
			LEFT JOIN images ON items.id = images.item_id 
			LEFT JOIN categories ON categories.id = items.category_id
			WHERE (items.name LIKE ?)
			LIMIT ?, 5";
		$values = array($search['search'] . '%', $search['search'] . '%', intval($search['page_number']));
		return $this->db->query($query, $values)->result_array();
	}
	public function get_all_admin_orders()
	{
		return $this->db->query("SELECT orders.id, CONCAT_WS('', customers.ship_first_name, ' ', customers.ship_last_name) AS full_name, customers.created_at, customers.bill_address, customers.total_price, customers.status,
			(SELECT COUNT(*) FROM orders) AS total
			FROM orders
			LEFT JOIN customers
			ON orders.customers_id = customers.id
			LIMIT 0, 5")->result_array();
	}
	public function get_admin_orders($search)
	{
		$query = "SELECT orders.id, CONCAT_WS('', customers.ship_first_name, ' ', customers.ship_last_name) AS full_name, customers.created_at, customers.bill_address, customers.total_price, customers.status,
			(SELECT COUNT(*) FROM orders WHERE(orders.id
				LIKE ?)) AS total
			FROM orders
			LEFT JOIN customers
			ON orders.customers_id = customers.id
			WHERE (orders.id LIKE ?)
			LIMIT ?, 5";
		$values = array($search['search'] . '%', $search['search'] . '%', intval($search['page_number']));
		return $this->db->query($query, $values)->result_array();
	}
	public function get_by_order($id)
	{
		$query = "SELECT orders.id AS order_id, customers.ship_address, concat_ws('', customers.ship_first_name, ' ', customers.ship_last_name) AS ship_name, 
			customers.ship_city AS ship_city, customers.ship_state AS ship_state, customers.ship_zipcode AS ship_zipcode, 
			concat_ws('', customers.bill_first_name, ' ',customers.bill_last_name) AS bill_name, customers.bill_address, 
			customers.bill_city, customers.bill_state, customers.bill_zipcode,
			items.id AS item_id, categories.name as category_name, items.price as item_price, orders.quantity,
			customers.total_price, customers.status
			FROM customers
			LEFT JOIN orders
			ON customers.id = orders.customers_id
			LEFT JOIN items
			ON orders.items_id = items.id
			LEFT JOIN categories
			ON items.category_id = categories.id
			WHERE orders.id = ?";
		
		$values = $id;
		return $this->db->query($query, $values)->row_array();
	}
	public function get_all_order_by_id($id)
	{
		$query = "SELECT orders.id AS order_id, customers.ship_address, concat_ws('', customers.ship_first_name, ' ', customers.ship_last_name) AS ship_name, 
			customers.ship_city AS ship_city, customers.ship_state AS ship_state, customers.ship_zipcode AS ship_zipcode, 
			concat_ws('', customers.bill_first_name, ' ',customers.bill_last_name) AS bill_name, customers.bill_address, 
			customers.bill_city, customers.bill_state, customers.bill_zipcode,
			items.id AS item_id, categories.name as category_name, items.price as item_price, orders.quantity,
			customers.total_price, customers.status
			FROM customers
			LEFT JOIN orders
			ON customers.id = orders.customers_id
			LEFT JOIN items
			ON orders.items_id = items.id
			LEFT JOIN categories
			ON items.category_id = categories.id
			WHERE orders.id = ?";
		
		$values = $id;
		return $this->db->query($query, $values)->result_array();
	}
}
?>
