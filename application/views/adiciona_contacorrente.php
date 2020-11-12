<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Adicione Conta Corrente</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/estilo.css');?>" />
	<script src="<?php echo 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'; ?>"></script>
</head>
<body>
	<?php include 'header.html';?>

	<br>

	<div class="blococentral">
		<h1>Adicionar Conta Corrente</h1>

		<?php echo form_open('adicionar-conta') ?>
			<label class="titulos" for="id_socio">Escolha um sócio</label><br>
			<select name="id_socio" id="id_socio" required>
			<?php
				foreach ($lista_socio->result() as $row) {
		            echo '<option value="'.$row->id_socio.'">'.$row->nome_socio.'</option>';
				}
			?>
			</select><br>
			
			<label class="titulos">Deve</label><br>
			<input type="number" name="deve" min="0" required><br>

			<label class="titulos">Haver</label><br>
			<input type="number" name="haver" min="0" required><br>

			<label class="titulos" for="id_socio">Selecione serviço(s)</label><br>
			<label class="botaoescolha" for="aula_checkbox">				
				<input type="checkbox" id="aula_checkbox" name="aulacb" value="Aula">
				Aula
			</label>
			<input style="width: 65%;" type="number" name="aula" min="0"  id="aula_field" readonly><br>

			<label class="botaoescolha" for="diaria_checkbox">
				<input type="checkbox" id="diaria_checkbox" name="diariacb" value="Diária">
				Diária (Acidente/Doença)
			</label>
			<input style="width: 65%;" type="number" name="diaria" min="0"  id="diaria_field" readonly><br>

			<label class="botaoescolha" for="funeral_checkbox">
				<input type="checkbox" id="funeral_checkbox" name="funeralcb" value="Funeral">
				Funeral
			</label>
			<input style="width: 65%;" type="number" name="funeral" min="0"  id="funeral_field" readonly><br>

			<label class="botaoescolha" for="pensao_checkbox">
				<input type="checkbox" id="pensao_checkbox" name="pensaocb"  value="Pensão">
				Pensão p/ Viúva
			</label>
			<input style="width: 65%;" type="number" name="pensao" min="0"  id="pensao_field" readonly><br>

			<label class="botaoescolha" for="medico_checkbox">
				<input type="checkbox" id="medico_checkbox" name="medicocb" value="Médico">
				Médico
			</label>
			<input style="width: 65%;" type="number" name="medico" min="0"  id="medico_field" readonly><br>

			<label class="botaoescolha" for="remedios_checkbox">
				<input type="checkbox" id="remedios_checkbox" name="remedioscb" value="Remédios">
				Remédios
			</label>
			<input style="width: 65%;" type="number" name="remedios" min="0"  id="remedios_field" readonly><br>

			<label class="botaoescolha" for="hospital_checkbox">
				<input type="checkbox" id="hospital_checkbox" name="hospitalcb" value="Hospital">
				Hospital
			</label>
			<input style="width: 65%;" type="number" name="hospital" min="0"  id="hospital_field" readonly><br>

			<label class="botaoescolha" for="emprestimo_checkbox">
				<input type="checkbox" id="emprestimo_checkbox" name="emprestimocb" value="Empréstimo">
				Empréstimo
			</label>
			<input style="width: 65%;" type="number" name="emprestimo" min="0"  id="emprestimo_field" readonly><br>

			<label class="titulos" for="id_socio">Serviço Extra</label><br>
			<input style="width: 30%;" type="text" name="servico_extra">
			<input style="width: 65%;" type="number" name="extra" min="0" ><br>

			<label class="titulos">Data de Pagamento</label><br>
			<input type="date" name="data_pagamento" min="1905-01-01" max="1911-12-31" required><br>

			<label class="titulos">Complemento</label><br>
			<textarea name="complemento" rows="5"
			style=
				"border: 1px solid #ccc;
  				 border-radius: 4px;
  				 width: 100%;
  				 box-sizing: border-box;
  				 margin: 8px 0;"></textarea>

			<input type="submit" value="ENVIAR">
		<?php echo form_close(); ?>
		
	</div>

	<?php include 'footer.html';?>	

<script>
	$('#aula_checkbox').click(function() {
	    $('#aula_field').attr('readonly',! this.checked)
	});

	$('#diaria_checkbox').click(function() {
	    $('#diaria_field').attr('readonly',! this.checked)
	});

	$('#funeral_checkbox').click(function() {
	    $('#funeral_field').attr('readonly',! this.checked)
	});

	$('#pensao_checkbox').click(function() {
	    $('#pensao_field').attr('readonly',! this.checked)
	});

	$('#medico_checkbox').click(function() {
	    $('#medico_field').attr('readonly',! this.checked)
	});

	$('#remedios_checkbox').click(function() {
	    $('#remedios_field').attr('readonly',! this.checked)
	});

	$('#hospital_checkbox').click(function() {
	    $('#hospital_field').attr('readonly',! this.checked)
	});

	$('#emprestimo_checkbox').click(function() {
	    $('#emprestimo_field').attr('readonly',! this.checked)
	});

	$('#extra').click(function() {
	    $('#extra').attr('readonly',! this.checked)
	});
</script>
	
</body>
</html>