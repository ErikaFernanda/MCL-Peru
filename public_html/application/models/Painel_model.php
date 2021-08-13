<?php


class Painel_model extends CI_Model{
	public $texto1;
	public $texto2;
	public $a1;
	public $a2;
	public $a3;
	public $a4;
	public $b1;
	public $b2;
	public $b3;
	public $b4;

	public function __construct(){
		parent::__construct();
	}	

	public function returnPainel(){
		$query= $this->db->get('painel');
		return $query->result();
	}
	public function receberIdURL($id){
		$this->db->where('id',$id);
		$query = $this->db->get('painel');
		return $query->row();
	}

	public function atualizarPainel(){
		$this->db->set('texto1',$this->texto1);
		$this->db->set('texto2',$this->texto2);
		$this->db->set('a1',$this->a1);
		$this->db->set('a2',$this->a2);
		$this->db->set('a3',$this->a3);
		$this->db->set('a4',$this->a4);
		$this->db->set('b1',$this->b1);
		$this->db->set('b2',$this->b2);
		$this->db->set('b3',$this->b3);
		$this->db->set('b4',$this->b4);

		$this->db->where('id',$this->id);
		$this->db->update('painel');
		return $this->session->set_flashdata('msgpainel','Painel atualizado com sucesso !!.');
		
	}	
}
