<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Adicione Sócios</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/estilo.css');?>" />
</head>
<body>
	<?php include 'header.html';?>

	<br>

	<div class="blococentral">
		<center><h1>Adicionar Sócio</h1></center>

		<?php echo form_open('adicionar-socio') ?>

	    	<label class="titulos">Nome</label><br>
	    	<input type="text" name="nome" required><br>

	    	<label class="titulos">Profissão/Atividade Econômica</label><br>
			<input type="text" name="profissao" required><br>

			<label class="titulos">Data de Entrada</label><br>
			<input type="date" name="data_entrada" min="1800-01-01" max="2030-12-31" required><br>
			
			<label class="titulos">Data de Saída:</label><br>
			<input type="date" name="data_saida" min="1800-01-01" max="2030-12-31" required><br>

			<label class="titulos">Sexo</label><br>
			<label class="botaoescolha" for="masculino">
				Masculino
				<input type="radio" id="masculino" name="sexo" value="masculino" required>
			</label>
							
			<label class="botaoescolha" for="feminino">
				Feminino
				<input type="radio" id="feminino" name="sexo" value="feminino">
			</label>
				
			<label class="botaoescolha" for="indeterminado" >
				Indeterminado
				<input type="radio" id="indeterminado" name="sexo" value="indeterminado">
			</label>
			<br>

			<label class="titulos">Imigrante</label><br>
			<label class="botaoescolha" for="imigrante">
				Imigrante
				<input type="radio" id="imigrante" name="imigrante" value="1" required>
			</label>
				
			<label class="botaoescolha" for="naoimigrante">
				Não-Imigrante
				<input type="radio" id="naoimigrante" name="imigrante" value="0">
			</label>
				
			<label class="botaoescolha" for="indeterminado_imigrante">
				Indeterminado
				<input type="radio" id="indeterminado_imigrante" name="imigrante" value="2">
			</label>
			<br>

			<label class="titulos">Elite</label><br>
			<label class="botaoescolha" for="elite">
				<input type="radio" id="elite" name="elite" value="1" required>
				Elite
			</label>
			
			<label class="botaoescolha" for="naoelite">
				<input type="radio" id="naoelite" name="elite" value="0">
				Não-Elite
			</label>
				
			<label class="botaoescolha" for="indeterminado_elite">
				<input type="radio" id="indeterminado_elite" name="elite" value="2">
				Indeterminado				
			</label>
			<br>

	        <input  type="submit" value="ENVIAR">
	    
	    <?php echo form_close(); ?>
	</div>

</body>
</html>