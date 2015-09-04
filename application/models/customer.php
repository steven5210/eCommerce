<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Model {

	public function __construct()
	{
	    parent::__construct();
	    // Your own constructor code
	}
	public function buy($post)
	{
		$query='INSERT INTO customers(total_price,status, ship_first_name,ship_last_name,ship_address,address2,ship_zipcode,ship_state,ship_city,bill_first_name,bill_last_name,bill_address,bill_city,bill_state,bill_zipcode,created_at,updated_at) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,now(),now())';
		$values=array($post['total_price'],"pending",$post['first_name'],$post['last_name'],$post['address'],$post['address2'],$post['zipcode'],$post['state'],$post['city'],$post['bill_first_name'],$post['bill_last_name'],$post['bill_address'],$post['bill_city'],$post['bill_state'],$post['bill_zipcode']);
		$this->db->query($query,$values);
		$cart= $this->session->userdata('cart');
		$cust_id=$this->db->insert_id();
		foreach ($cart as $id => $quantity) {
			$query="INSERT INTO orders(customers_id, items_id, quantity) VALUES(?,?,?)";
			$values=array($cust_id,$id,intval($quantity));
			$this->db->query($query,$values);
			$query2="UPDATE items SET inventory = inventory - ? WHERE id = ?";
			$values2=array(intval($quantity), $id);
			$this->db->query($query2,$values2);
		}
	}

	public function validate_order($post)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name','trip|required|alpha');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trip|required|alpha');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('state', 'State', 'trim|required|alpha|exact_length[2]');
		$this->form_validation->set_rules('city', 'City', 'trip|required');
		$this->form_validation->set_rules('zipcode', 'Zip Code', 'trim|required|numeric|exact_length[5]');
		$this->form_validation->set_rules('bill_first_name', 'Billing First Name','trip|required|alpha');
		$this->form_validation->set_rules('bill_last_name', 'Billing Last Name', 'trip|required|alpha');
		$this->form_validation->set_rules('bill_address', 'Billing Address', 'required');
		$this->form_validation->set_rules('bill_state', 'Billing State', 'trim|required|alpha|exact_length[2]');
		$this->form_validation->set_rules('bill_city', 'Billing City', 'trip|required');
		$this->form_validation->set_rules('bill_zipcode', 'Billing Zip Code', 'trim|required|numeric|exact_length[5]');
		$this->form_validation->set_rules('cardnumber', 'Card Number', 'trim|required|numeric');
		$this->form_validation->set_rules('securitycode', 'Security Code', 'trim|required|exact_length[3]|numeric');
		if($this->form_validation->run())
		{
			return 'valid';
		}
		else
		{ 
			return validation_errors();
		}
	}
}
?>