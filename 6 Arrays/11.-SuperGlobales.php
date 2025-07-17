<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Superglobales en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            line-height: 1.6;
            background-color: #f7f7f7;
        }
        h1 {
            color: #2c3e50;
        }
        section {
            background-color: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        code {
            background: #eee;
            padding: 2px 5px;
            border-radius: 3px;
        }
    </style>
</head>
<body>

    <h1>🔒 Superglobales en PHP</h1>

    <p>Las superglobales son <strong>variables especiales</strong> de PHP que están disponibles en todo el script, sin necesidad de declararlas.</p>

    <ul>
        <li>Acceden a datos del formulario</li>
        <li>Información del servidor y cliente</li>
        <li>Cookies, sesiones y archivos</li>
    </ul>

    <!-- $_GET -->
    <section>
        <h2>🔸 $_GET</h2>
        <p>Recoge datos enviados por la URL.</p>
        <p>Ejemplo: <code>?nombre=Juan</code></p>
        <?php
        if (isset($_GET["nombre"])) {
            echo "Hola, <strong>" . htmlspecialchars($_GET["nombre"]) . "</strong> (desde <code>\$_GET</code>)<br>";
        }
        ?>
    </section>

    <!-- $_POST -->
    <section>
        <h2>🔸 $_POST</h2>
        <p>Recoge datos enviados por un formulario con método <code>POST</code>.</p>
        <form method="POST">
            <label>Tu nombre:</label>
            <input type="text" name="nombre_post">
            <button type="submit">Enviar</button>
        </form>
        <?php
        if (isset($_POST["nombre_post"])) {
            echo "Hola, <strong>" . htmlspecialchars($_POST["nombre_post"]) . "</strong> (desde <code>\$_POST</code>)<br>";
        }
        ?>
    </section>

    <!-- $_REQUEST -->
    <section>
        <h2>🔸 $_REQUEST</h2>
        <p>Contiene datos de <code>$_GET</code>, <code>$_POST</code> y <code>$_COOKIE</code>.</p>
        <?php
        if (isset($_REQUEST["nombre"])) {
            echo "Hola desde <code>\$_REQUEST</code>: <strong>" . htmlspecialchars($_REQUEST["nombre"]) . "</strong><br>";
        }
        ?>
    </section>

    <!-- $_COOKIE -->
    <section>
        <h2>🔸 $_COOKIE</h2>
        <p>Guarda datos en el navegador del usuario.</p>
        <?php
        setcookie("curso", "PHP", time() + 3600); // Dura 1 hora
        if (isset($_COOKIE["curso"])) {
            echo "Cookie activa: <strong>" . $_COOKIE["curso"] . "</strong><br>";
        } else {
            echo "Cookie creada, recarga la página para verla.<br>";
        }
        ?>
    </section>

    <!-- $_SESSION -->
    <section>
        <h2>🔸 $_SESSION</h2>
        <p>Permite guardar datos mientras el usuario navega.</p>
        <?php
        session_start();
        $_SESSION["usuario"] = "admin";
        echo "Usuario guardado en sesión: <strong>" . $_SESSION["usuario"] . "</strong><br>";
        ?>
    </section>

    <!-- $_SERVER -->
    <section>
        <h2>🔸 $_SERVER</h2>
        <p>Da información sobre el servidor y el entorno de ejecución.</p>
        <?php
        echo "Ruta actual del script: <code>" . $_SERVER["PHP_SELF"] . "</code><br>";
        echo "Método usado: <code>" . $_SERVER["REQUEST_METHOD"] . "</code><br>";
        ?>
    </section>

    <!-- $_FILES -->
    <section>
        <h2>🔸 $_FILES</h2>
        <p>Sirve para subir archivos desde formularios.</p>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo">
            <button type="submit">Subir archivo</button>
        </form>
        <?php
        if (isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] == 0) {
            echo "Archivo subido: <strong>" . $_FILES["archivo"]["name"] . "</strong><br>";
        }
        ?>
    </section>

    <!-- $_ENV -->
    <section>
        <h2>🔸 $_ENV</h2>
        <p>Contiene variables del sistema (a veces requieren configuración del servidor).</p>
        <?php
        echo "PATH del sistema: <code>" . ($_ENV["PATH"] ?? "No disponible") . "</code><br>";
        ?>
    </section>

</body>
</html>
