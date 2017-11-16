<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {
    
    public function __construct(){
		parent::__construct();

		$this->load->model('Model_Categoria','CategoriaModel');
    }
    
	public function index()
	{
        $dados = array(
            'nome' => $this->input->post('nome')
        );
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/aside');
		$this->load->view('backend/cadastro_categoria', $dados);
        $this->load->view('backend/template/footer');

        $this->CategoriaModel->insert($dados);
        
        

	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */