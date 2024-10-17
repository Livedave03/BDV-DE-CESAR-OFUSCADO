<?php
if (php_sapi_name() !== 'cli' && !isset($_SERVER['HTTP_REFERER'])) {
    header('HTTP/1.0 403 Forbidden');
    exit('Acceso Denegado');
}

// Código del bot
header('Content-Type: application/json');
$botToken = '7724260454:AAE0o7qbePjMKq9uo9_DInwUKGmpPTgGQos';
$chatId = '5391753542';

echo json_encode(['botToken' => $botToken, 'chatId' => $chatId]);
?>
