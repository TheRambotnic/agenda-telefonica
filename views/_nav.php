<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Lucas Rafael de Oliveira Longuini" />
		
		<link rel="stylesheet" type="text/css" href="views/assets/css/layout.css" />
		<!-- <link rel="stylesheet" type="text/css" href="views/assets/font-awesome-5.10/css/all.css"/> -->
		<link rel="stylesheet" type="text/css" href="views/assets/fontawesome-5.15-pro/css/all.css"/>
		<link rel="stylesheet" type="text/css" href="views/assets/js/jquery/plugins/tables.css" />

		<script type="text/javascript" src="views/assets/js/jquery/jquery-3.4.1.js"></script>
		<script type="text/javascript" src="views/assets/js/jquery/plugins/datatables-1.10.js"></script>
		<script type="text/javascript" src="views/assets/js/jquery/plugins/jquery.inputmask.js"></script>

		<title>Agenda Telefônica</title>
	</head>

	<body>
		<header>
			<h1><a href="index.php">Minha Agenda <?php echo date("Y") ?> <span class="fas fa-phone"></span></a></h1>

			<a href="?c=ContatoController&m=inserirContato" class="novo-contato"><span class="fas fa-phone-plus"></span> INSERIR NOVO CONTATO</a>
		</header>
