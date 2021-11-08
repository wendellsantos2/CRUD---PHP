<?php
    include 'conexao.php';

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $salario = str_replace(',','.',$_POST['salario']);
    $dataNasc = str_replace('/','-',$_POST['data']);
    $dataNova = date('Y-m-d',strtotime($dataNasc));

    $sql = mysqli_query($conexao,"insert into tecnico
    (nomeTecnico,
    cpfTecnico,
    emailTecnico,
    telefone,
    salario,
    dataNascimento) 
    
    values 

    ('$nome',
    '$cpf',
    '$email',
    '$telefone',
    $salario,
    '$dataNova')");

    if($sql){
        echo "<script> 
        alert ('Cadastrado com Sucesso')
        location.href='cadtecnico.php'
        
             </script>"; 
         ;
    }else{
        echo "<script> 
        alert ('Erro ao cadastrar')
        location.href='cadtecnico.php'
        
             </script>"; 
            
    }
/*
    echo "Dados Informados<br>";
    echo 'Nome: '.$nome.'<br>';
    echo 'CPF: '.$cpf.'<br>';
    echo 'E-mail: '.$email.'<br>';
    echo 'Telefone: '.$telefone.'<br>';
    echo 'Salário R$: '.$salario.'<br>';
    echo 'Data de Nascimento: '.$dataNova.'<br>';
    
    echo '<br>';

    echo '<a href="tecnico.html"><button type="button">Voltar
    </button></a>';
*/


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">