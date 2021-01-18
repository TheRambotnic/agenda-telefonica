<?php
	require_once "models/Conexao.class.php";
	require_once "models/ContatoDAO.class.php";

	class InicioController {
		public function inicio() {
			$contDAO = new ContatoDAO();
			$contato = $contDAO->listarContatos();
			require_once "views/home.php";
		}
	}