<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Adicione Sócios</title>

	<style type="text/css">

	</style>
</head>
<body>
<center>
	<h1>Adicionar Sócio</h1>

	<?php echo form_open('adicionar-socio') ?>

    	Nome:<br>
    	<input type="text" name="nome" required><br>

    	Profissão:<br>
		<input type="text" name="profissao" required><br>


		Data de Entrada:<br>
		<input type="date" name="data_entrada" min="1800-01-01" max="2030-12-31" required><br>
		Data de Saída:<br>
		<input type="date" name="data_saida" min="1800-01-01" max="2030-12-31" required><br>

		Sexo:<br>
		<input type="radio" id="masculino" name="sexo" value="masculino" required>
		<label for="masculino" >Masculino</label>
		<input type="radio" id="feminino" name="sexo" value="feminino">
		<label for="feminino" >Feminino</label><br>

		Imigrante:<br>
		<input type="radio" id="imigrante" name="imigrante" value="1" required>
		<label for="imigrante" >Imigrante</label>
		<input type="radio" id="naoimigrante" name="imigrante" value="0">
		<label for="naoimigrante" >Não-Imigrante</label><br>

		Elite:<br>
		<input type="radio" id="elite" name="elite" value="1" required>
		<label for="elite" >Elite</label>
		<input type="radio" id="naoelite" name="elite" value="0">
		<label for="naoelite" >Não-Elite</label><br><br>

        <input  type="submit" value="ENVIAR">
    
    <?php echo form_close(); ?>
</center>
</body>
</html>