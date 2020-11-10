<?php
   class Myprofile_model extends CI_Model {


    function __construct()
    {
        parent::__construct();
    }

  public function showprofiledata()
  {

      $user_id=$this->session->userdata('id');
      $query=$this->db->get_where("registration", ['id'=>$user_id]);
      //die(print_r($query));
      $result = $query->result_array();
      //die(print_r($result));
        return  $result;

  }
  public function updatedata($data)
{
    //$this->db->where('id', $id);
     $this->db->insert('registration',$data);
     return $this->db->insert_id();
}



  }


  ?>
