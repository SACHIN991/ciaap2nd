<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

	public function __construct(){
			$this->load->database();
		}

		public function create()
		{
			$title = $this->input->post('title');
			$body =  $this->input->post('body');
			echo $title;
			echo $body;
			$data =array(
				"title"=>$title,
				"body"=>$body);
			$this->db->insert('posts', $data);
			
		}
		public function get_posts()
		{
			$this->db->select('*');
			$query = $this->db->get('posts');
			return  $query->result_array();
		}
        
        public function get_post($id)
        {
        	$this->db->where('id', $id); 
        	$query = $this->db->get('posts');
        	return  $query->row_array();
        }
	}