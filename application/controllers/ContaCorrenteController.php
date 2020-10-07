<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContaCorrenteController extends CI_Controller {

	var $deve;
	var $haver;
	var $data_pagamento;
	var $id_socio;

	public function index()
	{
		$data['lista_socio'] = $this->SocioModel->listar_socio();
		$this->load->view('adiciona_contacorrente', $data);
	}

	public function __construct()
    {
        parent::__construct();
        $this->load->model('ContaCorrenteModel');
        $this->load->model('SocioModel');
        $this->load->helper('form');
    }

	public function adicionar_contacorrente() {

		$deve = $_POST['deve'];
		$haver = $_POST['haver'];
		$data_pagamento = $_POST['data_pagamento'];
		$id_socio = $_POST['id_socio'];

		$this->ContaCorrenteModel->adicionar_contacorrente($deve, $haver, $data_pagamento, $id_socio);
		$this->index();

	}
}