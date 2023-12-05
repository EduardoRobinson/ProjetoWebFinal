<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/app.css" type="text/css" media="screen">
	<title>Lista Registros</title>
</head>
<body>
<h1>Lista dos registros:</h1>
<div>
<form method="POST" action="/read">
	@csrf
<label>Tipo do registro:</label>
<select id="tipo_imovel" name="tipo_imovel">
	<option value="">Todos</option>
    <option value="Apartamento">Apartamento</option>
    <option value="Casa">Casa</option>
    <option value="Condominio">Condomínio</option>
</select>
<button type="submit" name="botao" value="enviar">Listar</button>
</form>
</div>
@if(!empty($registros))
<div>
<h1>Registros</h1>
<ul>
@foreach($registros as $registro)
		<li>{{$registro->id}} - Tipo:{{$registro->tipo_imovel}} - Valor:{{$registro->valor}} - Data:{{$registro->data}} - Descrição:{{$registro->descricao}}</li>
	@endforeach
</ul>
</div>
@endif
</body>
</html>