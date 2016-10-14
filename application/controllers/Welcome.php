<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// $this->load->library('session');
		$this->load->model('blog_model');

	}
	public function index()
	{
		$rs = $this->blog_model->get_all();
		$data = array("blogs"=>$rs);
		$this->load->view('index',$data);
	}

}
