<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 05</title>

	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<?php
			include 'menu.php';
		?>
		<div class="content">
			<h1>Consultar Cliente</h1>
		</div>
	</header>
	
	<div class="content">
		<form action="#" method="POST">
		<table>
			<tr>
				<td><label id="nome">Digite o CPF</label></td>
				<td><input type="text" name="cpf" id="cpf" required></td>
				<td><button type="submit" name="enviar" class="padrao">Enviar</button></td>
			</tr>			
		</table>		
	</form>
	</div>
	<?php
		include 'conexao.php';

		if(isset($_POST['enviar'])){
			$cpf = $_POST['cpf'];

			$sql = mysqli_query($conexao,"select * from tecnico where cpfTecnico = '$cpf'");
			
			if($sql){
				echo '<table class="resultado">';
						echo '<tr>
							<th>Código</th>
							<th>Nome</th>
							<th>CPF</th>
							<th>Email</th>
							<th>Salário</th>							
							<th>Telefone</th>
							<th>Data de Nascimento</th>
							<th>Data de Cadastro</th>
							<th>Controle:</th>
						</tr>';
				while($linha = mysqli_fetch_array($sql)){

					//declare a data aqui:
					$dataNasc = str_replace('-/', '/', $linha['dataNascimento']);
					$dataCad = str_replace('-','/', $linha['dataCadastro']);
					echo '<td class="busca">'.$linha["codigoTecnico"].'</td>
						  <td class="busca">'.$linha["nomeTecnico"].'</td>
						  <td class="busca">'.$linha["cpfTecnico"].'</td>
						  <td class="busca">'.$linha["emailTecnico"].'</td>
						  <td class="busca"> R$ '.str_replace('.', ',', $linha["salario"]).'</td>
						  <td class="busca">'.$linha["telefone"].'</td>';
						  echo '<td class="busca">'.date('d/m/Y',strtotime($dataNasc)).'</td>
						  <td class="busca">'.date('d/m/Y',strtotime($dataCad)).'</td>
						  <td>
						  	<a href="editarTecnico.php?codigoTecnico='.$linha['codigoTecnico'].'">
						  	<button class="editar">Editar</button></a>
						  	<a href="excluirTecnico.php?codigoTecnico='.$linha['codigoTecnico'].'">
						  	<button class="excluir">Excluir</button></a>
						  </td>';
						  echo '</table>';
				}			    

			}else{
				echo 'CPF Não cadastrado';
			}
		}
	?>
</body>
</html>