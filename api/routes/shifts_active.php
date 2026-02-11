<?php

if (!isset($_GET["employee_id"])) {
    http_response_code(400);
    echo json_encode([
        "ok" => false,
        "error" => "employee_id is required"
    ]);
    exit;
}

$employeeId = (int) $_GET["employee_id"];

$stmt = $pdo->prepare("
    SELECT
        id,
        employee_id,
        location_id,
        shift_date,
        clock_in,
        status
    FROM shifts
    WHERE employee_id = :employee_id
      AND status = 'open'
    LIMIT 1
");

$stmt->execute([
    "employee_id" => $employeeId
]);

$shift = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$shift) {
    echo json_encode([
        "ok" => false
    ]);
    exit;
}

echo json_encode([
    "ok" => true,
    "shift" => $shift
]);
