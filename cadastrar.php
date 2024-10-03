<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Carros</title>
</head>
<body>
    <h1>Cadastro de Carros</h1>
    <form action="" method="POST">
        <fieldset>
            <legend>Insira os dados do carro</legend>
            <table>
                <tr>
                    <td>ID:</td>
                    <td><input type="number" name="id" required /></td>
                </tr>
                <tr>
                    <td>Modelo:</td>
                    <td><input type="text" name="modelo" required /></td>
                </tr>
                <tr>
                    <td>Fabricante:</td>
                    <td><input type="text" name="fabricante" required /></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Cadastrar" /></td>
                </tr>
            </table>
        </fieldset>
    </form>
<?php

    $host = "localhost"; 
    $user = "root";
    $pass = "";
    $base = "carros";
    $conexao = mysqli_connect($host, $user, $pass, $base);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = mysqli_real_escape_string($conexao, $_POST["id"]);
        $modelo = mysqli_real_escape_string($conexao, $_POST["modelo"]);
        $fabricante = mysqli_real_escape_string($conexao, $_POST["fabricante"]);

       
        $input = mysqli_query($conexao, "INSERT INTO tb_carros (id, modelo, fabricante) VALUES ('$id', '$modelo', '$fabricante')");

        if ($input) {
            echo "<p>Cadastro realizado com sucesso!</p>";
        } else {
            echo "<p>Error: " . mysqli_error($conexao) . "</p>";
        }
    }

 
    $resultadoQueryMySQL = mysqli_query($conexao, "SELECT * FROM tb_carros");
    echo "<center><table border='3'>
            <tr>
                <td>ID</td>
                <td>Modelo</td>
                <td>Fabricante</td>
            </tr>";
    
    while ($escrever = mysqli_fetch_array($resultadoQueryMySQL)) {
        echo "<tr>
                <td>" . htmlspecialchars($escrever["id"]) . "</td>
                <td>" . htmlspecialchars($escrever["modelo"]) . "</td>
                <td>" . htmlspecialchars($escrever["fabricante"]) . "</td>
              </tr>";
    }

    echo "</table></center>";
    echo "<br><br>";

    mysqli_close($conexao);
    ?>
    <a href='Index.php'>HOME</a>
</body>
</html>