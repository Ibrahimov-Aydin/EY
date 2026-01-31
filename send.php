<?php
header('Content-Type: application/json; charset=utf-8');

function respond($ok, $message, $code = 200) {
  http_response_code($code);
  echo json_encode(["ok" => $ok, "message" => $message], JSON_UNESCAPED_UNICODE);
  exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  respond(false, 'Method not allowed', 405);
}

// ✅ Настройки Telegram
$BOT_TOKEN = '8454367089:AAH961WMxuACIwI5pFBL1jYWBZKrMF0wbIU';
$CHAT_ID   = '-1003711872435'; // например 123456789 или -100123...

$name    = trim($_POST['name'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');
$consent = isset($_POST['consent']) ? true : false;

// ✅ Валидация
if ($name === '' || $phone === '' || $email === '') {
  respond(false, 'Заполните обязательные поля', 422);
}
if (!$consent) {
  respond(false, 'Нужно согласие на обработку данных', 422);
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  respond(false, 'Некорректный email', 422);
}

// (опционально) простая чистка
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

$text =
"📝 Новая заявка с сайта\n"
."👤 Имя: {$name}\n"
."📞 Телефон: {$phone}\n"
."📧 Email: {$email}\n"
."💬 Сообщение: ".($message !== '' ? $message : '—');

$url = "https://api.telegram.org/bot{$BOT_TOKEN}/sendMessage";

// ✅ Отправка
$payload = [
  'chat_id' => $CHAT_ID,
  'text' => $text,
  'parse_mode' => 'HTML',
  'disable_web_page_preview' => true
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);

$result = curl_exec($ch);
$errno = curl_errno($ch);
$http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($errno) {
  respond(false, 'Ошибка отправки (cURL)', 500);
}
if ($http < 200 || $http >= 300) {
  respond(false, 'Ошибка Telegram API', 500);
}

respond(true, 'Заявка отправлена ✅');
