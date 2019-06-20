<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{

	public $variable;

	public function _construct(){

		parent::_contruct();
	
	}

	public function login($username,$senha){

		$this->db->where('username',$username);
		$this->db->where('senha',$senha);
 		$q = $this->db->get('usuarios');
 		if($q->num_rows()>0){
 			return true;
 		}else{
 			return false;
 		}

	}

}
