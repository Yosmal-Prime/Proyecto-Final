<?php
//include 'includes/db.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Contacto</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="libros.php">Libros</a></li>
                <li><a href="autores.php">Autores</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Formulario de Contacto</h2>
        <form action="procesar_contacto.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required>
            <br>
            <label for="asunto">Asunto:</label>
            <input type="text" id="asunto" name="asunto" required>
            <br>
            <label for="comentario">Comentario:</label>
            <textarea id="comentario" name="comentario" required></textarea>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Librería Online</p>
    </footer>
</body>
</html>
