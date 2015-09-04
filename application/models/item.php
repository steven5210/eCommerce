<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_model {

	public function __construct()
	{
	    parent::__construct();
	    // Your own constructor code
	}
	public function fetch_item($item)
	{
		$query='SELECT items.name, items.price, items.id, items.price*? AS total, categories.name AS category FROM items
				JOIN categories ON items.category_id=categories.id
				WHERE items.id= ?';
		$values=array(intval($item['quantity']), $item['id']);
		$data= $this->db->query($query, $values)->row_array();
		$data['quantity']=$item['quantity'];

		return $data;
	}
	public function get_product($id)
	{
		$query = "SELECT items.id, items.name, items.price, items.description, categories.name AS category
				 FROM items
				 JOIN categories ON categories.id=items.category_id
				 WHERE items.id = ?";
		$values = array($id);
		$product = $this->db->query($query, $values)->row_array();
		return $product;
	}
	public function get_all_categories()
	{
		return $this->db->query("SELECT * FROM categories") ->result_array();
	}
	public function get_category($id)
	{
		$query="SELECT items.id, items.name, items.description, items.price, items.inventory, images.image, categories.name AS category_name FROM items 
				LEFT JOIN images ON items.id = images.item_id 
				LEFT JOIN categories ON categories.id = items.category_id
				WHERE categories.id=?
				ORDER BY items.price ASC";
		$values=$id;
		return $this->db->query($query, $values)->result_array();
	}
	public function display_all()
	{
		return $this->db->query("SELECT items.id, items.name, items.description, items.price, items.inventory, images.image, categories.name AS category_name FROM items 
								LEFT JOIN images ON items.id = images.item_id 
								LEFT JOIN categories ON categories.id = items.category_id
								ORDER BY items.price ASC") -> result_array();
	}
	public function search_by_name($data)
	{
		$query = "SELECT * FROM items WHERE name = ?";
		$value = $data;
		return $this->db->query($query, $value) -> result_array();
	}
// ADMIN SIDE PRODUCT DISPLAY ALL
	public function admin_display_all()
	{
		return $this->db->query("SELECT items.id, items.name, items.description, items.price, items.inventory, images.image, categories.name AS category_name, 
			(SELECT COUNT(*) FROM items) AS total
			FROM items
			LEFT JOIN images ON items.id = images.item_id 
			LEFT JOIN categories ON categories.id = items.category_id
			LIMIT 0, 5")->result_array();
	}
	public function sort_lowest()
	{
		return $this->db->query("SELECT * FROM items GROUP BY price DESC") -> result_array();
	}

	public function sort_highest()
	{
		return $this->db->query("SELECT * FROM items GROUP BY price ASC") -> result_array();
	}
// AJAX search
	public function update_view($search)
	{
		$query = "SELECT *,
			(SELECT COUNT(*) FROM items WHERE(items.name
				LIKE ?)) AS total
			FROM items
			WHERE (items.name LIKE ?)
			LIMIT ?, 15";
		$values = array($search['search'] . '%', $search['search'] . '%', intval($search['page_number']));
		return $this->db->query($query, $values)->result_array();
	}
	public function get_all_items()
	{
		return $this->db->query("SELECT *,
			(SELECT COUNT(*) FROM items) AS total
			FROM items
			LIMIT 0, 15")->result_array();
	}
}
?>