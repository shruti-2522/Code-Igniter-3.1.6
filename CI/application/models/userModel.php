<?php

class UserModel extends CI_model
{

 public function add($array)
 {
  $this->db->insert('tbluser',$array);

 }


 public function show()
 {
 	$q=$this->db->select()
 	            ->from('tbluser')
 	            ->get();
 	            return $q->result();

 }

 public function del($id)
 {

 	return $this->db->delete('tbluser',['id'=>$id]);
 }

 public function findUser($id)
 {
   $q=$this->db->select(['name','addr','mno','id'])
             ->where('id',$id)
             ->get('tbluser');
             return $q->row();
 }

 public function editdata($id,Array $user)
 {

 	return $this->db->where('id',$id)
 	                 ->update('tbluser',$user);
 }

}

?>