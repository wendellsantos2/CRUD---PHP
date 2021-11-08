<?php
	include 'conexao.php';
	$nome = $_POST['nomeProduto'];
	$imagem = $_FILES['imagem'];


	if (isset($_FILES['imagem'])) {
		$extensao = strtolower(substr($_FILES['imagem'] ['name'],-4));
		$imagem = md5(time()).$extensao;
		$diretorio = 'imagens/';
		move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$imagem);
	}

	$sql = mysqli_query($conexao,"insert into produto (nomeProduto,imagem) values ('$nome','$imagem')");

	if ($sql) {
		echo "<script>
			alert('Produto $nome cadastrado com Sucesso')
			location.href='produto.php'
		</script>";
	}else{
		echo "<script>
			alert('Produto $nome  não foi cadastrado<br>Verifique o erro')
			location.href='produto.php'
		</script>";
	}



?>
