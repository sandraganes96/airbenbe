<?php
class c_host_home extends CI_Controller {

	public function index()
	{
		$data["title"] = "Sewakan rumah, apartemen, atau kamar Anda di AirBeNBe";
		$this->load->view('header',$data);
		$this->load->view('host_home');
	}
}
