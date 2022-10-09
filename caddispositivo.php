<html lang="pt-br">
    <head>
        <title>Cadastro Dispositivo</title>
    </head>
    <body>
        <form action="caddispositivoenvio.php" method="POST">
            <br>
            Modelo: <input type="text" name="disp"> <br><br>
            Tipo de Armazenamento 
            <select name=armazenamento>
                <option>Tipo de Armazenamento</option>
                <option>HD</option>
                <option>SSD</option>
            </select> <br><br>
            Memória RAM
            <select name=ram>
                <option>Quantidade de RAM</option>
                <option>2GB</option>
                <option>4GB</option>
                <option>8GB</option>
                <option>16GB</option>
            </select> <br><br>
            Processador
            <select name=cpu>
                <option>Processador</option>
                <option>Intel</option>
                <option>AMD</option>
            </select> <br><br>
            Placa Mãe
            <select name=mb>
                <option>Tipo de Placa</option>
                <option>LGA</option>
                <option>AM3</option>
                <option>AM3+</option>
                <option>AM4</option>
            </select> <br><br>
            Cliente
            <select name= cliente>
                <?php
                    require('conexao.php');
                    $sql="select id, nome from cliente";
                    $result=mysqli_query($db,$sql) or die (mysqli_error());
                    echo"<option value='Selecione...'>Selecione...</option>";
                    while($dados=mysqli_fetch_array($result)){
                        echo"<option value='".utf8_encode($dados['id'])."'>".utf8_encode($dados['nome'])."</option>";
                    }
                ?>
            </select>
            <br><br>
            <input type="submit" value="CADASTRAR">
            <input type="reset" value="LIMPAR">
    </body>
</html>
