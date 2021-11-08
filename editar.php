<?php 
include 'conexao.php';

$codigoTecnico = $_POST['codigoTecnico'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$salario = str_replace(',',',',$_POST['salario']);
$telefone = $_POST['telefone'];
$dataNasc = str_replace('/','-',$_POST['data']);
$dataNova = date('Y-m-d',strtotime($dataNasc));

$sql = mysqli_query($conexao,"update tecnico set 
nomeTecnico = '$nome', 
cpfTecnico = '$cpf', 
emailTecnico = '$email',
salario = $salario,
telefone = '$telefone',
dataNascimento = '$dataNova'
where codigoTecnico = $codigoTecnico ");

if (!$sql){
    echo "<script>
        alert ('Erro ao Editar')
        location.href= 'consultarTecnico.php'
    </script>";
}else {
    echo "<script>
        alert ('Editado com Sucesso!')
        location.href='consultarTecnico.php'
    </script>"; 
}
?>