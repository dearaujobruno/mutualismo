<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Adicione Conta Corrente</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/estilo.css');?>" />
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
			<label class="botaoescolha" for="servico">				
				<input type="checkbox" id="servico">
				Aula
			</label>
			<input style="width: 65%;" type="number" name="deve" min="0" disabled><br>

			<label class="botaoescolha" for="servico2">
				<input type="checkbox" id="servico2">
				Diária (Acidente/Doença)
			</label>
			<input style="width: 65%;" type="number" name="deve" min="0" disabled><br>

			<label class="botaoescolha" for="servico2">
				<input type="checkbox" id="servico2">
				Funeral
			</label>
			<input style="width: 65%;" type="number" name="deve" min="0" disabled><br>

			<label class="botaoescolha" for="servico2">
				<input type="checkbox" id="servico2">
				Pensão p/ Viúva
			</label>
			<input style="width: 65%;" type="number" name="deve" min="0" disabled><br>

			<label class="botaoescolha" for="servico2">
				<input type="checkbox" id="servico2">
				Médico
			</label>
			<input style="width: 65%;" type="number" name="deve" min="0" disabled><br>

			<label class="botaoescolha" for="servico2">
				<input type="checkbox" id="servico2">
				Remédios
			</label>
			<input style="width: 65%;" type="number" name="deve" min="0" disabled><br>

			<label class="botaoescolha" for="servico2">
				<input type="checkbox" id="servico2">
				Hospital
			</label>
			<input style="width: 65%;" type="number" name="deve" min="0" disabled><br>

			<label class="botaoescolha" for="servico2">
				<input type="checkbox" id="servico2">
				Empréstimo
			</label>
			<input style="width: 65%;" type="number" name="deve" min="0" disabled><br>

			<label class="titulos" for="id_socio">Serviço Extra</label><br>
			<input style="width: 30%;" type="text" name="haver" min="0" required>
			<input style="width: 65%;" type="number" name="deve" min="0" required><br>

			<label class="titulos">Data de Pagamento</label><br>
			<input type="date" name="data_pagamento" min="1800-01-01" max="2030-12-31" required><br>

			<label class="titulos">Complemento</label><br>
			<textarea name="message" rows="5"
			style=
				"border: 1px solid #ccc;
  				 border-radius: 4px;
  				 width: 100%;
  				 box-sizing: border-box;
  				 margin: 8px 0;">			
			</textarea>

			<input type="submit" value="ENVIAR">
		<?php echo form_close(); ?>
		
	</div>
	
</body>
</html>