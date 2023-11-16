<?php
    // Configuración de la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "libros";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Crear conexión
  // $conn = new Model/ConexionModel;

    // Consulta para obtener autores
    $sqlAutores = "SELECT autor_id, CONCAT(nombres, ' ', apellidos) AS nombre_autor FROM autor";
    $resultAutores = $conn->query($sqlAutores);

    // Consulta para obtener editoriales
    $sqlEditoriales = "SELECT editorial_id, nombre FROM editorial";
    $resultEditoriales = $conn->query($sqlEditoriales);

    // Consulta para obtener géneros
    $sqlGeneros = "SELECT genero_id, nombre FROM genero";
    $resultGeneros = $conn->query($sqlGeneros);

    // Procesar el formulario cuando se envía
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo = $_POST["titulo"];
        $genero_id = $_POST["genero"];
        $editorial_id = $_POST["editorial"];
        $autor_id = $_POST["autor"];

        // Consulta para insertar datos en la tabla libro
        $sqlInsertLibro = "INSERT INTO libro (titulo, genero_id, editorial_id, autor_id) VALUES ('$titulo', $genero_id, $editorial_id, $autor_id)";

        if ($conn->query($sqlInsertLibro) === TRUE) {
            echo "Libro ingresado con éxito.";
        } else {
            echo "Error al ingresar el libro: " . $conn->error;
        } 
}

//$conn->close();


// Función para insertar un préstamo
function insertarPrestamo($libro_id, $persona_id, $fecha_devolucion) {
    global $conn;

    $fecha_prestamo = date("Y-m-d H:i:s"); // Fecha y hora actual

    $sql = "INSERT INTO prestamo (libro_id, persona_id, fecha_prestamo, fecha_devolucion) 
            VALUES ('$libro_id', '$persona_id', '$fecha_prestamo', '$fecha_devolucion')";

    if ($conn->query($sql) === TRUE) {
        echo "Préstamo registrado exitosamente.";
    } else {
        echo "Error al registrar el préstamo: " . $conn->error;
    }
}

// Función para mostrar valores foráneos
function mostrarValoresForaneos($conn) {
    // Mostrar autores
    $sqlAutores = "SELECT * FROM autor";
    $resultAutores = $conn->query($sqlAutores);

    echo "<label for='autor'>Selecciona un autor:</label>";
    echo "<select name='autor' id='autor'>";
    while ($row = $resultAutores->fetch_assoc()) {
        echo "<option value='" . $row["autor_id"] . "'>" . $row["nombres"] . " " . $row["apellidos"] . "</option>";
    }
    echo "</select><br>";

    // Mostrar libros
    $sqlLibros = "SELECT * FROM libro";
    $resultLibros = $conn->query($sqlLibros);

    echo "<label for='libro'>Selecciona un libro:</label>";
    echo "<select name='libro' id='libro'>";
    while ($row = $resultLibros->fetch_assoc()) {
        echo "<option value='" . $row["libro_id"] . "'>" . $row["titulo"] . "</option>";
    }
    echo "</select><br>";

    // Mostrar personas
    $sqlPersonas = "SELECT * FROM persona";
    $resultPersonas = $conn->query($sqlPersonas);

    echo "<label for='persona'>Selecciona una persona:</label>";
    echo "<select name='persona' id='persona'>";
    while ($row = $resultPersonas->fetch_assoc()) {
        echo "<option value='" . $row["persona_id"] . "'>" . $row["nombres"] . " " . $row["apellidos"] . "</option>";
    }
    echo "</select><br>";
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $libro_id = $_POST["libro"];
    $persona_id = $_POST["persona"];
    $fecha_devolucion = $_POST["fecha_devolucion"];

    insertarPrestamo($libro_id, $persona_id, $fecha_devolucion);
}

?>
