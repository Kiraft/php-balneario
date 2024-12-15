<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Recibir datos del formulario
$fechaEntrada = $_POST['fechaEntrada'];
$fechaSalida = $_POST['fechaSalida'];
$habitacion = $_POST['habitacion'];
$plan = $_POST['plan'];
$personas = $_POST['personas'];
$costo = $_POST['costo'];

// Insertar datos en la base de datos
$sql = "INSERT INTO reservaciones (fecha_entrada, fecha_salida, habitacion, plan, personas, costo) 
        VALUES ('$fechaEntrada', '$fechaSalida', '$habitacion', '$plan', '$personas', '$costo')";

if ($conn->query($sql) === TRUE) {
    // Reserva realizada con éxito
    echo '<div style="text-align: center; margin-top: 20px;">';
    echo '<p style="color: green; font-size: 18px; font-weight: bold;">Reserva realizada con éxito</p>';
    echo '<a href="index.php" style="text-decoration: none; display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; border-radius: 5px; font-size: 16px;">Volver a Inicio</a>';
    
    date_default_timezone_set('America/Mexico_City');

    // Obtener la fecha y hora actuales
    $fechaActual = date("d/m/Y");
    $horaActual = date("3:20");

    // Crea un formulario oculto con los datos
    echo '<form id="redirectForm" action="ticket.php" method="post">';
    echo '<input type="hidden" name="fechaEntrada" value="' . $fechaEntrada . '">';
    echo '<input type="hidden" name="fechaSalida" value="' . $fechaSalida . '">';
    echo '<input type="hidden" name="habitacion" value="' . $habitacion . '">';
    echo '<input type="hidden" name="plan" value="' . $plan . '">';
    echo '<input type="hidden" name="personas" value="' . $personas . '">';
    echo '<input type="hidden" name="costo" value="' . $costo . '">';
    echo '<input type="hidden" name="lastId" value="' . $lastId . '">';
    echo '<input type="hidden" name="fechaActual" value="' . $fechaActual . '">';
    echo '<input type="hidden" name="horaActual" value="' . $horaActual . '">';
    echo '</form>';

    // Agrega un script de JavaScript para enviar automáticamente el formulario
    echo '<script>';
    echo 'document.getElementById("redirectForm").submit();';
    echo '</script>';
} else {
    // Error al realizar la reserva
    echo "Error al realizar la reserva: " . $conn->error;
}

$conn->close();
?>
