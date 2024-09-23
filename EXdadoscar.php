<meta charset= "UTF-8">
<?php
    $host  = "localhost:3306";
    $user  = "root";
    $pass  = "";
    $base  = "carros";
    $conexao  = mysqli_connect($host, $user, $pass, $base);
    $resu = mysqli_query($conexao, "select * from tb_carros");

    echo "<table border = 3px><tr><td>Código do Usuário</td><td>Nome do Úsuario</td><td>Email do Usuário</td></tr>";
    while($escrever=mysqli_fetch_array($resu)) {
        echo "</td><td>" . $escrever['id'] . "</td><td>" . $escrever['modelo'] . "</td><td>" . $escrever['fabricante'] . "</td><tr>"; 
    }
    echo "</table>";
    echo "</br> </br>";

    mysqli_close($conexao);
?>