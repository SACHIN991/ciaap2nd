<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct(){
			$this->load->database();
		}


	public function register($password)
	{
       $name=$this->input->post('name');
       $email=$this->input->post('email');
		$username=$this->input->post('username');
      $data = array('name' => $name,
                      'email' => $email ,
                      'username'=>$username,
                      'password' => $password );

      
      $this->db->insert('users',$data);

	}
}