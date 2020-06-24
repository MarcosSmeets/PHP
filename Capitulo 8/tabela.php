<?php
    include("conexao.php");

    $sql = "SELECT * FROM cliente";

    $con = $conexao->query($sql) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
      while ($dado = $con->fetch_array()) {
      ?>
    <tr>
        <td><?php echo $dados['nome']?></td>
        <td><?php echo $dados['email']?></td>
        <td><?php echo $dados['telefone']?></td>
        <td><?php echo $dados['mensagem']?></td>
    </tr>
    <?php } ?>
</body>
</html>