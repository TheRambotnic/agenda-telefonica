<?php
	if ($_GET) {
		// chamar as views de acordo com o que for solicitado
		$controle = $_GET["c"];
		$metodo = $_GET["m"];

		require_once "controllers/" .$controle. ".class.php";
		$obj = new $controle();
		$obj->$metodo();
	}
	else {
		// o sistema inicia aqui por padrão
		require_once "controllers/InicioController.class.php";
		$init = new InicioController();
		$init->inicio();
	}
