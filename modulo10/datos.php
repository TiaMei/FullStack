<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Datos</title>
</head>
<link rel="stylesheet" href="css/style.css">
<body>
    <h1>Consulta de Datos</h1>

    <form method="POST" action="consulta.php">
        <label for="id">ID:</label>
        <input type="text" name="id" id="id">
        <br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido">
        <br>

        <label for="cedula">Cédula:</label>
        <input type="text" name="cedula" id="cedula">
        <br>

        <input type="submit" value="Buscar">
    </form>
</body>
</html>
