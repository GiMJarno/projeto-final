<html lang="pt-br">
    <head>
        <script type="text/javascript"></script>
        <title>Envio</title>
    </head>
    <body>
        <?php
            $modelo=$_POST['modelo'];
            $armaz=$_POST['armazenamento'];
            $ram=$_POST['ram'];
            $cpu=$_POST['cpu'];
            $mb=$_POST['mb'];
            $cliente=$_POST['cliente'];
            require('conexao.php');
            $inserir="insert into dispositivo values('', '$modelo', '$armaz','$ram','$cpu','$mb','$cliente')";
            mysqli_query($db,$inserir) or die ('Não foi possivel cadastrar');
            echo"<script>alert('Cadastro realizado com sucesso')<script>";
        ?>
    </body>
</html>