<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data["title"] = "Persewaan Liburan, Rumah, Pengalaman & Tempat - AirBeNBe";
		$this->load->view('header',$data);
		$this->load->view('homepage');
	}
}
