<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Alterar Dispositivo</title>
</head>
<?php
    $iddispositivo=$_GET['id'];
    require('conexao.php');
    $sql="select id, modelo, armazenamento, ram, processador, placamae, 
    idcliente from dispositivo where id='$iddispositivo'";
    $result=mysqli_query($db,$sql);
    if(!$result){
        die(mysqli_error());
    }
    $row=mysqli_fetch_assoc($result);
?>
<body>
    <?php include "menu.php";?>

    <form action="alterardispositivoenvio.php" method="GET">
        <input name="id" type="hidden" value="<?php echo $row['id']?>">
        Modelo: <input type="text" name="modelo" value="<?php echo $row['modelo']?>"><br><br>
        Armazenamento: <input type="text" name="armazenamento" value="<?php echo $row['armazenamento']?>"><br><br>
        RAM: <input type="text" name="ram" value="<?php echo $row['ram']?>"><br><br>
        Processador: <input type="text" name="processador" value="<?php echo $row['processador']?>"><br><br>
        Placa Mãe: <input type="text" name="placamae" value="<?php echo $row['placamae']?>"><br><br>
        Cliente: <input type="text" name="cliente" value="<?php echo $row['idcliente']?>"><br><br>
        
        <input type="submit" value="ALTERAR" name="btSalvar" onclick="location.href='relatorio_dispositivo.php';">
        <input type="submit" value="EXCLUIR" name="btExcluir" 
        onclick="return confirm('Tem certeza que deseja excluir o dispositivo ' + '<?php echo $row['modelo']?>' + '?')";>
        <input type="button" value="CANCELAR" name="btSair" onclick="location.href='caddispositivo.php';">
    </form>
</body>
</html>