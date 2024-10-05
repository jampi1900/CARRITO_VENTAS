<?php
// Obtener los datos enviados desde la URL
$nombre = $_GET['nombre'] ?? '';
$apellido = $_GET['apellido'] ?? '';
$email = $_GET['email'] ?? '';
$telefono = $_GET['telefono'] ?? '';
$dni = $_GET['dni'] ?? '';
$departamento = $_GET['departamento'] ?? '';
$provincia = $_GET['provincia'] ?? '';
$distrito = $_GET['distrito'] ?? '';
$direccion = $_GET['direccion'] ?? '';
$zip = $_GET['zip'] ?? '';
$notas = $_GET['notas'] ?? '';
$detallesCorrectos = $_GET['detallesCorrectos'] ?? '';

// Obtener el carrito de compras
$carrito = json_decode(urldecode($_GET['carrito']), true) ?? [];

// Crear el mensaje para WhatsApp
$mensajeWhatsApp = "🌟 *Hola, me gustaría obtener información:* 🌟\n\n";
$mensajeWhatsApp .= "👤 *Nombre:* " . htmlspecialchars($nombre) . "\n";
$mensajeWhatsApp .= "👤 *Apellido:* " . htmlspecialchars($apellido) . "\n";
$mensajeWhatsApp .= "📧 *Email:* " . htmlspecialchars($email) . "\n";
$mensajeWhatsApp .= "📞 *Teléfono:* " . htmlspecialchars($telefono) . "\n";
$mensajeWhatsApp .= "🆔 *DNI:* " . htmlspecialchars($dni) . "\n";
$mensajeWhatsApp .= "📍 *Departamento:* " . htmlspecialchars($departamento) . "\n";
$mensajeWhatsApp .= "📍 *Provincia:* " . htmlspecialchars($provincia) . "\n";
$mensajeWhatsApp .= "🏠 *Dirección:* " . htmlspecialchars($direccion) . "\n";
$mensajeWhatsApp .= "📮 *Código Postal (ZIP):* " . htmlspecialchars($zip) . "\n";
$mensajeWhatsApp .= "📝 *Notas:* " . htmlspecialchars($notas) . "\n";
$mensajeWhatsApp .= "✅ *Detalles correctos:* " . htmlspecialchars($detallesCorrectos) . "\n\n";
$mensajeWhatsApp .= "🛒 *¡Quiero Comprar!* 😊\n";

// Agregar los productos del carrito al mensaje
if (!empty($carrito)) {
    $mensajeWhatsApp .= "🛒 *Productos Seleccionados:*\n\n";
    foreach ($carrito as $producto) {
        $mensajeWhatsApp .= "📦 *Nombre:* " . htmlspecialchars($producto['NOMBRE']) . "\n";
        $mensajeWhatsApp .= "🔢 *SKU:* " . htmlspecialchars($producto['SKU']) . "\n";
        $mensajeWhatsApp .= "💰 *Precio:* S/. " . htmlspecialchars($producto['PRECIO']) . "\n";
        $mensajeWhatsApp .= "📏 *Talla:* " . htmlspecialchars($producto['TALLA']) . "\n";
        $mensajeWhatsApp .= "🛍️ *Cantidad:* " . htmlspecialchars($producto['CANTIDAD_PRODUCTO']) . "\n";
        $mensajeWhatsApp .= "📊 *Subtotal:* S/. " . htmlspecialchars($producto['SUBTOTAL']) . "\n\n";

    }
}

// Enviar el mensaje por WhatsApp
$numeroWhatsApp = '931225581'; // Reemplaza con el número de WhatsApp
$mensajeWhatsAppUrl = urlencode($mensajeWhatsApp);
$urlWhatsApp = "https://api.whatsapp.com/send?phone={$numeroWhatsApp}&text={$mensajeWhatsAppUrl}";

// Redirigir a WhatsApp
header("Location: $urlWhatsApp");
exit();
?>
