<html lang="pt-br">
    <head>
        <script type="text/javascript"></script>
        <title>Envio</title>
    </head>
    <body>
        <?php
            $modelo=$_POST['modelo'];
            $armaz=$_POST['armazenamento'];
            echo "$armaz<br>";
            $ram=$_POST['ram'];
            echo "$ram<br>";
            $cpu=$_POST['cpu'];
            echo "$cpu<br>";
            $mb=$_POST['mb'];
            echo "$mb<br>";
            $cliente=$_POST['cliente'];
            echo "$cliente";
            require('conexao.php');
            $inserir="insert into dispositivo values('', '$modelo', '$armaz','$ram','$cpu','$mb','$cliente')";
            mysqli_query($db,$inserir) or die ('Não foi possivel cadastrar');
            echo"<script>alert('Cadastro realizado com sucesso')<script>";
        ?>
    </body>
</html>