<?php

require_once __DIR__ . "/../config/jwt.php";

function require_auth(): array {
    $headers = getallheaders();

    if (!isset($headers["Authorization"])) {
        http_response_code(401);
        echo json_encode(["error" => "Missing Authorization header"]);
        exit;
    }

    if (!preg_match('/Bearer\s(\S+)/', $headers["Authorization"], $matches)) {
        http_response_code(401);
        echo json_encode(["error" => "Invalid token format"]);
        exit;
    }

    $payload = validate_jwt(
        $matches[1],
        $_ENV["JWT_SECRET"] ?? "dev_secret_key"
    );

    if (!$payload) {
        http_response_code(401);
        echo json_encode(["error" => "Invalid or expired token"]);
        exit;
    }

    return $payload;
}
