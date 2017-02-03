 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         // $this->load->library(array('form_validation'));
         // $this->load->helper(array('url','form'));
         $this->load->model('user_model'); //call model
     }
 
     public function index() {
 
         $this->form_validation->set_rules('pincode', 'PINCODE','required|max_length[32]|min_length[6]|trim');
         $this->form_validation->set_rules('username', 'USERNAME','required|max_length[32]|min_length[6]|trim');
         $this->form_validation->set_rules('email','EMAIL','required|valid_email');
         $this->form_validation->set_rules('password','PASSWORD','required|max_length[32]|min_length[8]|trim');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
			 $this->load->view("header");
			 $this->load->view("navbar");
             $this->load->view('user_registration_view');
			 $this->load->view("footer");
         }else{
 
             //UserName,UserID,UserEmail,UserPass,UserPass2,ChaTestRemain,UserPoint,UserAvailable,tj
			 //$uname,$uname,$email,$new_password,$new_password2,'2','0','1',$code
			 //strtoupper(substr(md5($this->input->post("new_pw")),0,19));
			 $data['UserPass2']   	=   strtoupper(substr(md5($this->input->post('pincode')),0,19));
             $data['UserName'] 		=   $this->input->post('username');
			 $data['UserID'] 		=   $this->input->post('username');
			 $data['tj'] 			=	md5(uniqid(rand()));
			 $data['ChaTestRemain']	=	'2';
			 $data['UserPoint']		=	'0';
			 $data['UserAvailable']	=	'1';
             $data['UserEmail']  	=   $this->input->post('email');
			 $data['UserPass']		=   strtoupper(substr(md5($this->input->post('password')),0,19));
 
             $this->user_model->daftar($data);
             
             $pesan['message'] =    "Pendaftaran berhasil";
             
             // $this->load->view('user_registration_view',$pesan,"refresh");
			 redirect(base_url('auth'),"refresh");
			 $this->load->view("header");
			 $this->load->view("navbar");
             // $this->load->view('user_registration_view');
			 $this->load->view("footer");			 
         }
     }
 }