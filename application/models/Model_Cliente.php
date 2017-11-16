<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Cliente extends CI_Model {

    /**
     * @param INPUT $nome = recebe o dado do FORM
     * @param INPUT $email = recebe o dado do FORM
     * @param INPUT $telefone = recebe o dado do FORM
     * @param INPUT $endereco = recebe o dado do FORM
     */
    public function insert($nome, $email, $telefone, $endereco){
    	$data = array(
    		'nomeCliente' => $nome,
    		'email' => $email,
    		'telefone' => $telefone,
    		'endereco' => $endereco,
    		);
    	$this->db->insert('cliente',$data);
    }

    /** 
     * Lista todos os Clientes da TABELA = Cliente 
     */
        public function listAllClientes(){
    	$this->db->select('nomeCliente,email,telefone,endereco');
    	$this->db->from('cliente');
    	$this->db->order_by('nomeCliente','ASC');
    	return $this->db->get()->result();
    }


}

/* End of file Model_Cliente.php */
/* Location: ./application/models/Model_Cliente.php */
