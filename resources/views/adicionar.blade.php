<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/app.css" type="text/css" media="screen">
	<title>Adicionar Registro</title>
</head>
<body>
<h1>Digite abaixo os dados do registro</h1>
<div id="adicionar">
<form id="Adicionar" method="POST" action="/create">
	@csrf
<label>Tipo:</label>
<select id="tipo_imovel" name="tipo_imovel" required>
	<option value="">Selecione</option>
    <option value="Apartamento">Apartamento</option>
    <option value="Casa">Casa</option>
    <option value="Condominio">Condomínio</option>
</select>
<br>
<br>
<label>Valor:</label>
<input type="number" name="valor" required>
<br>
<br>
<label>Data:</label>
<input type="date" name="data" required>
<br>
<br>
<label>Descrição:</label>
<input type="text" name="descricao" required>
<br>
<br>
<button type="submit" name="botao" value="enviar">Enviar</button>
</form>
</div>
</body>
</html>