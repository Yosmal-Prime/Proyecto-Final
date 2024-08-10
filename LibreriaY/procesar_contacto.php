<?php
//include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['comentario'];
    $fecha = date('Y-m-d H:i:s');

    $sql = "INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$fecha, $correo, $nombre, $asunto, $comentario]);

    echo "Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.";
}
?>
