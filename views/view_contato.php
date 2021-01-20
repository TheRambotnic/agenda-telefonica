<?php require_once "views/_nav.php" ?>

<main>
	<section id="dados">
		<h2>
			<span class="fas fa-user fa-2x"></span><br/><br/>
			<?php if (isset($ret)) echo $ret[0]->nome; ?>
		</h2>

		<div class="container">
			<p class="bold"><span class="fas fa-envelope"></span> Email</p>
			<p class="info">
				<a href="mailto:<?php if (isset($ret)) echo $ret[0]->email; ?>" title="Enviar email para <?php echo $ret[0]->email; ?>"><?php if (isset($ret)) echo $ret[0]->email; ?></a>
			</p>

			<br/>

			<div class="col-2">
				<p class="bold"><span class="fas fa-phone"></span> Telefone</p>
				<p class="bold"><span class="fas fa-mobile-alt"></span> Celular</p>

				<p class="info"><?php if (isset($ret)) echo $ret[0]->telefone; ?></p>
				<p class="info">
					<?php $cel = str_replace(array("(", ")", " ", "-"), "", $ret[0]->celular); ?>
					<a href="https://wa.me/55<?php echo $cel; ?>" target="_blank" title="Conversar via WhatsApp"><?php if (isset($ret)) echo $ret[0]->celular; ?></a>
				</p>
			</div>

			<br/>

			<p class="bold"><span class="fas fa-map-marker-alt"></span> Endereço</p>
			<p class="info">
				<?php
					if (isset($ret)) {
						foreach ($estado as $uf) {
							if ($uf->id_estado == $ret[0]->id_estado) {
								$endereco = $ret[0]->endereco .", ". $ret[0]->num ." - ". $ret[0]->cidade ."-". $uf->sigla;
							}
						}
					}
				?>
				<a href="https://www.google.com/maps/search/?api=1&query=<?php echo $endereco; ?>" title="Abrir no Google Maps" target="_blank"> <?php echo $endereco ." (". $ret[0]->cep .")"; ?></a>
			</p>

			<br/>

			<p class="bold"><span class="fas fa-exclamation-circle"></span> Observações</p>
			<p class="info"><?php if (isset($ret)) echo $ret[0]->observacoes; ?></p>
		</div>

		<div class="btn">
			<a href="index.php" name="cancel"><span class="fas fa-arrow-left"></span> VOLTAR</a>
		</div>
	</section>
</main>

<?php require_once "views/_footer.php" ?>
