<!-- templates/header.php -->
<?php

if (!isset($titulo)) {
    $titulo = "Página educativa";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <header>
        <div class="logo">
           
        </div>
        <nav class="menu">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Cursos</a></li>
                <li><a href="#">Recursos</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
