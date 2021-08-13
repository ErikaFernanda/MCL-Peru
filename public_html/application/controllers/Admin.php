<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function __construct() {
        parent::__construct();
        $this->verificar_sessao();
        if(time()-$_SESSION['timestart']>1900){
        	redirect('login/logout');
        }
    }
	public function verificar_sessao(){
		if($this->session->userdata('logado')==false){
			redirect('login');
		}
	}
	public function index()
	{

		$this->load->model('TabelaAdmin_model');
		$dados['projetos']=$this->TabelaAdmin_model->returnProjetos();
		$this->load->view('admin',$dados);
		$this->load->view('tabela');
// 		redirect('admin');

	}
	public function gerarPDF(){
		$this->load->model('TabelaAdmin_model');
		$dados['projetos']=$this->TabelaAdmin_model->returninfoPDF();
		$this->load->view('gerarPDF',$dados);
	}
	public function infoPDF(){
		$this->load->model('TabelaAdmin_model');
		$dados['projetos']=$this->TabelaAdmin_model->returninfoPDF();
		$this->load->view('infoPDF',$dados);
	}
	public function excluirProjeto(){
		$this->load->model('TabelaAdmin_model');
		$id=$this->input->get('id');
		$this->TabelaAdmin_model->deletarProjeto($id);

        redirect('admin');
		
	}
	public function editarPainel(){
		$this->load->model('Painel_model');
		$id='1';
		$dados['painel']=$this->Painel_model->receberIdURL($id);
		$this->load->view('admin');
		$this->load->view('editarPainel',$dados);
		
	
	}

	public function atualizarPainel(){
		$this->load->model('Painel_model');
		$this->Painel_model->id=$_POST["id"];
		$this->Painel_model->texto1=$_POST['texto1'];
		$this->Painel_model->texto2=$_POST['texto2'];
		$this->Painel_model->a1=$_POST['a1'];
		$this->Painel_model->a2=$_POST['a2'];
		$this->Painel_model->a3=$_POST['a3'];
		$this->Painel_model->a4=$_POST['a4'];
		$this->Painel_model->b1=$_POST['b1'];
		$this->Painel_model->b2=$_POST['b2'];
		$this->Painel_model->b3=$_POST['b3'];
		$this->Painel_model->b4=$_POST['b4'];

		$this->Painel_model->atualizarPainel();

        $this->load->view('admin');
        redirect('admin');
	}


}
