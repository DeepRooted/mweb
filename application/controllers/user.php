<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){//优先于每个函数之前运行
		parent::__construct();
		// $this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('blog_model');

	}
	public function index()
	{
		$this->load->view('index');
	}
	public function user_index()
	{
		$user_id = $this->input->get('writer');
		$writer = $this->user_model->get_by_id($user_id);
		$blogs = $this->blog_model->get_by_writer($user_id);
		$data = array(
			'writer'=>$writer,
			'blogs'=>$blogs
			);
		$this->load->view('user_index',$data);
	}
	public function login()
	{
		$this->load->view('login');
	}
	
	public function reg()
	{
		$this->load->view('reg');
	}
	public function do_reg(){
		$email = $this->input->post('email');
		$name = $this->input->post('name');
		$pwd = $this->input->post('pwd');
		$pwd2 = $this->input->post('pwd2');
		$gender = $this->input->post('gender');
		$province = $this->input->post('province');
		$city = $this->input->post('city');
		
		if($pwd == $pwd2){
			$data = array(
				'account'=>$email,
				'password'=>$pwd,
				'name'=>$name,
				'gender'=>$gender,
				'province'=>$province,
				'city'=>$city);
			$result = $this->user_model->save($data);
			if($result){
				
				redirect('user/login');
			}
			else{
				$this->reg();
			}
		}
		else{
			$this->reg();
		}

	}
	public function check_login()
	{
		//1.接受数据
		$email = $this->input->post('email');
		$pwd = $this->input->post('pwd');
		//2.访问数据库
		$user = $this->user_model->get_by_email_pwd($email,$pwd);
		if($user){
			$this->session->set_userdata('login_user',$user);
			redirect('user/user_index?writer='.$user->USER_ID);
		}
		else{
			$this->load->view('login');
		}
	}
	public function check_name(){
		$email = $this->input->get('email');
		$user = $this->user_model->get_by_email($email);
		if($user){
			echo "fail";
		}
		else{
			echo "success";
		}
	}
	public function logout(){
		$this->session->unset_userdata('login_user');
		redirect('welcome/index');  
	}
}
