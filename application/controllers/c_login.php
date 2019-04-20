<?php
class c_login extends CI_Controller {

	public function index()
	{
		$data["title"] = "Login";
		$this->load->view('header',$data);
		$this->load->view('login');
	}
}
