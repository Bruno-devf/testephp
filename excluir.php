<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Carros</title>
</head>
<body>
    <h1>Deletar Carros</h1>
    
    <form action="" method="POST">
        <fieldset>
            <legend>Deletar carro</legend>
            <table>
                <tr>
                    <td>ID do carro a ser deletado:</td>
                    <td><input type="number" name="id_delete" required /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="delete" value="Deletar" />
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

    if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST['delete'] === "Deletar") {
        $id_delete = $_POST["id_delete"];

        $delete = mysqli_query($conexao, "DELETE FROM tb_carros WHERE id='$id_delete'");

        if ($delete) {
            echo "<p>Carro deletado com sucesso!</p>";
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
</body>
</html>