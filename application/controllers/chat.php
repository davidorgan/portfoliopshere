<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chat extends CI_Controller {
		

	public function index()
	{
		
		$this->view_data['page_content'] = 'view_chat';
		$this->load->view('welcome_message');
	}
}
