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
			<label class="botaoescolha" for="artesao">
				Artesão
				<input type="radio" id="artesao" name="tipo" value="Artesão" required>
			</label>

			<label class="botaoescolha" for="oficina">
				Oficina
				<input type="radio" id="oficina" name="tipo" value="Oficina">
			</label>

			<label class="botaoescolha" for="indeterminado_tipo">
				Indeterminado
				<input type="radio" id="indeterminado_tipo" name="tipo" value="Indeterminado">
			</label><br>

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

			<label class="titulos">Data de Entrada</label><br>
			<input type="date" name="data_entrada" min="1905-01-01" max="1911-12-31" required><br>
			
			<label class="titulos">Data de Saída:</label><br>
			<input type="date" name="data_saida" min="1905-01-01" max="1911-12-31" required><br>

			<label class="titulos">Observação</label><br>
			<textarea name="observacao" rows="5"
			style=
				"border: 1px solid #ccc;
  				 border-radius: 4px;
  				 width: 100%;
  				 box-sizing: border-box;
  				 margin: 8px 0;"></textarea>

	        <input  type="submit" value="ENVIAR">
	    
	    <?php echo form_close(); ?>
	</div>

	<?php include 'footer.html';?>	
</body>
</html>