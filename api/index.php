<?php
header("Content-Type: application/json");

require_once __DIR__ . "/config/database.php";

$path = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");
$parts = explode("/", $path);

// asumiendo que la API es la raíz del contenedor:
// /auth/login  → ["auth","login"]
$resource = $parts[0] ?? null;

switch ($resource) {
    case "auth":
        require __DIR__ . "/router/auth.php";
        break;

    default:
        http_response_code(404);
        echo json_encode(["error" => "Not found"]);
}
