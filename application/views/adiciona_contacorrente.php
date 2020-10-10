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
		<center><h1>Adicionar Conta Corrente</h1></center>

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

			<label class="titulos">Data de Pagamento</label><br>
			<input type="date" name="data_pagamento" min="1800-01-01" max="2030-12-31" required><br>

			<input type="submit" value="ENVIAR">
		<?php echo form_close(); ?>
		
	</div>
	
</body>
</html>