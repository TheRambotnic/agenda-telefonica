<?php
	class ContatoDAO extends Conexao {
		function __construct() {
			parent:: __construct();
		}

		/*
		 * Listar todos os contatos
		 */
		public function listarContatos() {
			$sql = "SELECT c.*, e.*
					FROM contatos c
					INNER JOIN estados e ON (c.id_estado = e.id_estado)";

			try {
				$stmt = $this->db->prepare($sql);
				$stmt->execute();

				// retornar dados e fechar conexão
				return $stmt->fetchAll(PDO::FETCH_OBJ);
				$this->db = null;
			}
			catch(Exception $e) {
				die("Erro ao listar contatos. " .$e->getMessage());
			}
		}

		/*
		 * Listar apenas o contato solicitado
		 */
		public function listarContato($id) {
			$sql = "SELECT c.*, e.*
					FROM contatos c
					INNER JOIN estados e ON (c.id_estado = e.id_estado)
					WHERE c.id_contato = $id";

			try {
				$stmt = $this->db->prepare($sql);
				$stmt->execute();

				// retornar dados e fechar conexão
				return $stmt->fetchAll(PDO::FETCH_OBJ);
				$this->db = null;
			}
			catch(Exception $e) {
				die("Erro ao listar o contato. " .$e->getMessage());
			}
		}

		/*
		 * Listar estados
		 */
		public function listarEstados() {
			$sql = "SELECT * FROM Estados";

			try {
				$stmt = $this->db->prepare($sql);
				$stmt->execute();

				// retornar dados e fechar conexão
				return $stmt->fetchAll(PDO::FETCH_OBJ);
				$this->db = null;
			}
			catch(Exception $e) {
				die("Erro ao listar os estados. " .$e->getMessage());
			}
		}

		/*
		 * Inserir um contato
		 */
		public function inserir($contato) {
			$sql = "INSERT INTO Contatos (`nome`, `email`, `telefone`, `celular`, `endereco`, `num`, `bairro`, `cidade`, `cep`, `observacoes`, `id_estado`)
					VALUES	(?,?,?,?,?,?,?,?,?,?,?)";

			try {
				$stmt = $this->db->prepare($sql);
				$stmt->bindValue(1, $contato->getNome());
				$stmt->bindValue(2, $contato->getEmail());
				$stmt->bindValue(3, $contato->getTelefone());
				$stmt->bindValue(4, $contato->getCelular());
				$stmt->bindValue(5, $contato->getEndereco());
				$stmt->bindValue(6, $contato->getNumero());
				$stmt->bindValue(7, $contato->getBairro());
				$stmt->bindValue(8, $contato->getCidade());
				$stmt->bindValue(9, $contato->getCEP());
				$stmt->bindValue(10, $contato->getObservacoes());
				$stmt->bindValue(11, $contato->getUnidFed());
				$stmt->execute();

				// fechar conexão
				$this->db = null;
			}
			catch(Exception $e) {
				die("Erro ao inserir o contato. " .$e->getMessage());
			}
		}

		/*
		 * Editar um contato
		 */
		public function editar($contato) {
			$sql = "UPDATE contatos
					SET nome = ?, email = ?, telefone = ?, celular = ?, endereco = ?, num = ?, bairro = ?, cidade = ?, cep = ?, observacoes = ?, id_estado = ?
					WHERE id_contato = ?";

			try {
				$stmt = $this->db->prepare($sql);
				$stmt->bindValue(1, $contato->getNome());
				$stmt->bindValue(2, $contato->getEmail());
				$stmt->bindValue(3, $contato->getTelefone());
				$stmt->bindValue(4, $contato->getCelular());
				$stmt->bindValue(5, $contato->getEndereco());
				$stmt->bindValue(6, $contato->getNumero());
				$stmt->bindValue(7, $contato->getBairro());
				$stmt->bindValue(8, $contato->getCidade());
				$stmt->bindValue(9, $contato->getCEP());
				$stmt->bindValue(10, $contato->getObservacoes());
				$stmt->bindValue(11, $contato->getUnidFed());
				$stmt->bindValue(12, $contato->getID());
				$stmt->execute();

				// fechar conexão
				$this->db = null;
			}
			catch(Exception $e) {
				die("Erro ao editar o contato informado. " .$e->getMessage());
			}
		}

		/*
		 * Apagar um contato
		 */
		public function apagar($id) {
			$sql = "DELETE FROM contatos WHERE id_contato = $id";

			try {
				$stmt = $this->db->prepare($sql);
				$stmt->execute();

				// fechar conexão
				$this->db = null;
			}
			catch(Exception $e) {
				die("Erro ao apagar o contato. " .$e->getMessage());
			}
		}
	}
