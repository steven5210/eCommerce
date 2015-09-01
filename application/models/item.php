<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_model {

	public function __construct()
	{
	    parent::__construct();
	    // Your own constructor code
	}
	public function fetch_item($item)
	{
		
		$query='SELECT items.name, items.price, items.price*? AS total, categories.title AS category FROM items
				JOIN categories ON items.category_id=categories.id
				WHERE items.id= ?';
		$values=array($item['quantity'], $item['id']);
		return $this->db->query($query, $values)->row_array();
	}
	public function search_by_name($data)
	{
		$query = "SELECT * FROM items WHERE name = ?";
		$value = $data;
		return $this->db->query($query, $value) -> result_array();

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