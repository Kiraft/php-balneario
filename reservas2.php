<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas de Balneario</title>
    <link rel="stylesheet" href="./CSS/reservas2.css">
</head>
<body>
    <div class="container">
        <h1>Reservas de Balneario</h1>
        <form id="reservationForm" action="conf_reservacion.php" method="post">
            <label for="fechaEntrada">Fecha de Entrada:</label>
            <input type="date" id="fechaEntrada" name="fechaEntrada" required>
            
            <label for="fechaSalida">Fecha de Salida:</label>
            <input type="date" id="fechaSalida" name="fechaSalida" required>
            
            <label for="habitacion">Habitación:</label>
            <select id="habitacion" name="habitacion" required>
                <option value="individual">Individual</option>
                <option value="doble">Doble</option>
                <option value="suite">Suite</option>
            </select>
            
            <label for="plan">Plan:</label>
            <select id="plan" name="plan" required>
                <option value="continental">Continental</option>
                <option value="americano">Americano</option>
            </select>
            
            <label for="personas">Número de Personas:</label>
            <select id="personas" name="personas" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            
            <label for="costo">Costo Total:</label>
            <input type="text" id="costo" name="costo" value="1000" readonly>
            
            <button type="submit">Realizar Reserva</button>
        </form>
    </div>

    <a href="index.php" class="regresar-btn">Inicio</a>
</body>
</html>


