<!DOCTYPE html>
<html>
<head>
    <title>Resultado de la Consulta</title>
</head>
<link rel="stylesheet" href="css/style.css">
<body>
    <h1>Resultado de la Consulta</h1>

    <?php
    // Datos de conexión a la base de datos
    $host = "localhost"; 
    $usuario = "root"; 
    $contrasena = "";
    $nombre_bd = "mi_proyecto";

    // Conexión a la base de datos
    $conexion = mysqli_connect($host, $usuario, $contrasena, $nombre_bd);

    // Verificar la conexión
    if (mysqli_connect_errno()) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

    // Obtener los valores del formulario de búsqueda
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];

    // Consulta a la base de datos con los filtros
    $consulta = "SELECT * FROM tabla_datos WHERE 1=1";
    if (!empty($id)) {
        $consulta .= " AND id = '$id'";
    }

    if (!empty($nombre)) {
        $consulta .= " AND nombre LIKE '%$nombre%'";
    }

    if (!empty($apellido)) {
        $consulta .= " AND apellido LIKE '%$apellido%'";
    }

    if (!empty($cedula)) {
        $consulta .= " AND cedula = '$cedula'";
    }

    // Realizar la consulta
    $resultado = mysqli_query($conexion, $consulta);

    // Mostrar los resultados en una tabla
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
            </tr>";

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['apellido'] . "</td>";
        echo "<td>" . $fila['cedula'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
    ?>
</body>
</html>
