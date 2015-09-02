<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Model {

	public function __construct()
	{
	    parent::__construct();
	    // Your own constructor code
	}
	public function buy($post)
	{
		$query='INSERT INTO customers(first_name,last_name,address,address2,zip,state,city,created_at,updated_at) VALUES(?,?,?,?,?,?,?,now(),now())';
		$values=array($post['first_name'],$post['last_name'],$post['address'],$post['address2'],$post['zipcode'],$post['state'],$post['city']);
		return $this->db->query($query,$values);
	}
}
?>