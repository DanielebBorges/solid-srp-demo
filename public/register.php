<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Application\UserService;
use App\Domain\UserValidator;
use App\Infra\FileUserRepository;

$file = __DIR__ . '/../storage/user.txt';

$service = new UserService(new FileUserRepository($file), new UserValidator);
 
$testUser = [
    'name' => $_POST['name'] ?? null,
    'email' => $_POST['email'] ?? null,
    'password' => $_POST['password'] ?? null,
];

$response = $service->register($testUser);
$httpCode = $response ? 200 : 422;

http_response_code($httpCode);

echo $response ? 'Usuario cadastrado com sucesso' : 'falha no cadastro' ;