<?php

class Admin extends MY_Controller
{
  


  public function __construct()
  {
    parent::__construct();
     if(!$this->session->userdata('id'))
    return redirect('Admin/index');
  }




public function index()
  {
    //FORM VALIDATION
   $this->load->library('form_validation');

   $this->form_validation->set_rules('uname',"User Name",'required|alpha');
   $this->form_validation->set_rules('password',"Password",'required|max_length[12]');
   $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');


   if($this->form_validation->run())
   {
    //Received value:
    $uname=$this->input->post('uname');
    $pass=$this->input->post('password');
    //echo "Username is:".$uname."<br>"."Password is:".$pass;
    $this->load->model('loginModel');
    $id=$this->loginModel->isValidate($uname,$pass);
    if($id)
    {
     
       $this->session->set_userdata('id',$id);
       return redirect('Admin/welcome');
      
    }
    else
    { 
      //logic fail
      echo "Details not match";

    }

   }
   else
   {
    $this->load->view('Admin/Login');
   }
  }


 public function welcome()
 {
  

  $this->load->model('loginModel','ar');
  $articles=$this->ar->articlelist();

  $this->load->view('Admin/dashboard',['articles'=>$articles]);
 }


 public function addUser()
 {

 }

 public function delUser()
 {

 }
 public function editUser()
 {

 }


}







	?>