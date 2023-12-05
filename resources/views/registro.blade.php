<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/app.css" type="text/css" media="screen">
	<title>Registros</title>
</head>
<body>
	<h1>Ola {{ auth()->user()->name }}</h1>
	<h2>Bem vindo a tela de registros</h2>
	<div id="opcoes">
		<a href="/adicionar"><button>Adicionar Registro</button></a>
		<br>
		<a href="/apagar"><button>Apagar Registro</button></a>
		<br>
		<a href="/alterar"><button>Alterar Registro</button></a>
		<br>
		<a href="/listar"><button>Listar Registros</button></a>
	</div>
<footer>
	<form method="POST" action="/logout">
		@csrf
	<button type="submit">Realizar Logout</button>
	</form>
</footer>
</body>
</html>