<?php
	require_once "models/Conexao.class.php";
	require_once "models/Contato.class.php";
	require_once "models/ContatoDAO.class.php";

	class ContatoController {
		public function inserirContato() {
			require_once "views/insert_contato.php";

			// se o usuário cancelou a operação, voltar para listagem
			if (isset($_POST["cancel"])) {
				header("Location:index.php");
			}

			if (isset($_POST["insert"])) {
				if (!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["telefone"]) && !empty($_POST["celular"]) && !empty($_POST["endereco"]) && !empty($_POST["numero"]) && !empty($_POST["bairro"]) && !empty($_POST["cidade"]) && !empty($_POST["uf"]) && !empty($_POST["cep"]) && !empty($_POST["observacoes"])) {
					$contato = new Contato(
						null,
						$_POST["nome"],
						$_POST["email"],
						$_POST["telefone"],
						$_POST["celular"],
						$_POST["endereco"],
						$_POST["numero"],
						$_POST["bairro"],
						$_POST["cidade"],
						$_POST["uf"],
						$_POST["cep"],
						$_POST["observacoes"]
					);

					$contatoDAO = new ContatoDAO();
					$contatoDAO->inserir($contato);

					echo "<script>
						alert('Registro inserido com sucesso!');
						location='index.php';
					</script>";
				}
			}
		}

		public function editarContato() {
			$contatoDAO = new ContatoDAO();
			$ret = $contatoDAO->listarContato($_GET["id"]);

			require_once "views/edit_contato.php";

			// se o usuário cancelou a operação, voltar para listagem
			if (isset($_POST["cancel"])) {
				header("Location:index.php");
			}

			if (isset($_POST["save"])) {
				if (!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["telefone"]) && !empty($_POST["celular"]) && !empty($_POST["endereco"]) && !empty($_POST["numero"]) && !empty($_POST["bairro"]) && !empty($_POST["cidade"]) && !empty($_POST["uf"]) && !empty($_POST["cep"]) && !empty($_POST["observacoes"])) {
					$contato = new Contato(
						$_GET["id"],
						$_POST["nome"],
						$_POST["email"],
						$_POST["telefone"],
						$_POST["celular"],
						$_POST["endereco"],
						$_POST["numero"],
						$_POST["bairro"],
						$_POST["cidade"],
						$_POST["uf"],
						$_POST["cep"],
						$_POST["observacoes"]
					);

					$contatoDAO->editar($contato);

					echo "<script>
						alert('Registro editado com sucesso!');
						location='index.php';
					</script>";
				}
			}
		}

		public function apagarContato() {
			$contatoDAO = new ContatoDAO();
			$contatoDAO->apagar($_GET["id"]);
			echo "<script>
				alert('Registro apagado!');
				location='index.php';
			</script>";
		}
	}