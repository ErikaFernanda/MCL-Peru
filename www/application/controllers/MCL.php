<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MCL extends CI_Controller {

	public $idprojeto;
	


	public function index()
	{
		
		$this->load->model('Painel_model');
		$dados['painel']=$this->Painel_model->returnPainel();
		$this->load->view('mcl',$dados);
		
		
		
	}
	
	
	public function salvarProjeto(){
	    
		$this->load->model('Inscricao_model');

		$titulo=$_POST['titulo'];
		$pais=$_POST['pais'];
		$estado=$_POST['estado'];
		$escola=$_POST['escola'];
		$area=$_POST['area'];
		$links=$_POST['links'];

        $spanteste=$_POST['spanteste'];

		$this->Inscricao_model->titulo=$titulo;
		$this->Inscricao_model->pais=$pais;
		$this->Inscricao_model->estado=$estado;
		$this->Inscricao_model->escola=$escola;
		$this->Inscricao_model->area=$area;
		$this->Inscricao_model->links=$links;
		
		
        if(!empty($spanteste)){
           
             
            
            return;
		
        }

		

		$this->Inscricao_model->inserirProjeto();
		$idprojeto = $this->db->insert_id();
		$this->setIdProjeto($idprojeto);
		 

		$nome1=$_POST['nome1'];
		$cpf1=$_POST['cpf1'];
		$email1=$_POST['email1'];
		$idade1=$_POST['idade1'];
		$telefone1=$_POST['telefone1'];
		$tipoparticipante1=$_POST['tipoparticipante1'];

		$nome2=$_POST['nome2'];
		$cpf2=$_POST['cpf2'];
		$email2=$_POST['email2'];
		$idade2=$_POST['idade2'];
		$telefone2=$_POST['telefone2'];
		$tipoparticipante2=$_POST['tipoparticipante2'];

		$nome3=$_POST['nome3'];
		$cpf3=$_POST['cpf3'];
		$email3=$_POST['email3'];
		$idade3=$_POST['idade3'];
		$telefone3=$_POST['telefone3'];
		$tipoparticipante3=$_POST['tipoparticipante3'];





		$this->Inscricao_model->nome=$nome1;
		$this->Inscricao_model->cpf=$cpf1;
		$this->Inscricao_model->email=$email1;
		$this->Inscricao_model->idade=$idade1;
		$this->Inscricao_model->telefone=$telefone1;
		$this->Inscricao_model->tipoparticipante=$tipoparticipante1;
		$this->Inscricao_model->projeto_id_fk=$idprojeto;


		$this->Inscricao_model->inserirParticipante();

		$this->Inscricao_model->nome=$nome2;
		$this->Inscricao_model->cpf=$cpf2;
		$this->Inscricao_model->email=$email2;
		$this->Inscricao_model->idade=$idade2;
		$this->Inscricao_model->telefone=$telefone2;
		$this->Inscricao_model->tipoparticipante=$tipoparticipante2;
		$this->Inscricao_model->projeto_id_fk=$idprojeto;

		$this->Inscricao_model->inserirParticipante();

		$this->Inscricao_model->nome=$nome3;
		$this->Inscricao_model->cpf=$cpf3;
		$this->Inscricao_model->email=$email3;
		$this->Inscricao_model->idade=$idade3;
		$this->Inscricao_model->telefone=$telefone3;
		$this->Inscricao_model->tipoparticipante=$tipoparticipante3;
		$this->Inscricao_model->projeto_id_fk=$idprojeto;

		$this->Inscricao_model->inserirParticipante();

		
		redirect('');
		
		

		
		

	}
	
	public function setIdProjeto($idprojeto){
		$this->idprojeto= $idprojeto;
	}

	

	

}
