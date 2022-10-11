<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript"></script>
    <title>Envio</title>
</head>
<body>
    <?php
        $id=$_GET['id'];
        $modelo=$_GET['modelo'];
        $armazenamento=$_GET['armazenamento'];
        $ram=$_GET['ram'];
        $processador=$_GET['processador'];
        $placamae=$_GET['placamae'];
        $cliente=$_GET['cliente'];

        require('conexao.php');
        if(isset($_GET['btExcluir'])){
            $sqldel="DELETE FROM dispositivo WHERE dispositivo.id=$id";
            mysqli_query($db, $sqldel) or die('Não foi possível excluir');
            echo "<script>alert('Cadastro excluido com sucesso!');
            window.location.href='caddispositivo.php'</script>";
        } else {
            $sqlupdade="update dispositivo set modelo='$modelo', 
            armazenamento='$armazenamento', ram='$ram', processador='$processador', 
            placamae='$placamae', idcliente='$cliente' where id='$id'";
            mysqli_query($db, $sqlupdade) or die('Não foi possível alterar');
            echo "<script>alert('Cadastro alterado com sucesso!');
            window.location.href='caddispositivo.php'</script>";
        }
    ?>
</body>
</html>