<?php require_once "views/_nav.php" ?>
		<main>
			<h2>ALTERAR DADOS</h2>

			<section id="edit">
				<form action="" method="POST">
					<label>Nome: </label>
					<input type="text" name="nome" value="<?php if (isset($ret)) echo $ret[0]->nome; ?>">
									
					<label>Email: </label>
					<input type="text" name="email" value="<?php if (isset($ret)) echo $ret[0]->email; ?>">

					<label>Telefone Residêncial: </label>
					<input type="tel" id="tel" name="telefone" value="<?php if (isset($ret)) echo $ret[0]->telefone; ?>">
				
					<label>Celular: </label>
					<input type="tel" id="cel" name="celular" value="<?php if (isset($ret)) echo $ret[0]->celular; ?>">
				
					<label>Endereço: </label>
					<input type="text" name="endereco" value="<?php if (isset($ret)) echo $ret[0]->endereco; ?>">

					<label>Nº: </label>
					<input type="text" name="numero" value="<?php if (isset($ret)) echo $ret[0]->num; ?>">

					<label>Bairro: </label>
					<input type="text" name="bairro" value="<?php if (isset($ret)) echo $ret[0]->bairro; ?>">

					<label>Cidade: </label>
					<input type="text" name="cidade" value="<?php if (isset($ret)) echo $ret[0]->cidade; ?>">

					<label>UF: </label>
					<input type="text" name="uf" maxlength="2" value="<?php if (isset($ret)) echo $ret[0]->uf; ?>">

					<label>CEP: </label>
					<input type="text" id="cep" name="cep" value="<?php if (isset($ret)) echo $ret[0]->cep; ?>">

					<label>Observações: </label>
					<textarea maxlength="2000" name="observacoes">
						<?php if (isset($ret)) echo $ret[0]->observacoes; ?>
					</textarea>

					<input type="submit" value="SALVAR" name="save"/>
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
