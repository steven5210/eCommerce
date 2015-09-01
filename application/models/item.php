<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Model {

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
}

?>