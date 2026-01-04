<?php
$page = $_GET['page'] ?? 'home';

// Evitar rutas maliciosas (../)
$page = basename($page);

// Ruta del archivo que se quiere cargar
$pageFile = "./pages/{$page}.php";
?>

<!DOCTYPE html>
<head>
    <title>Nature Online</title>
    <?php include "./layout/meta.php" ?>
</head>

<body>

    <header class="text-bg-light sticky-top">
        <?php include "./layout/header.html" ?>
    </header>

    <main class="container">
        <?php 
            // Verificar si el archivo existe
            if (!file_exists($pageFile)) {
                // Si no existe, mostrar 404
                http_response_code(404);
                include "./pages/404.php";
            }else {
                // Si existe, incluir el archivo de la página
                include $pageFile;
            }
        ?>
    </main>
    
    <footer class="container-footer">
        <?php include "./layout/footer.html" ?>
    </footer>

    <?php include "./layout/scripts.html" ?>
</body>
</html>