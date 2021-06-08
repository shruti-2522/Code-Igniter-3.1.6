<?php

class UserModel extends MY_Model
{

	public function getUserData()
	{
		//to load library
		/*$this->load->library(array('form_validation'),('email'));
		$this->form_validation->fb();*/

		//to load Database
         $this->load->database();
         $this->db->where("uid",2);
         $q=$this->db->get("userdata");
         $this->test();
         //select * form userdata where uid=1;
         //$q=$this->db->query("Select * from userdata");
         
         //result() return array of objects
          return $q->result_array();
       








		/*return [
		['Fname'=>'Shruti','Lname'=>'Amrutkar'],
		['Fname'=>'Bhagyashree','Lname'=>'Badgujar'],
     ];*/
	}
}
?>