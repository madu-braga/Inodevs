<?php
    session_start();
    include_once("../conexao.php");
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $result_posto = "SELECT * FROM presenca_posto where id='$id'";
    $resultado_posto= mysqli_query($conn, $result_posto);
    $linha_posto = mysqli_fetch_assoc($resultado_posto);
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Posto de Trabalho</title>
    <link rel="stylesheet" href="../../css/quadro.css">
</head>
<body>
    <div class=principalforms>
    <h1>Editar Posto de Trabalho</h1>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <form method="POST" action="peditarposto.php">
        <input type="hidden" name="id" value="<?php echo $linha_posto ['id']; ?>" required>
        <label>Posto de Trabalho:</label><br>
        <input type="text" name="posto_de_trabalho" placeholder="Edite o posto de trabalho" value="<?php echo $linha_posto ['posto_de_trabalho']; ?>" required><br><br>
        <label>Presenças: </label>
        <table>
        <tr>
        <?php 
                $mes = date("n");
                $mes_extenso = array(0,
                    'Janeiro',
                    'Fevereiro',
                    'Marco',
                    'Abril',
                    'Maio',
                    'Junho',
                    'Julho',
                    'Agosto',
                    'Setembro',
                    'Outubro',
                    'Novembro',
                    'Dezembro'
                );
                if ($mes == 2){
                    echo "<td id='titulo' colspan='28'>$mes_extenso[$mes]</td>";
                } elseif ($mes == 4 ||  $mes == 6 || $mes == 9 || $mes == 11){
                    echo "<td id='titulo' colspan='30'>$mes_extenso[$mes]</td>";
                } else {
                    echo "<td id='titulo' colspan='31'>$mes_extenso[$mes]</td>";
                }
        ?>
        <tr>
        <?php
                $n1 = 1;
                while ($n1<=date('t')){
                    echo "<td id='titulo'>$n1</td>";
                    $n1++;
                }
        ?>
        </tr>
        <tr>
        <?php
                $n3 = 1;
                $dnumero = 'd' . $n3;
                while ($n3<=date('d')){
                    if  ($linha_posto[$dnumero] == 'P') {
                        echo "<td class='branco'>
                        <select name='$n3'>
                            <option selected value='P'>P</option>
                            <option value=''>F</option>
                            <option value='E'>E</option>
                        </select>
                        </td>";
                        $n3++;
                        $dnumero = 'd' . $n3;
                    }
                    else if ($linha_posto[$dnumero] == 'E'){
                        echo "<td class='branco'>
                        <select name='$n3'>
                            <option value='P'>P</option>
                            <option value=''>F</option>
                            <option selected value='E'>E</option>
                        </select>
                        </td>";
                        $n3++;
                        $dnumero = 'd' . $n3;
                    }
                    else if ($n3 == date('d')){
                        echo "<td class='branco'>
                        <select name='$n3'>
                            <option value='' selected hidden></option>
                            <option value='P'>P</option>
                            <option value=''>F</option>
                            <option value='E'>E</option>
                        </select>
                        </td>";
                        $n3++;
                        $dnumero = 'd' . $n3;
                    }
                    else{
                        echo "<td class='branco'>
                        <select name='$n3'>
                            <option value='P'>P</option>
                            <option selected value=''>F</option>
                            <option value='E'>E</option>
                        </select>
                        </td>";
                        $n3++;
                        $dnumero = 'd' . $n3;
                    }
                }
                
                while ($n3<=date('t')){
                    echo "<td class='branco'><input type='hidden' class='quadro' name='$n3' value=''></td>";
                    $n3++;
                }
                if ($mes == 2){
                    echo "<input type='hidden' name='29' value='' required>";
                    echo "<input type='hidden' name='30' value='' required>";
                    echo "<input type='hidden' name='31' value='' required>";
                } 
                if  ($mes == 4 ||  $mes == 6 || $mes == 9 || $mes == 11){
                    echo "<input type='hidden' name='31' value='' required>";
                }
                
        ?>
        </tr>

        </tr>
        </table>
            <input type="submit" value="Editar">
    </form>
    <br><br>
    <div class="left">
    </div>
    </div>
    <div class="voltar"><a href="quadropresenca.php">Retornar</a></div>
</body>
</html>