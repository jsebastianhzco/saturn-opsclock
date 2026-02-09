<?php

use Firebase\JWT\JWT;

require_once __DIR__ . '/../config/jwt.php';
require_once __DIR__ . '/../crud/AuthCrud.php';
require_once __DIR__ . '/../vendor/autoload.php';

if ($method !== 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
    exit;
}

$data = json_decode(file_get_contents("php://input"), true);

if (empty($data['email']) || empty($data['password'])) {
    http_response_code(400);
    echo json_encode(["error" => "Email and password required"]);
    exit;
}

$user = AuthCrud::findByEmail($pdo, $data['email']);

if (!$user || !password_verify($data['password'], $user['password_hash'])) {
    http_response_code(401);
    echo json_encode(["error" => "Invalid credentials"]);
    exit;
}

$payload = [
    "iss" => JWT_ISSUER,
    "iat" => time(),
    "exp" => time() + JWT_EXPIRE,
    "sub" => $user['user_id'],
    "role" => $user['role'],
    "employee_id" => $user['employee_id']
];

$token = JWT::encode($payload, JWT_SECRET, 'HS256');

echo json_encode([
    "token" => $token,
    "user" => [
        "id" => $user['user_id'],
        "employee_id" => $user['employee_id'],
        "name" => $user['name'],
        "role" => $user['role']
    ]
]);
