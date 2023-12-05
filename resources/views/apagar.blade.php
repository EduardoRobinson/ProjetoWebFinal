<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/app.css" type="text/css" media="screen">
	<title>Apagar Registro</title>
</head>
<body>
<h1>Digite qual registro voce deseja apagar</h1>
<div id="apagar">
	<form id="Apagar" method="POST" action="/delete">
		@csrf
	<label>Qual registro voce deseja apagar:</label>
	<input type="search" name="id">
	<br>
	<button type="submit" name="botao" value="enviar">Apagar</button>
	</form>
</div>
@if(!empty($erro))
	<h3>{{ $erro }}</h3>
@endif
@if(!empty($registros))
<div>
<h1>Lista de registros</h1>
<ul>
	@foreach($registros as $registro)
		<li>{{$registro->id}} - Tipo:{{$registro->tipo_imovel}} - Valor:{{$registro->valor}} - Data:{{$registro->data}} - Descrição:{{$registro->descricao}}</li>
	@endforeach
</ul>
</div>
@endif
</body>
</html>