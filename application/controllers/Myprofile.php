<?php

   class Myprofile extends CI_Controller {

       public function __construct() {
          parent::__construct();
         //helper('helpers/common');
         // is_loggedin($this);
         //  $this->load->model('Timeline_model');
         // is_loggedin($this);
           $this->load->model('Myprofile_model');
            //$this->load->model('Auth_model');

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

          
          // $this->db->set('status', $status);
          //
          //
          		    $data['email']=$this->input->post('email');
          			$data['firstname']=$this->input->post('firstname');
          			$data['lastname']=$this->input->post('lastname');
                   $data['rollno']=$this->input->post('rollno');
                   $data['gender']=$this->input->post('gender');
                   $data['Address']=$this->input->post('Address');
                   $data['City']=$this->input->post('City');
                   $data['Country']=$this->input->post('Country');
                   $data['Telephone']=$this->input->post('Telephonenumber');


          			$user=$this->Myprofile_model->updatedata($data);
                      //die(print_r($user,true));
          			if($user>0){
                        echo "update successfully";
          			        //redirect('auth');
          			}
          			else{
          					echo "Insert error !";
          			}

      }





    }


?>
