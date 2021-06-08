<?php

class User extends MY_Controller
{
  public function data()
  {

  $this->load->library('email');
  $this->email->show();
 $this->test();


/*
   //load libreary
    $this->load->library('test');
    $this->test->showDetails();

   //extending helper
    $this->load->helper('array');
    $arr=['Fname'=>'Shruti','Lname'=>'Amrutkar'];
    echo element("Fname",$arr,'Not Found');
    show();*/


   //custom helper
  	/*$this->load->helper('xyz');
  	test();*/

  	//call model
  	$this->load->model('UserModel','u1');
  	$data['users']=$this->u1->getUserData();
  	//print_r($data);

  	//call view
  	$this->load->view('Users/userlist',$data);
  }
}


?>