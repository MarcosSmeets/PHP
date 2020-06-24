<?php
    include_once("conexao.php");

    $sql = "INSERT INTO cliente VALUES ($_POST[nome], $_POST[email], $_POST[telefone], $_POST[mensagem])";
    if(mysqli_query($conexao, $sql)){
        echo "Cliente inserido com sucesso";
    }else{
        echo "Erro: ".mysqli_error($conexao);
    }

    mysqli_close($conexao);

?>