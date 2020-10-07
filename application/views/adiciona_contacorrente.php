<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Adicione Conta Corrente</title>

	<style type="text/css">

	</style>
</head>
<body>
<center>
	<h1>Adicionar Conta Corrente</h1>

	<?php echo form_open('adicionar-conta') ?>
		<label for="id_socio">Escolha um sócio: </label><br>
		<select name="id_socio" id="id_socio" required>
		<?php
			foreach ($lista_socio->result() as $row) {
	            echo '<option value="'.$row->id_socio.'">'.$row->nome_socio.'</option>';
			}
		?>
		</select><br>
		
		Deve:<br>
		<input type="number" name="deve" min="0" required><br>

		Haver:<br>
		<input type="number" name="haver" min="0" required><br>

		Data de Pagamento:<br>
		<input type="date" name="data_pagamento" min="1800-01-01" max="2030-12-31" required><br><br>

		<input type="submit" value="ENVIAR">
	<?php echo form_close(); ?>
</center>
</body>
</html>