<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="recebe-dados.php" method="POST">
        <p>Nome: <input type="text" name="nome" id="nome"></p>
        <p>Email: <input type="email" name="email" id="email"></p>
        <p>Idade: <input type="number" name="idade" id="idade"></p>
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>