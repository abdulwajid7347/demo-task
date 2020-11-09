<?php

   class Myprofile extends CI_Controller {

       public function __construct() {
          parent::__construct();
         //helper('helpers/common');
         // is_loggedin($this);
         //  $this->load->model('Timeline_model');
           $this->load->model('Myprofile_model');

      }

       public function index() {


           $this->load->view('timeline/profile');
      }

      public function showprofile()
      {
          $row= $this->Myprofile_model->showprofiledata();
          //die(print_r($row));
           $genders= ['m'=>'', 'f'=> ''];
           $genders[$row[0]['gender']]= 'checked';
          $data['profile']=$row[0];
          $data['genders'] = $genders;
  //die(print_r($data['profile'][$owners]));

          //die(print_r($data));
          $this->load->view('timeline/profile',$data);


      }
      public function updatedata()
      {


           die(print_r('aaaaaaaaaaaaaaa'));
      }





    }


?>
