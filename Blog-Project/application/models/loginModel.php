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


public function articlelist($limit,$offset)
{
 $id=$this->session->userdata('id');

 $q=$this->db->select()
          ->from('articles')
          ->where(['uid'=>$id])
          ->limit($limit,$offset)
          ->get();
          return $q->result();
       

}

public function num_rows()
{
    $id=$this->session->userdata('id');

 $q=$this->db->select()
          ->from('articles')
          ->where(['uid'=>$id])
          ->get();
          return $q->num_rows();
       
}


public function add_articles($array)
{
    return $this->db->insert('articles',$array);

}


public function del($id)
{
    return $this->db->delete('articles',['id'=>$id]);
}

public function findArticle($article_id)
{
  $q=$this->db->select(['title','body','id'])
            ->where('id',$article_id)
            ->get('articles');
            return $q->row();
}



public function update_article($articleid,Array $artiicle)
{
  return $this->db->where('id',$articleid)
           ->update('articles',$artiicle);
}
}


?>