<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Model_Cliente','ClienteModel');
	}

	public function index()
	{
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/aside');
		$this->load->view('backend/cadastro_cliente');
		$this->load->view('backend/template/footer');

	}


	public function cadastra_cliente(){
		
		$nome = $this->input->post('nomeCliente');
		$email = $this->input->post('email');
		$telefone = $this->input->post('telefone');
		$endereco = $this->input->post('endereco');
		$this->ClienteModel->insert($nome,$email,$telefone,$endereco);
	}

	public function lista_clientes(){

		$dados = array(
			'clientes' => $this->ClienteModel->listAllClientes()
			);
		$this->load->view('backend/template/header', $dados);
		$this->load->view('backend/template/aside');
		$this->load->view('backend/lista_clientes');
		$this->load->view('backend/template/footer');

	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */