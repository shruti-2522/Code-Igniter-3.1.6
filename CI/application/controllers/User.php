<?php

 class User extends CI_Controller
 {

   public function create()
   {
   	$this->load->view('add_user');
   }


   public function userValidation()
   {
  
    if($this->form_validation->run('add_user_rules'))
    {
    $post=$this->input->post();
     $this->load->model('userModel','addu');
      if($this->addu->add($post))
     {
       echo "Inserted";
     }
     else
     {
     	echo "Not Inserted";
      }
    }
     return redirect('User/show');
 }


   public function show()
   {
   	 $this->load->model('userModel','s');
   	 $user=$this->s->show();
   	$this->load->view('show_user',['users'=>$user]);
   }


   public function delUser()
   {
   	$id=$this->input->post('id');
   	$this->load->model('userModel','d');
   	if($this->d->del($id))
   	{
      return redirect('User/show');
   	}
   	else
   	{
   		echo "Not Deleted";
   	}

   }


   public function editUser($id)
   {
    $this->load->model('userModel','e');
    $rt=$this->e->findUser($id);

   	$this->load->view('edit_user',['user'=>$rt]);
   }


   public function updateUser($id)
   {
   if($this->form_validation->run('add_user_rules'))
    {
    $post=$this->input->post();
     $this->load->model('userModel','editu');
      if($this->editu->editdata($id,$post))
     {
       return redirect('User/show');
     }
     else
     {
     	echo "Not Updated";
      }
    }
    
  }

 
}

?>