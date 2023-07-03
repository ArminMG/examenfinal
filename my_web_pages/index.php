<?php $servername = "54.227.136.49"; $username = "usuario1"; $password = 
"Pass1234*"; $dbname = "bdexamen";
// Crear una conexión a la base de datos remota
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar la conexión
if ($conn->connect_error) { die("Error al conectar a la base de datos remota: " . 
    $conn->connect_error);
}
// Consulta para la tabla "clientes"
$sql_clientes = "SELECT * FROM clientes"; $result_clientes = 
$conn->query($sql_clientes);
// Mostrar los resultados de la tabla "clientes"
echo "<h2>Clientes:</h2>"; if ($result_clientes->num_rows > 0) { while($row = 
    $result_clientes->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Apellido: " . 
        $row["apellido"]. "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}
// Consulta para la tabla "productos"
$sql_productos = "SELECT * FROM productos"; $result_productos = 
$conn->query($sql_productos);
// Mostrar los resultados de la tabla "productos"
echo "<h2>Productos:</h2>"; if ($result_productos->num_rows > 0) { while($row = 
    $result_productos->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}
// Cerrar la conexión
$conn->close(); ?>
