<?php

class User extends MY_Controller
{
  public function index()
  {
  	
  	//load helper:
  

  	$this->load->view('Users/articlelist');
  }

}

?>