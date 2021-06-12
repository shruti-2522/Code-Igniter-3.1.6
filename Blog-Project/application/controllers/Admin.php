<?php

class Admin extends MY_Controller
{
  


  public function __construct()
  {
    parent::__construct();
     if($this->session->userdata('uid'))
      return redirect('Admin/welcome');
 
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
      $this->session->set_flashdata('Login_Failed','Invalid Username and Password!!');
      return redirect('Admin/index');

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
  $this->load->library('pagination');
   
   $config=[
    'base_url'=>base_url('Admin/welcome'),
    'per_page'=>2,
    'total_rows'=>$this->ar->num_rows(),


    'full_tag_open'=>"<ul class='pagination'>",
    'full_tag_close'=>"</ul>",

    'next_tag_open'=>"<li>",
    'next_tag_close'=>'</li>',

    'prev_tag_open'=>"<li>",
    'prev_tag_close'=>'</li>',

    'num_tag_open'=>"<li>",
    'num_tag_close'=>'</li>',

    'cur_tag_open'=>"<li class='active'><a>",
    'cur_tag_close'=>'</a></li>'



   ];

 $this->pagination->initialize($config);
 $articles=$this->ar->articlelist($config['per_page'],$this->uri->segment(3));


  $this->load->view('Admin/dashboard',['articles'=>$articles]);
 }


 public function logout()
 {
  $this->session->unset_userdata('id');
   redirect('/admin/index', 'refresh');
 }


 public function addUser()
 {
  $this->load->view('Admin/add_article');
 }

 public function delUser()
 {
  $id=$this->input->post('id');

  $this->load->model('loginModel','delarticle');
    if($this->delarticle->del($id))
    {
       $this->session->set_flashdata('Msg','Articles Deleted Successfully!!');
        $this->session->set_flashdata('msg_class','alert-success');
      
    }
    else
    {
       $this->session->set_flashdata('Msg',' Data Not Deleteted!!');
        $this->session->set_flashdata('msg_class','alert-danger');

   }
    return redirect('Admin/welcome');
  
 }

 public function editUser($id)
 {

   $this->load->model('loginModel');
   $rt=$this->loginModel->findArticle($id);
   $this->load->view('Admin/edit_article',['article'=>$rt]);
 }

 public function updateArticle($article_id)
 {
     if($this->form_validation->run('add_article_rules'))
  {
      $post=$this->input->post(); 
      //$articleid=$post['article_id'];
      //unset($articleid);
      $this->load->model('loginModel','editupdate');
      if($this->editupdate->update_article($article_id,$post))
      {
         $this->session->set_flashdata('Msg','Article Update successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('Msg','Articles not update Please try again!!');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('Admin/welcome');
     }
  else
  {
    $this->edituser($article_id);
  }


  }


public function userValidation()
{
  if($this->form_validation->run('add_article_rules'))
  {
    //using post() we can get all the values from form
    $post=$this->input->post();
    $this->load->model('loginModel','useradd');
    if($this->useradd->add_articles($post))
    {
       $this->session->set_flashdata('Msg','Articles Added Successfully!!');
        $this->session->set_flashdata('msg_class','alert-success');
      
    }
    else
    {
       $this->session->set_flashdata('Msg',' Data Not inserted!!');
        $this->session->set_flashdata('msg_class','alert-danger');

  }
    return redirect('Admin/welcome');
  }
  else
  {
    $this->load->view('Admin/add_article');
  }

}

}







	?>