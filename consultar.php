<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar Carros</title>
</head>
<body>
    <h1>Encontrar carro</h1>
    
    <form action="" method="POST">
        <fieldset>
            <legend>Encontar carros</legend>
            <table>
                <tr>
                    <td>ID do carro :</td>
                    <td><input type="number" name="id" required /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="Procurar" value="Procurar" />
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

    if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST['Procurar'] === "Procurar") {
        $id = $_POST["id"];
        $query = "SELECT * FROM tb_carros WHERE id='$id'";
        $resultadoQueryMySQL = mysqli_query($conexao, $query);

        if ($resultadoQueryMySQL && mysqli_num_rows($resultadoQueryMySQL) > 0) {
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
        } else {
            echo "<p>Carro não encontrado.</p>";
        }
    }

    mysqli_close($conexao);
    ?>
    <a href='Index.php'>HOME</a>
</body>
</html>