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
	
	var $servico_extra = '';
	var $extra = '';
	var $complemento = '';
	var $total_servicos = '';
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

		if (!empty($_POST["servico_extra"])) {
			$servico_extra = $_POST['servico_extra'] . '; ';
			$todos_servicos = $todos_servicos . $servico_extra;
		}

		if (!empty($_POST["complemento"])) {
			$complemento = $_POST['complemento'];
		} else {
			$complemento = null;
		}


		if (!empty($_POST["aula"])) {
			$aula = $_POST['aula'];
		} else {
			$aula = null;
		}

		if (!empty($_POST["diaria"])) {
			$diaria = $_POST['diaria'];
		} else {
			$diaria = null;
		}

		if (!empty($_POST["funeral"])) {
			$funeral = $_POST['funeral'];
		} else {
			$funeral = null;
		}

		if (!empty($_POST["pensao"])) {
			$pensao = $_POST['pensao'];
		} else {
			$pensao = null;
		}

		if (!empty($_POST["medico"])) {
			$medico = $_POST['medico'];
		} else {
			$medico = null;
		}

		if (!empty($_POST["remedios"])) {
			$remedios = $_POST['remedios'];
		} else {
			$remedios = null;
		}

		if (!empty($_POST["hospital"])) {
			$hospital = $_POST['hospital'];
		} else {
			$hospital = null;
		}

		if (!empty($_POST["emprestimo"])) {
			$emprestimo = $_POST['emprestimo'];
		} else {
			$emprestimo = null;
		}

		if (!empty($_POST["extra"])) {
			$extra = $_POST['extra'];
		} else {
			$extra = null;
		}

		
		$total_servicos = $aula + $diaria + $funeral + $pensao + $medico + $remedios + $hospital + $emprestimo +$extra;

		$this->ContaCorrenteModel->adicionar_contacorrente($deve, $haver, $data_pagamento, $total_servicos, $todos_servicos, $complemento, $id_socio);
		return redirect('conta');


	}


	public function visualizar_contacorrente() {
		$data['lista_contacorrente'] = $this->ContaCorrenteModel->listar_contacorrente();
		$this->load->view('visualiza_contacorrente', $data);
	}
}