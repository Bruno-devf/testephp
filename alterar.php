<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Carros</title>
</head>
<body>
    <h1>Atualização de Carros</h1>
    
    <form action="" method="POST">
        <fieldset>
            <legend>Atualize os dados do carro</legend>
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
                    <td colspan="2">
                        <input type="submit" name="update" value="Atualizar" />
                    </td>
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


    if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST['update'] === "Atualizar") {
     
        $id = $_POST["id"];
        $modelo = $_POST["modelo"];
        $fabricante = $_POST["fabricante"];

   
        $update = mysqli_query($conexao, "UPDATE tb_carros SET modelo='$modelo', fabricante='$fabricante' WHERE id='$id'");

        if ($update) {
            echo "<p>Atualização realizada com sucesso!</p>";
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
                <td>" . $escrever["id"] . "</td>
                <td>" . $escrever["modelo"] . "</td>
                <td>" . $escrever["fabricante"] . "</td>
              </tr>";
    }

    echo "</table></center>";
    echo "<br><br>";

    mysqli_close($conexao);
    ?>
<a href='Index.php'>HOME</a>
</body>
</html>