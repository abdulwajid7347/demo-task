<?php

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_loggedin($this);
        $this->load->model('Auth_model');
        // $this->load->helper('common');
        //helper('helpers/common');
        // $this->load->library('session');
        //die(print_r($this->session->userdata(),true));
        // if($this->session->userdata('id'))
        // {
        //     redirect('timeline');
        // }

    }

    public function index() {
        $this->load->view('auth/login');

    }


    public function login() {
        $row= $this->Auth_model->login();
// die('aaaaaaaaaaaaaaaaaa');
// if(count($row) > 0){
//     die('rrrrrrrrrrrrrrrrrrrrrrrrr');
// }
// die('pppppppppppppppppppp');
        //die(print_r($row));

        if (sizeof($row)> 0){

            //$this->session->set_userdata('id','$user_id');
             $the_session = array('id' => $row['0']['id'], 'email' => $row['0']['email'], 'rollno' => $row['0']['rollno'],'lastname' => $row['0']['lastname']);
            $this->session->set_userdata($the_session);


            redirect('timeline');
        }else{
            //die("vshxjjsx");
            $this->load->view('auth/login');
        }
    }

    public function signup() {
        $this->load->view('auth/signup');
    }



     public function savedata()

		{
            //die("vwhuvwuxh");

		    $data['email']=$this->input->post('email');
			$data['firstname']=$this->input->post('firstname');
			$data['lastname']=$this->input->post('lastname');
         $data['rollno']=$this->input->post('rollno');
         $data['gender']=$this->input->post('gender');
         $data['Address']=$this->input->post('Address');
         $data['City']=$this->input->post('City');
         $data['Country']=$this->input->post('Country');
         $data['Telephone']=$this->input->post('Telephonenumber');
			$user=$this->Auth_model->savedata($data);
            //die(print_r($user,true));
			if($user>0){
			        redirect('auth');
			}
			else{
					echo "Insert error !";
			}
		}


    public function logout() {
        $this->session->unset_userdata(['id','email','rollno','lastname']);
        $this->session->sess_destroy();
        redirect('auth');
   }











}


?>
