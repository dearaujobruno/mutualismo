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
		<h1>Adicionar Sócio</h1>

		<?php echo form_open('adicionar-socio') ?>

	    	<label class="titulos">Nome</label><br>
	    	<input type="text" name="nome" required><br>

	    	<label class="titulos">Profissão/Atividade Econômica</label><br>
			<input type="text" name="profissao" required><br>

			<label class="titulos">Tipo de Profissão/Atividade Econômica</label><br>
			<label class="botaoescolha2" for="artesao">
				Artesão
				<input type="radio" id="artesao" name="tipo" value="Artesão">
			</label>

			<label class="botaoescolha2" for="oficina">
				Oficina
				<input type="radio" id="oficina" name="tipo" value="Oficina">
			</label><br>

			<label class="titulos">Data de Entrada</label><br>
			<input type="date" name="data_entrada" min="1800-01-01" max="2030-12-31" required><br>
			
			<label class="titulos">Data de Saída:</label><br>
			<input type="date" name="data_saida" min="1800-01-01" max="2030-12-31" required><br>

			<label class="titulos">Sexo</label><br>
			<label class="botaoescolha" for="masculino">
				Masculino
				<input type="radio" id="masculino" name="sexo" value="Masculino" required>
			</label>
							
			<label class="botaoescolha" for="feminino">
				Feminino
				<input type="radio" id="feminino" name="sexo" value="Feminino">
			</label>
				
			<label class="botaoescolha" for="indeterminado" >
				Indeterminado
				<input type="radio" id="indeterminado" name="sexo" value="Indeterminado">
			</label>
			<br>

			<label class="titulos">Imigrante</label><br>
			<label class="botaoescolha" for="imigrante">
				Imigrante
				<input type="radio" id="imigrante" name="imigrante" value="Imigrante" required>
			</label>
				
			<label class="botaoescolha" for="naoimigrante">
				Não-Imigrante
				<input type="radio" id="naoimigrante" name="imigrante" value="Não-Imigrante">
			</label>
				
			<label class="botaoescolha" for="indeterminado_imigrante">
				Indeterminado
				<input type="radio" id="indeterminado_imigrante" name="imigrante" value="Indeterminado">
			</label>
			<br>

			<label class="titulos">Elite</label><br>
			<label class="botaoescolha" for="elite">
				<input type="radio" id="elite" name="elite" value="Elite" required>
				Elite
			</label>
			
			<label class="botaoescolha" for="naoelite">
				<input type="radio" id="naoelite" name="elite" value="Não-Elite">
				Não-Elite
			</label>
				
			<label class="botaoescolha" for="indeterminado_elite">
				<input type="radio" id="indeterminado_elite" name="elite" value="Indeterminado">
				Indeterminado				
			</label>
			<br>

	        <input  type="submit" value="ENVIAR">
	    
	    <?php echo form_close(); ?>
	</div>

</body>
</html>