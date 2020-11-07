<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/estilo.css');?>" />
	<meta charset="utf-8">
	<title>Visualizar Conta Corrente</title>
</head>
<body>

	<?php include 'header.html';?>
	<br>

	<div class="blococentral" style="width: 80%;">
		<h1>Conta Corrente</h1>
		

		<table class="tabela">
			<tr>
				<th>Nome do Sócio</th>
				<th>Deve</th>
				<th>Haver</th>				
				<th>Serviços Prestados</th>
				<th>Valor Total dos Serviços</th>				
				<th>Complemento</th>
				<th>Data de Pagamento</th>
			</tr>

		<?php
			foreach ($lista_contacorrente->result() as $row) {
				echo '<tr>';
				echo '<td>'.$row->nome_socio .'</td>';							
				echo '<td>'.$row->deve.'</td>';
				echo '<td>'.$row->haver .'</td>';				
				echo '<td>';
				if (!is_null($row->todos_servicos)) {
					echo $row->todos_servicos;
				} else {
					echo 'N/A';
				}; 
				echo '</td>';
				echo '<td>';
				if (!empty($row->total_servicos)) {
					echo $row->total_servicos;
				} else {
					echo 'N/A';
				}; 
				echo '</td>';
				echo '</td>';
				echo '<td>';
				if (!is_null($row->complemento)) {
					echo $row->complemento;
				} else {
					echo 'N/A';
				}; 
				echo '</td>';
				echo '<td>'.$row->data_pagamento .'</td>';
				echo '</tr>';
			}
		?>
		</table>
	</div>

	<?php include 'footer.html';?>	

</body>
</html>