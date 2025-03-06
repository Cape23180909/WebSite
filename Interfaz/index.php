<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Bonita Elooo</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <h1>Bienvenido a Mi Página Bonita</h1>
        <p>Diseñada con PHP, HTML y CSS</p>
    </header>

    <main>
        <section>
            <h2>¡Hola, Mundo!</h2>
            <p>Esta es una página web simple pero elegante.</p>
            <p>La fecha y hora actual es: <?php echo date('d/m/Y H:i:s'); ?></p>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Mi Página Bonita. Todos los derechos reservados.</p>
    </footer>
</body>
</html>