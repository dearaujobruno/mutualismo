<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/estilo.css');?>" />
	<meta charset="utf-8">
	<title>Visualizar Sócios</title>
</head>
<body>

	<?php include 'header.html';?>
	<br>

	<div class="blococentral" style="width: 80%;">
		<h1>Sócios</h1>
		

		<table class="tabela">
			<tr>
				<th>Nome</th>
				<th>Profissão (Tipo)</th>
				<th>Sexo</th>
				<th>Imigrante</th>
				<th>Elite</th>
				<th>Data de Entrada</th>
				<th>Data de Saída</th>
				<th>Observação</th>
			</tr>

		<?php
			foreach ($lista_socio->result() as $row) {
				echo '<tr>';
				echo '<td>'.$row->nome_socio .'</td>';							
				echo '<td>'.$row->profissao_socio.' ('.$row->tipo_profissao_socio.')</td>';
				echo '<td>'.$row->sexo_socio .'</td>';
				echo '<td>'.$row->imigrante_socio .'</td>';
				echo '<td>'.$row->elite_socio .'</td>';
				echo '<td>'.$row->data_entrada .'</td>';
				echo '<td>'.$row->data_saida .'</td>';
				echo '<td>';
				if (!is_null($row->observacao)) {
					echo $row->observacao;
				} else {
					echo 'N/A';
				}; 
				echo '</td>';
				echo '</tr>';
			}
		?>
		</table>
	</div>

</body>
</html>