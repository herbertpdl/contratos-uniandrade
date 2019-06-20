<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerarpdf extends CI_Controller {

	public function index()
	{

		$data['view'] = 'tec_coop';

		$this->load->view('_layout', $data);
	}
}
