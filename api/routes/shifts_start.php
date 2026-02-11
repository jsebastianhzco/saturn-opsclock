<?php

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["employee_id"], $data["location_id"])) {
    http_response_code(400);
    echo json_encode([
        "ok" => false,
        "error" => "employee_id and location_id are required"
    ]);
    exit;
}

$employeeId = (int) $data["employee_id"];
$locationId = (int) $data["location_id"];

/*
|--------------------------------------------------------------------------
| 1. Verify no open shift exists
|--------------------------------------------------------------------------
*/
$stmt = $pdo->prepare("
    SELECT id
    FROM shifts
    WHERE employee_id = :employee_id
      AND status = 'open'
    LIMIT 1
");
$stmt->execute([
    "employee_id" => $employeeId
]);

if ($stmt->fetch()) {
    http_response_code(409);
    echo json_encode([
        "ok" => false,
        "error" => "Employee already has an open shift"
    ]);
    exit;
}

/*
|--------------------------------------------------------------------------
| 2. Create shift (CLOCK-IN)
|--------------------------------------------------------------------------
*/
$stmt = $pdo->prepare("
    INSERT INTO shifts (
        employee_id,
        location_id,
        shift_date,
        clock_in,
        status
    ) VALUES (
        :employee_id,
        :location_id,
        CURDATE(),
        NOW(),
        'open'
    )
");

$stmt->execute([
    "employee_id" => $employeeId,
    "location_id" => $locationId
]);

echo json_encode([
    "ok" => true,
    "shift_id" => $pdo->lastInsertId(),
    "status" => "open"
]);
