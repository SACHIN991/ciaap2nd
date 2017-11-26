<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

public function create()
	{
	    $this->form_validation->set_rules('title', 'title', 'required');
	    $this->form_validation->set_rules('body', 'body', 'required');
	$data['title']= "create posts";
	  if ($this->form_validation->run() == FALSE)
                {
                      	$this->load->view('templates/header');
						$this->load->view('posts/create',$data);
						$this->load->view('templates/footer');
               }
                
                else
                {
                        $this->post_model->create();
                         $this->session->set_flashdata('postcreate','post created successfully'); 
                        redirect('posts/index');
                }
 	}     


 	public function index()
 	          {
 	          	echo $this->session->flashdata('postcreate');
 	          	$data['posts'] = $this->post_model->get_posts();
 	          	$data['title'] = "all posts";

 	          	$this->load->view('templates/header');
				$this->load->view('posts/index',$data);
				$this->load->view('templates/footer');

 	          	
 	          }  

 	public function view($id)
 	        {
 	        		$data['post'] = $this->post_model->get_post($id);
 	        		$data['title'] = "single post";
 	        		
 	        		$this->load->view('templates/header');
				$this->load->view('posts/view',$data);
				$this->load->view('templates/footer');

 	        	
 	        }        

}