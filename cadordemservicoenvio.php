-<html lang="pt-br">
    <head>
        <script type="text/javascript"></script>
        <title>Envio</title>
    </head>
    <body>
        <?php
            // $post=implode(",",$_POST);
            // echo $post;
            $cliente=$_POST['cliente'];
            $disp=$_POST['dispositivo'];
            $serv=$_POST['servico'];
            $dcc=$_POST['descricao'];
            require('conexao.php');
            $inserir="insert into ordemserv values('','$cliente', '$disp', '$serv', '$dcc')";
            mysqli_query($db,$inserir) or die ('Não foi possivel cadastrar');
            echo "<script>alert('Cadastro realizado com sucesso!');
            window.location.href='cadordemservico.php'</script>";
        ?>
    </body>
</html>