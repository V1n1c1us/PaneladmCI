<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Categoria extends CI_Model {

    /**
     * @param INPUT $nome = recebe o dado do FORM
     */
    public function insert($dados){
    	$this->db->insert('categoria',$dados);
    }

    /** 
     * Lista todos os Clientes da TABELA = Categoria 
     */
        public function listAllCategoria(){
    	$this->db->select('nome');
    	$this->db->from('categoria');
    	$this->db->order_by('nome','ASC');
    	return $this->db->get()->result();
    }


}

/* End of file Model_Categoria.php */
/* Location: ./application/models/Model_Categoria.php */
