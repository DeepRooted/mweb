<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('blog_model');
		$this->load->model('comment_model');
	}
	// public function index()
	// {
	// 	$this->load->view('view_admin');
	// }
	public function view($blog_id)
	{
		
		//需要两次查询user blog
		$blog = $this->blog_model->get_by_id($blog_id);
		// //第二次查询 blog的comments 
		$comments = $this->comment_model->get_by_blog_id($blog_id);
		$data = array('blog'=>$blog,
			'comments'=>$comments
			);
		$this->load->view('view_admin',$data);
	}

}
