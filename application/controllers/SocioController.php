<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SocioController extends CI_Controller {

	var $nome;
	var $profissao;
	var $tipo;
	var $sexo;
	var $imigrante;
	var $elite;
	var $data_entrada;
	var $data_saida;

	public function index()
	{
		$this->load->view('adiciona_socio');
	}

	public function __construct()
    {
        parent::__construct();
        $this->load->model('SocioModel');
        $this->load->helper('form');
        $this->load->helper('url');
    }

	public function adicionar_socio() {

		$nome = $_POST['nome'];
		$profissao = $_POST['profissao'];
		$tipo = $_POST['tipo'];
		$sexo = $_POST['sexo'];
		$imigrante = $_POST['imigrante'];
		$elite = $_POST['elite'];
		$data_entrada = $_POST['data_entrada'];
		$data_saida = $_POST['data_saida'];

		$this->SocioModel->adicionar_socio($nome, $sexo, $profissao, $tipo, $imigrante, $elite, $data_entrada, $data_saida);
		return redirect('socio');

	}

	public function visualizar_socio() {
		$data['lista_socio'] = $this->SocioModel->listar_socio();
		$this->load->view('visualiza_socio', $data);
	}

}
