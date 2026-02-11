<?php

function base64url_encode($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function base64url_decode($data) {
    return base64_decode(strtr($data, '-_', '+/'));
}

function generate_jwt(array $payload, string $secret, int $expSeconds = 3600): string {
    $header = base64url_encode(json_encode([
        "alg" => "HS256",
        "typ" => "JWT"
    ]));

    $payload["exp"] = time() + $expSeconds;
    $payloadEncoded = base64url_encode(json_encode($payload));

    $signature = base64url_encode(
        hash_hmac("sha256", "$header.$payloadEncoded", $secret, true)
    );

    return "$header.$payloadEncoded.$signature";
}

function validate_jwt(string $token, string $secret): ?array {
    $parts = explode(".", $token);

    if (count($parts) !== 3) {
        return null;
    }

    [$header, $payload, $signature] = $parts;

    $expected = base64url_encode(
        hash_hmac("sha256", "$header.$payload", $secret, true)
    );

    if (!hash_equals($expected, $signature)) {
        return null;
    }

    $data = json_decode(base64url_decode($payload), true);

    if (!$data || ($data["exp"] ?? 0) < time()) {
        return null;
    }

    return $data;
}
