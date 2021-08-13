<?php


class TabelaAdmin_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}	
	public function returnProjetos(){
		$query= $this->db->get('projeto');
		return $query->result();
	}
	public function returninfoPDF(){

		$this->db->select('*');
		$this->db->from('participante');
		$this->db->join('projeto', 'participante.projeto_id_fk = projeto.id');
		$query = $this->db->get();
		return $query->result();

	
	}
	public function deletarProjeto($id){
   
    	$this->db->where('projeto_id_fk',$id);
		$this->db->delete('participante');
		$this->db->where('id',$id);
		$this->db->delete('projeto');
		
		return $this->session->set_flashdata('msgdeletar', 'Projeto '.$id.'  deletado.');

		

	}
	
}
