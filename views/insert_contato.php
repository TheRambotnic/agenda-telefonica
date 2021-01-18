<?php require_once "views/_nav.php" ?>
		<main>
			<h2>INSERIR NOVO REGISTRO</h2>

			<section id="edit">
				<form action="" method="POST">
					<label>Nome: </label>
					<input type="text" name="nome" />
									
					<label>Email: </label>
					<input type="text" name="email" />

					<label>Telefone Residêncial: </label>
					<input type="tel" id="tel" name="telefone" />
				
					<label>Celular: </label>
					<input type="tel" id="cel" name="celular" />
				
					<label>Endereço: </label>
					<input type="text" name="endereco" />

					<label>Nº: </label>
					<input type="text" name="numero" />

					<label>Bairro: </label>
					<input type="text" name="bairro" />

					<label>Cidade: </label>
					<input type="text" name="cidade" />

					<label>UF: </label>
					<input type="text" name="uf" maxlength="2" />

					<label>CEP: </label>
					<input type="text" id="cep" name="cep" />

					<label>Observações: </label>
					<textarea maxlength="2000" name="observacoes"></textarea>

					<input type="submit" value="INSERIR" name="insert"/>
					<input type="submit" value="CANCELAR" name="cancel"/>
				</form>
			</section>
		</main>

		<script>
			$(document).ready(function() {
				// Input Mask
				$("#tel").inputmask("(99) 9999-9999");
				$("#cel").inputmask("(99) 99999-9999");
				$("#cep").inputmask("99999-999");
			});
		</script>
	</body>
</html>
