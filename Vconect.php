<meta charset=UTF-8">
<?php
    $host  = "localhost:3306";
    $user  = "root";
    $pass  = "";
    $base  = "pw2";
    $conexao  = mysqli_connect($host, $user, $pass, $base);

    echo "<br>";
    echo "Conexao ok";

    mysql_close($conexao);
?>