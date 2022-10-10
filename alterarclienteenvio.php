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
        $nome=$_GET['nome'];
        require('conexao.php');
        if($_GET['btExcluir'] == true){
            $sqldrop="DELETE FROM cliente WHERE cliente.id=$id";
            mysqli_query($db, $sqldrop) or die('Não foi possível excluir');
            echo "<script>alert('Cadastro excluido com sucesso!');
            window.location.href='cadcliente.php'</script>";
        } else {
            $sqlupdade="update cidade set nomecidade ='$nome' where idcidade='$id'";
            mysqli_query($db, $sqlupdade) or die('Não foi possível alterar');
            echo "<script>alert('Cadastro alterado com sucesso!');
            window.location.href='cadcliente.php'</script>";
        }
    ?>
</body>
</html>