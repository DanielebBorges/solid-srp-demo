<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Infra\FileUserRepository;
use App\Application\ListUsersService;

$filePath = __DIR__ . '/../storage/user.txt';

$repository = new FileUserRepository($filePath);

$service = new ListUsersService($repository);

$usuarios = $service->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>    
    <h1>Lista de Usuários </h1>
    <?php
        if (empty($usuarios)) {
            echo "Usuários não encontrados";
        } else {
           echo "<table border='1'>";
        echo "<tr><th>Nome</th><th>E-mail</th></tr>";

        foreach ($usuarios as $linha) {
            $user = json_decode($linha, true);
            echo "<tr>";
            echo "<td>" . $user['name'] . "</td>";
            echo "<td>" . $user['email'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>

</body>
</html>

