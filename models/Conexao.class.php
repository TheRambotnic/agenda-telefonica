<?php
	abstract class Conexao {
		protected $db;

		protected function __construct() {
			try {
				// Argumentos do PDO: Host, Nome do Banco, Charset, Login, Senha
				$this->db = new PDO("mysql:host=localhost; dbname=AgendaTelefonica; charset=utf8mb4", "root", "");
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(Exception $e) {
				// Exibir mensagem de erro caso ocorra falha na conexão com o banco.
				// Se ocorrer, cancelar a conexão
				die("Ocorreu um erro durante a conexão com o banco de dados. " .$e->getMessage());
			}
		}
	}
