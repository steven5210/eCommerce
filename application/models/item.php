<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class item extends CI_model {
	public function search_by_name($data)
	{
		$query = "SELECT * FROM items WHERE name = ?";
		$value = $data;
		return $this->db->query($query, $value) -> result_array();

	}
}
?>