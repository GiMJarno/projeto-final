<html lang="pt-br">
    <head>
        <script type="text/javascript"></script>
        <title>Clientes</title>
    </head>
    <body>
        <?php
            $nome=$_POST['nome'];
            require('conexao.php');
            $inserir="insert into cliente values('','$nome')";
            mysqli_query($db,$inserir) or die ('Não foi possivel cadastrar');
            echo "<script>alert('Cadastro realizado com sucesso!');
            window.location.href='cadcliente.php'</script>"
        ?>
    </body>
</html>