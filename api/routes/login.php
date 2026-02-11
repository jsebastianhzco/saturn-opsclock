<?php

// leer body JSON
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["email"], $data["password"])) {
    http_response_code(400);
    echo json_encode([
        "ok" => false,
        "error" => "Missing credentials"
    ]);
    exit;
}

$email = trim($data["email"]);
$password = $data["password"];

// =====================================================
// SQL: users.employee_id -> employees.id (TU RELACIÓN REAL)
// =====================================================

$stmt = $pdo->prepare("
    SELECT
        u.id            AS user_id,
        u.email         AS user_email,
        u.password_hash AS user_password_hash,
        u.role_id       AS user_role_id,
        u.employee_id   AS user_employee_id,

        e.id            AS employee_id,
        e.employee_code,
        e.first_name,
        e.last_name,
        e.is_active,
        e.photo,
        e.hire_date,
        e.termination_date

    FROM users u
    INNER JOIN employees e
        ON e.id = u.employee_id
    WHERE u.email = :email
    LIMIT 1
");

$stmt->execute(["email" => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// =====================================================
// Validaciones
// =====================================================

if (!$user) {
    http_response_code(401);
    echo json_encode([
        "ok" => false,
        "error" => "Invalid credentials"
    ]);
    exit;
}

if (!password_verify($password, $user["user_password_hash"])) {
    http_response_code(401);
    echo json_encode([
        "ok" => false,
        "error" => "Invalid credentials"
    ]);
    exit;
}

// =====================================================
// JWT
// =====================================================

require_once __DIR__ . "/../config/jwt.php";

$token = generate_jwt(
    [
        "uid"  => $user["user_id"],
        "role" => $user["user_role_id"]
    ],
    $_ENV["JWT_SECRET"] ?? "dev_secret_key",
    3600
);

// =====================================================
// Response
// =====================================================

echo json_encode([
    "ok" => true,
    "token" => $token,
    "user" => [
        "id" => $user["user_id"],
        "email" => $user["user_email"],
        "role_id" => $user["user_role_id"],
        "employee" => [
            "id" => $user["employee_id"],
            "code" => $user["employee_code"],
            "first_name" => $user["first_name"],
            "last_name" => $user["last_name"],
            "is_active" => $user["is_active"],
            "photo" => $user["photo"],
            "hire_date" => $user["hire_date"],
            "termination_date" => $user["termination_date"]
        ]
    ]
]);
