<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapateria la Sangileña</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Zapatería La Sangileña</h1>
        <div class="login-box">
            <form action="modelo/loguear.php" method="post">
                <input type="text" name="usuario" placeholder="Usuario" required>
                <input type="password" name="clave" placeholder="Contraseña" required>
                <button type="submit">Ingresar</button>
            </form>
        </div>
    </div>
</body>
</html>
