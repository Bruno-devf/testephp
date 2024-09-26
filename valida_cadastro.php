<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php

    $id = $_POST['codigo'];
    $modelos = $_POST['codigo'];
    $fabricantes = $_POST['codigo'];
    $host  = "localhost:3306";
    $user  = "root";
    $pass  = "";
    $base  = "carros";
    $conexao  = mysqli_connect($host, $user, $pass, $base);


    $resu = mysqli_query($conexao, "insert into tb_carros(id, modelo,fabricante) VALUE (id,'modelo','fabricante')");
    echo ("Cadastro realizado com sucesso!");


    $resu = mysqli_query($conexao, "select * from tb_carros");
    echo "</br> </br>";
    echo "<center> <h1>Tabela de Carros (teste)</h1> ";
    echo "<table border = 3px><tr><td>Código do carro</td><td>Modelo</td><td>Fabricante</td></tr>";
    while($escrever=mysqli_fetch_array($resu)) {
        echo "</td><td>" . $escrever['id'] . "</td><td>" . $escrever['modelo'] . "</td><td>" . $escrever['fabricante'] . "</td><tr>"; 
    }
    echo "</table>";
    echo "</br> </br>";
    echo '<center>';

    mysqli_close($conexao);
?>