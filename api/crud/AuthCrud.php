<?php

class AuthCrud {

    public static function findByEmail(PDO $pdo, string $email) {
        $stmt = $pdo->prepare("
            SELECT 
                u.id AS user_id,
                u.password_hash,
                r.name AS role,
                e.id AS employee_id,
                CONCAT(e.first_name, ' ', e.last_name) AS name
            FROM users u
            JOIN roles r ON r.id = u.role_id
            LEFT JOIN employees e ON e.id = u.employee_id
            WHERE u.email = ?
            LIMIT 1
        ");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }
}
