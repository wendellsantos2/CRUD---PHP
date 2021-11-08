<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<?php
		include 'menu.php';
	?>
	<header>
		<h1>Cadastro de Produto</h1>
	</header>
	<section>
		<form action="produtoImagem.php" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td><label id="nome">Nome</label></td>
					<td><input type="text" name="nomeProduto"></td>
				</tr>
				<tr>
					<td><label id="image">Image</label></td>
					<td><input type="file" name="imagem"></td>
				</tr>
				<tr>
					<td><button type="submit" class="padrao">Cadastrar</button></td>
				</tr>
			</table>
		</form>
	</section>	
</body>
</html>