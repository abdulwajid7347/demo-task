<?php

   class Timeline extends CI_Controller {

       public function __construct() {
          parent::__construct();
         //helper('helpers/common');
         is_loggedin($this);
          $this->load->model('Timeline_model');

      }

       public function index() {
          // die(print_r($_SESSION,true));
           $row= $this->Timeline_model->getposts();
           //die(print_r($row));
           $data['posts'] = $row;
           $this->load->view('timeline/home',$data);

      }

       public function addpost()
       {
           $user_id1=$this->session->userdata('id');
           //die(print_r($user_id1,true));
           $data['user_id']=$user_id1;
           $data['text']=$this->input->post('text');
           //die(prit_r($data));
           //$result['postslist']=$data;
           //die(print_r($data));
           $result=$this->Timeline_model->addpost($data);
           redirect('timeline');
            //$this->load->view('timeline/home',$data);


       }


    }


?>
