<?php
    include 'conexao.php';

    $codigo = $_GET['codigoTecnico'];

    $sql = mysqli_query($conexao,"delete from tecnico where 
    codigoTecnico = $codigo");

    if(!$sql){
        echo "<script>
            alert('Erro ao Excluir')
            location.href='consultarTecnico.php'
        </script>";
    }else{
        echo "<script>
            alert('Excluído com Sucesso!')
            location.href='consultarTecnico.php'
        </script>";
    }

?>