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
		$values=array($item['quantity'], $item['id']);
		$data= $this->db->query($query, $values)->row_array();
		$data['quantity']=$item['quantity'];

		return $data;
	}
	public function get_product($id)
	{
		$query = "SELECT items.id, items.name, items.price, items.price, items.description
				 FROM items
				 WHERE items.id = ?";
		$values = array($id);
		$product = $this->db->query($query, $values)->row_array();
		return $product;
	}
	// public function get_all_items()
	// {
	// 	return $this->db->query("SELECT items.id, items.name AS item_name, items.description, items.price, items.created_at, items.updated_at, items.category_id AS itemsCategory_ID
	// 		FROM ITEMS")->result_array();
	// }
	public function get_all_categories()
	{
		return $this->db->query("SELECT * FROM categories") ->result_array();
	}
	public function search_by_name($data)
	{
		$query = "SELECT * FROM items WHERE name = ?";
		$value = $data;
		return $this->db->query($query, $value) -> result_array();
	}
	public function display_all()
	{
		return $this->db->query("SELECT items.id, items.name, items.price, images.image FROM items LEFT JOIN images ON items.id = images.item_id") -> result_array();
	}
	public function sort_lowest()
	{
		return $this->db->query("SELECT * FROM items GROUP BY price DESC") -> result_array();
	}

	public function sort_highest()
	{
		return $this->db->query("SELECT * FROM items GROUP BY price ASC") -> result_array();
	}
}
?>