<?php
include("conecta.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
</head>

<body>
    <a href="form.php"> Cadastrar </a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>email</th>
                <th colspan="2"> opções </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Luiz</td>
                <td>Alterar</td>
                <td>Excluir</td>
            </tr>
        </tbody>
    </table>
</body>

</html>