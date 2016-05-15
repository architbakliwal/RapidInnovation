<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sub_category_controller extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->helper(array('form', 'url'));
   $this->load->library('form_validation');
   $this->load->model('sub_category','',TRUE);
   if(!$this->session->userdata('logged_in'))
   {
   redirect('login');
   }
$logged_in=$this->session->userdata('logged_in');
if($logged_in['su']!="1"){
exit('Permission denied');
return;
}		
 }

 function index($limit='0')
 {
   $data['result'] = $this->sub_category->category_list($limit);
	$data['title']="Sub category list";
   $data['limit']=$limit;
   $this->load->view($this->session->userdata('web_view').'/header',$data);
   $this->load->view($this->session->userdata('web_view').'/sub_category_list',$data);
  	$this->load->view($this->session->userdata('web_view').'/footer',$data);
 }


function remove_category($scid){
	$this->sub_category->remove_category($scid);
	redirect('sub_category_controller', 'refresh');
}

// add new category form
function add_new(){
	$data['title']="Add Sub Category";
	$this->load->view($this->session->userdata('web_view').'/header',$data);
	$this->load->view($this->session->userdata('web_view').'/add_sub_category',$data);
	$this->load->view($this->session->userdata('web_view').'/footer',$data);
	}

// insert group into database
function insert_category(){
	//echo "<pre>"; print_r($_POST);
	// form validation rules
	$this->form_validation->set_rules('categoryname', 'Sub Category Name', 'required');
	if ($this->form_validation->run() == FALSE)
		{
			$this->add_new();
		}
		else
		{
		$data['title']="Add Sub Category";
		$data['resultstatus'] = $this->sub_category->insert_category();
		$this->load->view($this->session->userdata('web_view').'/header',$data);
		$this->load->view($this->session->userdata('web_view').'/add_sub_category',$data);
		$this->load->view($this->session->userdata('web_view').'/footer',$data);
		}
	}
	
	// edit the category form
	public function edit_category($scid,$resultstatus=''){
		$data['title']="Edit sub category";
		$data['category'] = $this->sub_category->get_category($scid);
		$data['scid'] = $scid;
		$data['resultstatus'] = $resultstatus;
		$this->load->view($this->session->userdata('web_view').'/header',$data);
		$this->load->view($this->session->userdata('web_view').'/edit_sub_category',$data);
		$this->load->view($this->session->userdata('web_view').'/footer',$data);
		}
		
		
	// update category in database
	function update_category($scid){
		// form validations
		$this->form_validation->set_rules('categoryname', 'Sub Category Name', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->edit_category($scid);
			}
		else{
			$resultstatus = $this->sub_category->update_category($scid);
			$this->edit_category($scid,$resultstatus);
			}
		}	
}

?>


















