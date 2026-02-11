<?php
$allowedOrigin = "http://localhost:9004";

if (isset($_SERVER['HTTP_ORIGIN']) && $_SERVER['HTTP_ORIGIN'] === $allowedOrigin) {
    header("Access-Control-Allow-Origin: $allowedOrigin");
    header("Access-Control-Allow-Credentials: true");
}

header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Preflight request
if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    http_response_code(200);
    exit;
}

require_once __DIR__ . "/config/database.php";

$method = $_SERVER["REQUEST_METHOD"];
$uri = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");

if ($method === "POST" && $uri === "auth/login") {
    require __DIR__ . "/routes/login.php";
    exit;
}

if ($method === "GET" && $uri === "shifts/active") {
    require __DIR__ . "/routes/shifts_active.php";
    exit;
}

if ($method === "POST" && $uri === "shifts/start") {
    require __DIR__ . "/routes/shifts_start.php";
    exit;
}

if ($method === "POST" && $uri === "shifts/end") {
    require __DIR__ . "/routes/shifts_end.php";
    exit;
}


echo json_encode([
    "status" => "alive",
    "db" => "connected"
]);
