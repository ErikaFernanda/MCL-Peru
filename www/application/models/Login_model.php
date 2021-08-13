<?php


class Login_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}	
	public function logar($codigo,$senha){
		$this->db->where("codigo",$codigo);
		$this->db->where("senha",$senha);
		$admin =$this->db->get("admin")->row_array();
		return $admin;
	}

	
}
