<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContaCorrenteController extends CI_Controller {

	var $deve ='';
	var $haver ='';
	var $aula = '';
	var $funeral = '';
	var $data_pagamento = '';
	var $id_socio = '';

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
        $this->load->helper('url');
    }

	public function adicionar_contacorrente() {

		try {
			$deve = $_POST['deve'];
			$haver = $_POST['haver'];
			$data_pagamento = $_POST['data_pagamento'];
			$id_socio = $_POST['id_socio'];
			$aula = $_POST['aula'];
			$funeral = $_POST['funeral'];
			

			$this->ContaCorrenteModel->adicionar_contacorrente($deve, $haver, $data_pagamento, $id_socio);
			return redirect('conta');

		} catch (\Exception $e) {
		    die($e->getMessage());
		}



	}
}