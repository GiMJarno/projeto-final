<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>Cadastro Dispositivo</title>
    </head>
    <body>
        <form action="caddispositivoenvio.php" method="POST">
            <br>
            Modelo: <input type="text" name="modelo"> <br><br>
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
            <select name=cliente>
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

            <?php
            require('conexao.php');
            $result=mysqli_query($db, "SELECT * FROM dispositivo");
            if(!$result) {
                echo "NÃO FORAM ENCONTRADOS CADASTROS.";
                exit;
            }
                echo "<table width='20%' border='1px'><tr><td width='20%'><strong>CODIGO</strong></td>
                <td width='50%'><strong>MODELO</strong></td><td width='20%'><strong>ARMAZENAMENTO</strong></td>
                <td width='20%'><strong>RAM</strong></td><td width='20%'><strong>PROCESSADOR</strong></td>
                <td width='20%'><strong>PLACA MÃE</strong></td><td width='20%'><strong>CLIENTE</strong></td></tr>";
                $linha=1;
                while($row = mysqli_fetch_assoc($result)) {
                    echo 
                    "<tr>
                        <td>".$row['id']."</td><td>".$row['modelo']."</td><td>".$row['armazenamento']."</td>
                        <td>".$row['ram']."</td><td>".$row['processador']."</td><td>".$row['placamae']."</td>
                        <td>".$row['id']."</td><td widht='50px'>"."<a href='alterardispositivo.php?id=".$row['id']."'>
                        <img widht='40%' src='./icones/alterar.png'title='Alterar Cliente'></a>"."</td>
                    </tr>";
                    $linha++;
                }
            echo"</table>";
            mysqli_free_result($result);
        ?>
        <a href="https://www.flaticon.com/free-icons/pencil" title="pencil icons">Pencil icons created by Freepik - Flaticon</a>
    </body>
</html>
