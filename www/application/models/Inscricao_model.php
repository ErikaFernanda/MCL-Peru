<?php


class Inscricao_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}	

	public function inserirProjeto(){
		$dados =array(
			"titulo"=>$this->titulo,
			"pais"=>$this->pais,
			"estado"=>$this->estado,
			"escola"=>$this->escola,
			"area"=>$this->area,
			"links"=>$this->links

		);
		
	
		return 	$this->db->insert('projeto',$dados);
		

	}
	public function inserirParticipante(){

		$dados=array(
			"projeto_id_fk"=>$this->projeto_id_fk,
			"nome"=>$this->nome,
			"cpf"=>$this->cpf,
			"email"=>$this->email,
			"idade"=>$this->idade,
			"telefone"=>$this->telefone,
			"tipoparticipante"=>$this->tipoparticipante,
			);
		
        
		
		$this->db->insert('participante',$dados);
		return $this->session->set_flashdata('mensagem', 'Parabéns , inscrição realizada com sucesso !!!.');
		

	}
	
}
