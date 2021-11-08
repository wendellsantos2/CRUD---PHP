<!DOCTYPE html>
<html>
<head>
	<title>Aula 05</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Editar Cliente</h1>
	</header>

	<section>
		<?php
			
			include 'conexao.php';
			$tecnico = $_GET["codigoTecnico"];
        	$sql = mysqli_query($conexao,"select * from tecnico where codigoTecnico = $tecnico");
        	$linha = mysqli_fetch_array($sql);

        	if ($linha) {
        		echo '
        		<form action="editar.php" method="POST">
					<table>	
						<tr>
							<td><input type="hidden" name="codigoTecnico" id="codigoTecnico" 
							value="'.$linha["codigoTecnico"].'" ></td>
						</tr>
						<tr>
							<td><label id="nome">Nome</label></td>
							<td><input type="text" name="nome" id="nome" required value="'.$linha["nomeTecnico"].'"></td>
							<td><label id="cpf">CPF</label></td>
							<td><input type="text" name="cpf" id="cpf" required value="'.$linha["cpfTecnico"].'"></td>
						</tr>
						<tr>
							<td><label id="email">Email</label></td>
							<td><input type="email" name="email" id="email" required value="'.$linha["emailTecnico"].'"></td>
							<td><label id="salario">Salário R$:</label></td>
							<td><input type="text" name="salario" id="salario" required 
								value="'.str_replace('.', ',',$linha["salario"]).'"></td>
						</tr>
						<tr>
							<td><label id="data">Data de Nascimento</label></td>
							<td><input type="date" name="data" id="data" required value="'.$linha["dataNascimento"].'"></td>
							<td><label id="telefone">Telefone</label></td>
							<td><input type="text" name="telefone" id="telefone" required value="'.$linha["telefone"].'" ></td>
						</tr>
						<tr>
							<td><button type="submit" class="padrao">Editar</button></td>
							<td><button type="reset" class="limpar">Limpar</button></td>
						</tr>			
					</table>		
				</form>
        	';
        	}else{
        		echo "<script>
        			alert('Item não Encontrado')
        			location.href='consultarTecnico.php'
        		</script>";
        	}
        	


		?>
	</section>

</body>
</html>