<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{

		$this->load->view('loginAdmin');

	}

	public function autenticar(){
		$this->load->model("Login_model");
		$codigo = $this->input->post("codigo");
		$senha= $this->input->post("senha");
		$admin =$this->Login_model->logar($codigo,$senha);
		if($admin){
			$this->session->set_userdata("logado",$admin);
			$this->session->set_flashdata("success","logado com sucesso");
			$_SESSION['timestart']=time();

		}else{
			$this->session->set_flashdata("danger","senha ou codigo invalido");
		}
		redirect('login');
	}
	public function logout(){
		$this->session->unset_userdata("logado");
		$this->session->set_flashdata("success","deslogado com sucesso");
		redirect(base_url());
	}
	


}
