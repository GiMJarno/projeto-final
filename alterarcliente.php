<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Alterar Cliente</title>
</head>
<?php
    $idcliente=$_GET['id'];
    require('conexao.php');
    $sql="select id, nome from cliente where id='$idcliente'";
    $result=mysqli_query($db,$sql);
    if(!$result){
        die(mysqli_error());
    }
    $row=mysqli_fetch_assoc($result);
?>
<body>
    <form action="alterarclienteenvio.php" method="GET">
        <input name="id" type="hidden" value="<?php echo $row['id']?>">
        Cliente: <input type="text" name="cliente" value="<?php echo $row['nome']?>"><br><br>
        <input type="submit" value="ALTERAR" name="btSalvar" onclick="locaton.href='relatorio_cliente.php';">
        <input type="submit" value="EXCLUIR" name="btExcluir" 
        onclick="return confirm('Tem certeza que deseja excluir o cliente ' + '<?php echo $row['nome']?>' + '?')";>
        <input type="button" value="CANCELAR" name="btSair" onclick="location.href='cadcliente.php';">
    </form>
</body>
</html>