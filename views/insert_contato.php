<?php require_once "views/_nav.php" ?>

<main>
	<section id="dados">
		<h2>INSERIR NOVO REGISTRO</h2>

		<form action="" method="POST">
			<div class="container">
				<label>Nome: <span class="obg">*</span></label>
				<input type="text" name="nome" />

				<br/><br/>

				<label>Email: </label>
				<input type="text" name="email" />

				<br/><br/>

				<div class="col-2">
					<label>Telefone: </label>
					<label>Celular: <span class="obg">*</span></label>

					<input type="tel" id="tel" name="telefone" />
					<input type="tel" id="cel" name="celular" />
				</div>

				<br/>

				<div class="col-3">
					<label>Endereço: <span class="obg">*</span></label>
					<label>Nº: <span class="obg">*</span></label>
					<label>Bairro: </label>
					
					<input type="text" name="endereco" />
					<input type="text" name="numero" maxlength="5" />
					<input type="text" name="bairro" />
				</div>

				<br/>

				<div class="col-3">
					<label>Cidade: <span class="obg">*</span></label>
					<label>UF: <span class="obg">*</span></label>
					<label>CEP: </label>

					<input type="text" name="cidade" />
					<select name="uf">
						<?php
							foreach ($estado as $uf) {
								echo "<option value='{$uf->id_estado}'>{$uf->sigla}</option>";
							}
						?>
					</select>
					<input type="text" id="cep" name="cep" />
				</div>

				<br/>

				<label>Observações: </label>
				<br/>
				<textarea maxlength="1000" name="observacoes" onkeyup="countChar(this)"></textarea>
				<p id="observacoes">1000 caractéres restantes</p>

				<br/>
				<span class="obg">* campos obrigatórios</span>
			</div>

			<div class="btn">
				<button type="submit" name="save"><span class="fas fa-plus"></span> CADASTRAR</button>
				<button type="reset" name="reset"><span class="fas fa-times"></span> LIMPAR DADOS</button>
			</div>
		</form>
	</section>
</main>

<script>
	// Input Mask
	$(document).ready(function() {
		$("#tel").inputmask("(99) 9999-9999");
		$("#cel").inputmask("(99) 99999-9999");
		$("#cep").inputmask("99999-999");
	});

	function countChar(val) {
		var len = val.value.length;
		var max = document.getElementsByTagName("textarea")[0].getAttribute("maxlength");
		
		if (len >= max) {
			document.querySelector("#observacoes").innerHTML = "limite máximo de " +max+ " caractéres!";
			document.querySelector("#observacoes").style.color = "#F00";
		}
		else {
			document.querySelector("#observacoes").innerHTML = (max - len) + " caractéres restantes";
			document.querySelector("#observacoes").style.color = "#000";
		}
	}
</script>

<?php require_once "views/_footer.php" ?>
