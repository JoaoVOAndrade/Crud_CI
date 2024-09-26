<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mygames extends CI_Controller {

	public function index()
	{
		permission();
		$this->load->model("users_model"); 
		$data["users"] = $this->users_model->show();
		$data["title"] = "My Games"; 
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/users', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

}
