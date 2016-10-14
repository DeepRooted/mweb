<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_model extends CI_Controller {

	public function get_by_blog_id($blog_id){
		return $this->db->get_where('t_commons',array('blog_id'=>$blog_id))->result();
	}
	

}
