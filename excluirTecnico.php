<?php
    include 'conexao.php';
    
    echo "<meta charset='utf-8'>";
    
    $codigo = $_GET['codigoTecnico'];
    
    echo "<h1>Excluir Técnico</h1>";
    
    echo "Excluir o técnico de Código: ".$codigo."<br>";

    echo '<a href="excluir.php?codigoTecnico='.$codigo.'">SIM
    </a><br>';

    echo '<a href="consultarTecnico.php?codigoTecnico='.$codigo.'">
    Não</a><br>';
?> 