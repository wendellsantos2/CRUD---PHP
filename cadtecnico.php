<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AUla 04</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<header>
		<?php
			include 'menu.php';
		?>
		<div class="content">
			<h1>Cadastrar Cliente</h1>
		</div>
	</header>

	<form action="tecnico.php" method="POST">
		<table>
			<tr>
				<td><label id="nome">Nome</label></td>
				<td><input type="text" name="nome" id="nome" required></td>
				<td><label id="cpf">CPF</label></td>
				<td><input type="text" name="cpf" id="cpf" required></td>				
			</tr>
			<tr>
				<td><label id="email">Email</label></td>
				<td><input type="email" name="email" id="email" required></td>
				<td><label id="salario">Salário R$:</label></td>
				<td><input type="text" name="salario" id="salario"></td>				
			</tr>
			<tr>
				<td><label id="data">Data de Nascimento</label></td>
				<td><input type="date" name="data" id="data" required></td>
				<td><label id="Telefone">Telefone</label></td>
				<td><input type="text" name="telefone" id="telefone"></td>				
			</tr>
			<tr>
				<td><button type="submit" class="padrao">Enviar</button></td>
				<td><button type="reset" class ="limpar">Limpar</button></td>
			</tr>			
		</table>		
	</form>
</body>
</html>