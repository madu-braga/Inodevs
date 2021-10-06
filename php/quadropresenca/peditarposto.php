<?php
    session_start();
    include_once("../conexao.php");

    $id = $_POST['id'];
    $posto_de_trabalho = $_POST['posto_de_trabalho'];
    $d = array(0,
        $_POST['1'],
        $_POST['2'],
        $_POST['3'],
        $_POST['4'],
        $_POST['5'],
        $_POST['6'],
        $_POST['7'],
        $_POST['8'],
        $_POST['9'],
        $_POST['10'],
        $_POST['11'],
        $_POST['12'],
        $_POST['13'],
        $_POST['14'],
        $_POST['15'],
        $_POST['16'],
        $_POST['17'],
        $_POST['18'],
        $_POST['19'],
        $_POST['20'],
        $_POST['21'],
        $_POST['22'],
        $_POST['23'],
        $_POST['24'],
        $_POST['25'],
        $_POST['26'],
        $_POST['27'],
        $_POST['28'],
        $_POST['29'],
        $_POST['30'],
        $_POST['31']
    );
    $k = 0;
    while ($k <= 31){
        if ($d[$k] == 'F'){
            $d[$k] = '';
        }
        $k++;
    }

    $result_posto = "UPDATE presenca_posto SET posto_de_trabalho='$posto_de_trabalho', d1 = '$d[1]', d2 ='$d[2]', d3 ='$d[3]', d4 ='$d[4]', d5 ='$d[5]', d6 ='$d[6]', d7 ='$d[7]', d8 ='$d[8]', d9 ='$d[9]', d10 ='$d[10]', d11 ='$d[11]', d12 ='$d[12]', d13 ='$d[13]', d14 ='$d[14]', d15 ='$d[15]', d16 ='$d[16]', d17 ='$d[17]', d18 ='$d[18]', d19 ='$d[19]', d20 ='$d[20]', d21 ='$d[21]', d22 ='$d[22]', d23 ='$d[23]', d24 ='$d[24]', d25 ='$d[25]', d26 ='$d[26]', d27 ='$d[27]', d28 ='$d[28]', d29 ='$d[29]', d30 ='$d[30]', d31 ='$d[31]' WHERE id='$id'";
    $resultado_posto= mysqli_query($conn, $result_posto);

    if(mysqli_affected_rows($conn)){
        echo "
        <script>
            alert('Posto de trabalho editado com sucesso!');
            location.href='quadropresenca.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Falha ao editar.');
            location.href='editarposto.php?id=$id';
        </script>
        ";
    }
?>