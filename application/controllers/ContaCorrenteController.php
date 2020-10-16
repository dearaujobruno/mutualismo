<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContaCorrenteController extends CI_Controller {

	var $deve ='';
	var $haver ='';
	var $id_socio = '';

	var $aulacb = '';
	var $diariacb = '';
	var $funeralcb = '';
	var $pensaocb = '';
	var $medicocb = '';
	var $remedioscb = '';
	var $hospitalcb = '';
	var $emprestimocb = '';
	var $data_pagamentocb = '';

	var $aula = '';
	var $diaria = '';
	var $funeral = '';
	var $pensao = '';
	var $medico = '';
	var $remedios = '';
	var $hospital = '';
	var $emprestimo = '';
	var $data_pagamento = '';
	
	var $total_servicos = '0';
	var $todos_servicos = '';


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

		$deve = $_POST['deve'];
		$haver = $_POST['haver'];
		$data_pagamento = $_POST['data_pagamento'];
		$id_socio = $_POST['id_socio'];

		if (!empty($_POST["aulacb"])) {
			$aulacb = $_POST['aulacb'] . '; ';
			$todos_servicos = $todos_servicos . $aulacb;
		}

		if (!empty($_POST["diariacb"])) {
			$diariacb = $_POST['diariacb'] . '; ';
			$todos_servicos = $todos_servicos . $diariacb;
		}

		if (!empty($_POST["funeralcb"])) {
			$funeralcb = $_POST['funeralcb'] . '; ';
			$todos_servicos = $todos_servicos . $funeralcb;
		}

		if (!empty($_POST["pensaocb"])) {
			$pensaocb = $_POST['pensaocb'] . '; ';
			$todos_servicos = $todos_servicos . $pensaocb;
		}

		if (!empty($_POST["medicocb"])) {
			$medicocb = $_POST['medicocb'] . '; ';
			$todos_servicos = $todos_servicos . $medicocb;
		}

		if (!empty($_POST["remedioscb"])) {
			$remedioscb = $_POST['remedioscb'] . '; ';
			$todos_servicos = $todos_servicos . $remedioscb;
		}

		if (!empty($_POST["hospitalcb"])) {
			$hospitalcb = $_POST['hospitalcb'] . '; ';
			$todos_servicos = $todos_servicos . $hospitalcb;
		}

		if (!empty($_POST["emprestimocb"])) {
			$emprestimocb = $_POST['emprestimocb'] . '; ';
			$todos_servicos = $todos_servicos . $emprestimocb;
		}

		$aula = $_POST['aula'];
		$diaria = $_POST['diaria'];
		$funeral = $_POST['funeral'];
		$pensao = $_POST['pensao'];
		$medico = $_POST['medico'];
		$remedios = $_POST['remedios'];
		$hospital = $_POST['hospital'];
		$emprestimo = $_POST['emprestimo'];

		
		$total_servicos = $aula + $diaria + $funeral + $pensao + $medico + $remedios + $hospital + $emprestimo;

		$this->ContaCorrenteModel->adicionar_contacorrente($deve, $haver, $data_pagamento, $total_servicos, $todos_servicos, $id_socio);
		return redirect('conta');


	}
}