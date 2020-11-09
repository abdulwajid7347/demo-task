<?php
   class Timeline_model extends CI_Model {
       function __construct()
       {
           parent::__construct();

       }


 public function getposts()
 {
     //die(print_r($this->session->userdata('id')));

     $user_id=$this->session->userdata('id');
     //die(print_r($user_id,true));
       $this->db->order_by("id", "DESC");
      $query=$this->db->get_where("posts", ['user_id'=>$user_id]);


     //$query=$this->db->query("SELECT * FROM posts WHERE user_id= '$user_id' ORDER BY id DESC ");
     $result = $query->result_array();
     //die(print_r($result));
       return  $result;

 }

 public function addpost($data)
 {

     $this->db->insert('posts',$data);
     return $this->db->insert_id();
 }


    }





  ?>
