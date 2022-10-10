<!doctype HTML>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>Clientes</title>
    </head>
    <body>
        Cadastros de Clientes <br><br>
        <form action=cadclienteenvio.php method=POST>
            Nome <input type=text name=nome> <br> <br>
        <?php
            require('conexao.php');
            $result=mysqli_query($db, "SELECT * FROM cliente");
            if(!$result) {
                echo "NÃO FORAM ENCONTRADOS CADASTROS.";
                exit;
            }
                echo "<table width='25%' border='1px'><tr><td width='25%'><strong>CODIGO</strong></td>
                <td width='50%'><strong>NOME</strong></td></tr>";
                $linha=1;
                while($row = mysqli_fetch_assoc($result)) {
                    echo 
                    "<tr>
                        <td>".$row['id']."</td><td>".$row['nome']."</td>
                        <td>"."<a href='alterarcliente.php?id=".$row['id']."'>
                        <img width='50%' src='icones/alterar.png'title='Alterar Cliente'></a>"."</td>
                    </tr>";
                    $linha++;
                }
            echo"</table>";
            mysqli_free_result($result);
        ?>
        <br>
            <input type=submit value=CADASTRAR>
            <input type=reset value=LIMPAR>
        </form>
    </body>
<!--
Dispositivo
<select name= cidade>
<?php
require('conexao.php');
$sql="select idcliente, cliente.nome from cidade";
$result=mysqli_query($db,$sql) or die (mysqli_error());
echo"<option value='Selecione...'>Selecione...</option>";
while($dados=mysqli_fetch_array($result)){
    echo"<option value='".utf8_encode($dados['idcliente'])."'>".utf8_encode($dados['cliente.nome'])."</option>";
}
?>
-->
</html>
