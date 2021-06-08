<?php

class loginModel extends CI_Model
{

 public function isValidate($username,$password)
 {
 	$q=$this->db->where(['username'=>$username,'password'=>$password])
                ->get('user');
     
     //select * from user where username=$username and password=$password

                if($q->num_rows())
                {
                    //get id
                 return $q->row()->uid;
                }
                else
                {
                    return false;
                }
 }


public function articlelist()
{
 $id=$this->session->userdata('id');

 $q=$this->db->select('article_title')
          ->from('articles')
          ->where(['uid'=>$id])
          ->get();
          return $q->result();
       

}


}


?>