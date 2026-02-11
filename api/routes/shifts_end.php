<?php

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["shift_id"])) {
    http_response_code(400);
    echo json_encode([
        "ok" => false,
        "error" => "shift_id is required"
    ]);
    exit;
}

$shiftId = (int) $data["shift_id"];

/*
|--------------------------------------------------------------------------
| 1. Get open shift
|--------------------------------------------------------------------------
*/
$stmt = $pdo->prepare("
    SELECT
        id,
        clock_in
    FROM shifts
    WHERE id = :id
      AND status = 'open'
    LIMIT 1
");
$stmt->execute([
    "id" => $shiftId
]);

$shift = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$shift) {
    http_response_code(404);
    echo json_encode([
        "ok" => false,
        "error" => "Open shift not found"
    ]);
    exit;
}

/*
|--------------------------------------------------------------------------
| 2. Calculate worked minutes
|--------------------------------------------------------------------------
*/
$stmt = $pdo->prepare("
    SELECT TIMESTAMPDIFF(MINUTE, :clock_in, NOW()) AS minutes
");
$stmt->execute([
    "clock_in" => $shift["clock_in"]
]);

$totalMinutes = (int) $stmt->fetchColumn();

/*
|--------------------------------------------------------------------------
| 3. Close shift
|--------------------------------------------------------------------------
*/

$clockOutValue;   // string datetime o null
$totalMinutes;   // int
$shiftId;         // int


$stmt = $pdo->prepare("
    UPDATE shifts
    SET
        clock_out = " . ($clockOutValue ? ":clock_out" : "NOW()") . ",
        total_work_minutes = :minutes,
        status = 'completed'
    WHERE id = :id
");

$params = [
    "minutes" => $totalMinutes,
    "id" => $shiftId
];

if ($clockOutValue) {
    $params["clock_out"] = $clockOutValue;
}

$stmt->execute($params);
