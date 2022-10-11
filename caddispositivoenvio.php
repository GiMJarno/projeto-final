<html lang="pt-br">
    <head>
        <script type="text/javascript"></script>
        <title>Envio</title>
    </head>
    <body>
        <?php
            $modelo=$_POST['modelo'];
            $armazenamento=$_POST['armazenamento'];
            $ram=$_POST['ram'];
            $processador=$_POST['processador'];
            $placamae=$_POST['placamae'];
            $cliente=$_POST['cliente'];
            require('conexao.php');
            $inserir="insert into dispositivo values('', '$modelo', '$armazenamento',
            '$ram','$processador','$placamae','$cliente')";
            mysqli_query($db,$inserir) or die ('Não foi possivel cadastrar');
            echo "<script>alert('Cadastro realizado com sucesso!');
            window.location.href='caddispositivo.php'</script>";;
        ?>
    </body>
</html>