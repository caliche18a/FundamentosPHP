<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = htmlspecialchars($_POST['titulo'], ENT_QUOTES, 'UTF-8');
    echo "<h2>Bienvenido a mi $titulo</h2>";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>
</head>
<body>
    
    <form action="" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>