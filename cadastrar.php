<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="valida_cadastro.php" methode="post">
        <fieldset>
            <table>
                <tr>
                    <td>Informe o Código: </td>
                    <td><input size="15" name="id"></td>
                </tr>
                <tr>
                    <td>Informe o Modelo do Carro </td>
                    <td><input size="15" name="modelos"></td>
                </tr>
                <tr>
                    <td>Informe a Fabricante</td>
                    <td><input size="15" name="fabricantes"></td>
                </tr>
                <tr>
                    <td colspan=2><input type="SUBMIT" value="Cadastrar"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>