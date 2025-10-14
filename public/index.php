<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRP Demo</title>
</head>
<body>
    <h1>Cadastro de Usuario</h1>
    <form action="register.php" method="POST">
        <label>Nome<input name="name" required></label>
        <label>E-mail<input name="email" type="email" required></label>
        <label>Senha<input name="password" type="password" required></label>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>