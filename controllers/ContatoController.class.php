<?php
	require_once "models/Conexao.class.php";
	require_once "models/Contato.class.php";
	require_once "models/ContatoDAO.class.php";

	class ContatoController {
		/*
		 * INSERIR NOVO CONTATO
		 */
		public function inserirContato() {
			$contatoDAO = new ContatoDAO();
			$estado = $contatoDAO->listarEstados();
			require_once "views/insert_contato.php";

			if (isset($_POST["save"])) {
				if (!empty($_POST["nome"]) && !empty($_POST["celular"]) && !empty($_POST["endereco"]) && !empty($_POST["numero"]) && !empty($_POST["cidade"]) && !empty($_POST["uf"])) {
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

					$contatoDAO->inserir($contato);

					echo "<script>
						alert('Registro inserido com sucesso!');
						location='index.php';
					</script>";
				}
				else {
					echo "<script>alert('PREENCHA OS CAMPOS OBRIGATÓRIOS!');</script>";
				}
			}
		}

		/*
		 * EDITAR CONTATO
		 */
		public function editarContato() {
			$contatoDAO = new ContatoDAO();
			$ret = $contatoDAO->listarContato($_GET["id"]);
			$estado = $contatoDAO->listarEstados();

			require_once "views/edit_contato.php";

			if (isset($_POST["save"])) {
				if (!empty($_POST["nome"]) && !empty($_POST["celular"]) && !empty($_POST["endereco"]) && !empty($_POST["numero"]) && !empty($_POST["cidade"]) && !empty($_POST["uf"])) {
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
				else {
					echo "<script>alert('PREENCHA OS CAMPOS OBRIGATÓRIOS!');</script>";
				}
			}

			// se o usuário cancelou a operação, voltar para listagem
			if (isset($_POST["cancel"])) {
				echo "<script>location='index.php';</script>";
				// header("Location:index.php");
			}
		}

		/*
		 * APAGAR CONTATO
		 */
		public function apagarContato() {
			$contatoDAO = new ContatoDAO();
			$contatoDAO->apagar($_GET["id"]);
			echo "<script>
				alert('Registro apagado!');
				location='index.php';
			</script>";
		}
	}
