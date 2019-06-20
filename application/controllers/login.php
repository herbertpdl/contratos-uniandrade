<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
		
		parent::__construct();
	}

	public function index()
	{

		if(isset($_POST['senha'])){
			$this->load->model('usuario_model');
			if($this->usuario_model->login($_POST['username'],md5($_POST['senha']))){
				redirect('gerarpdf');
			}else{
				redirect('login');
			}
		}

		$this->load->view('login');
	}
}
