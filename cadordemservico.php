<!doctype HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Ordens de Serviço</title>
    <?php include "menu.php";?>
        <form style="color:white;" action=cadordemservicoenvio.php method=POST>
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
            Dispositivo
            <select name="dispositivo">
                <?php
                    require('conexao.php');
                    $sql="select id, modelo from dispositivo";
                    $result=mysqli_query($db,$sql) or die (mysqli_error());
                    echo"<option value='Selecione...'>Selecione...</option>";
                    while($dados=mysqli_fetch_array($result)){
                        echo"<option value='".utf8_encode($dados['id'])."'>".utf8_encode($dados['modelo'])."</option>";
                    }
                ?>
            </select>
            <br><br>
            Serviço
            <select name="servico">
                <option>Selecione o Serviço</option>
                <option>Manutenção/Limpeza</option>
                <option>Instalação</option>
                <option>Montagem</option>
            </select> <br><br>
            Descrição <input type=text name=descricao><br><br>

            <input type=submit value=CADASTRAR>
            <input type=reset value=LIMPAR><br><br>
            <?php
                require('conexao.php');
                $result=mysqli_query($db, "SELECT * FROM ordemserv");
                if(!$result) {
                    echo "NÃO FORAM ENCONTRADOS CADASTROS.";
                    exit;
                }
                    echo "<table border=1>
                    <tr>
                        <td><strong>CODIGO</strong></td>
                        <td><strong>ID CLIENTE</strong></td>
                        <td><strong>ID DISPOSITIVO</strong></td>
                    </tr>";
                    $linha=1;
                    while($row = mysqli_fetch_assoc($result)) {
                        echo 
                        "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['cliente_idcliente']."</td>
                        <td>".$row['dispositivo']."</td>
                        <td>".$row['servico']."</td>
                        <td>".$row['descricao']."</td>
                        <td>"."<a href='alterarordemserv.php?id=".$row['id']."'>
                        <img src='icones\alterar.png' title='Alterar Dispositivo'></a>"."</td>
                        </tr>";
                        $linha++;
                    }
                echo"</table><br><br>";
                mysqli_free_result($result);
            ?>
        </form>
        <div>
            <a href="https://www.flaticon.com/free-icons/pencil" title="pencil icons">Pencil icons created by Freepik - Flaticon</a>
        </div>
        
    <?php include "rodape.php";?>