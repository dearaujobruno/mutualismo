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
				<th></th>
			</tr>

		<?php
			$saldo = 0;
			$deve_total = 0;
			$haver_total = 0;
			
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
					echo '<td>';
						echo form_open('deletar-conta', array('onsubmit' => "return confirm('Você realmente deseja excluir?');"));
							echo '<input type="hidden" name="id_conta" value="'.$row->id_conta.'">';
							echo '<input type="submit" class="btexcluir" value="x">';
						echo form_close();
					echo '</td>';
					echo '</tr>';
					$deve_total = $deve_total + $row->deve;
					$haver_total = $haver_total + $row->haver;				
				}
			
			$saldo = $haver_total - $deve_total;
		?>
		</table>
		<?php echo '<br>'; ;?>
		<?php echo '<h3> Saldo: ' . $saldo ;?>
	</div>

	<?php include 'footer.html';?>	

</body>
</html>