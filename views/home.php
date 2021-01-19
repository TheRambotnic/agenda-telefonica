<?php require_once "_nav.php" ?>

<main>
	<h2>MEUS CONTATOS</h2>

	<table id="contatos">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Endereço</th>
				<th>Telefone</th>
				<th>Ações</th>
			</tr>
		</thead>

		<tbody>
			<?php
				foreach ($contato as $cont) {
					echo "<tr>
						<td>{$cont->nome}</td>
						<td>{$cont->endereco}, {$cont->num} - {$cont->cidade}-{$cont->uf}</td>
						<td>{$cont->telefone}</td>
						<td><a href='' title='Visualizar'><span class='fas fa-eye'></span></a> &nbsp; <a href='?c=ContatoController&m=editarContato&id={$cont->id_contato}' title='Editar'><span class='fas fa-edit'></span></a> &nbsp; <a href='?c=ContatoController&m=apagarContato&id={$cont->id_contato}' title='Apagar'><span class='fas fa-trash'></span></a></td>
					</tr>";
				}
			?>
		</tbody>
	</table>	
</main>

<script>
	$(document).ready(function() {
		// DataTables
		$("#contatos").DataTable({
			"columnDefs": [
				// remover opção de ordem na coluna de 'ações'
				{"orderable": false, "targets": 3}
			]
		});
	});
</script>

<?php require_once "_footer.php" ?>
