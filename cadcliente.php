<!doctype HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Clientes</title>
    <?php include "menu.php";?>

        <form style="color:white;" action=cadclienteenvio.php method=POST>
            Nome<input style="margin-left:10px;" type=text name=nome> <br> <br>
        <?php
            require('conexao.php');
            $result=mysqli_query($db, "SELECT * FROM cliente");
            if(!$result) {
                echo "NÃO FORAM ENCONTRADOS CADASTROS.";
                exit;
            }
                echo "<table width='25%' border='1px'><tr><td width='20%'><strong>CODIGO</strong></td>
                <td width='50%'><strong>NOME</strong></td></tr>";
                $linha=1;
                while($row = mysqli_fetch_assoc($result)) {
                    echo 
                    "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['nome']."</td>
                        <td>"."<a href='alterarcliente.php?id=".$row['id']."'>
                        <img src='icones\alterar.png' title='Alterar Dispositivo'></a>"."</td>
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
        <a href="https://www.flaticon.com/free-icons/pencil" title="pencil icons">
            Pencil icons created by Freepik - Flaticon
        </a>
    <?php include "rodape.php"?>

