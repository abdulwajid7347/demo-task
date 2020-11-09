<?php
   class Auth_model extends CI_Model {


    function __construct()
    {
        parent::__construct();
    }


       public function login()
       {
           //$this->db->where('email',$email);
           //$this->db->where('rollno',$rollno);
          // $query = $this->db->get_where('registration',(['email' => $email],['rollno' => $rollno]));
           // $this->db->select('*');
            // $email      = 'email';
            // $primaryKey = 'id';
            // $rollno = 'rollno';
            //  $this->db->from('registration');
            //  $this->db->where('email=',$email);
            //  $this->db->where('rollno=',$rollno);
            // $query=$this->db->get();
   	   // $query = $this->db->get('registration');
       $email=$this->input->post('email');
       $rollno=$this->input->post('rollno');
       $query=$this->db->get_where("registration", ['email'=>$email,'rollno'=>$rollno]);
       $result = $query->result_array ();
   	     return  $result;

       }


       public function savedata($data)
	{
          $this->db->insert('registration',$data);
          return $this->db->insert_id();
	}


  }


  ?>
