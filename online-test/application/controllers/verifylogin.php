<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   $this->load->model("check_institute_id");
   // error_reporting(E_ALL);
   // print_r("1");
 }

 function index()
 {
    session_start(); //we need to call PHP's session object to access it through CI
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   // print_r("2");
   // print_r($this->form_validation->run());
   // die();

   if($this->form_validation->run() == FALSE)
   {
    // print_r("3");
   $data['organization_name'] = $this->session->userdata('organization_name');
	$data['contact_info'] = $this->session->userdata('contact_info');
	 $data['logo'] = $this->session->userdata('logo');
   
     //Field validation failed.&nbsp; User redirected to login page
    $data['title']="Login";
   $this->load->view($this->session->userdata('web_view').'/header',$data);
     $this->load->view($this->session->userdata('web_view').'/login_view',$data);
 $this->load->view($this->session->userdata('web_view').'/footer',$data);
   }
   else
   {
    // print_r("4");
     //Go to private area
     redirect('home', 'refresh');
   }

 }

 function check_database($password)
 {
    // print_r("2.5");
   //Field validation succeeded.&nbsp; Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->user->login($username, $password);
   
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->username,
         'gid'=> $row->gid,
         'su'=> $row->su
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     // print_r("2.6");
     // print_r($this->session);
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username and password or email address not verified');
     return false;
   }
 }
 
 	function super_log_into_admin($user_id,$institute_id){
 		if($this->session->userdata('su_logged_in')){
    $this->session->unset_userdata('su_logged_in');
    $result = $this->user->get_user($user_id,$institute_id);
    $sess_array = array(
     'id' => $result['id'],
     'username' => $result['username'],
     'gid'=> $result['gid'],
     'su'=> $result['su']
    );
    $this->session->set_userdata('logged_in', $sess_array);
    $result = $this->check_institute_id->check_ins_id($institute_id);
    $this->session->set_userdata('institute_id', $institute_id);
    $this->session->set_userdata('organization_name', $result['organization_name']);
    $this->session->set_userdata('contact_info', $result['contact_info']);
    $this->session->set_userdata('logo', $result['logo']);

    redirect('login/index/'.urlencode(base64_encode($institute_id)));
 			}
 	}

  function login_ext($user_id,$institute_id){
    $result = $this->user->get_user($user_id,$institute_id);
    $sess_array = array(
     'id' => $result['id'],
     'username' => $result['username'],
     'gid'=> $result['gid'],
     'su'=> $result['su']
    );
    $this->session->set_userdata('logged_in', $sess_array);
    $result = $this->check_institute_id->check_ins_id($institute_id);
    $this->session->set_userdata('institute_id', $institute_id);
    $this->session->set_userdata('organization_name', $result['organization_name']);
    $this->session->set_userdata('contact_info', $result['contact_info']);
    $this->session->set_userdata('logo', $result['logo']);

    redirect('login/index/'.urlencode(base64_encode($institute_id)));
  }
}
?>
