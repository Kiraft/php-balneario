function realizarReserva() {
    // Obtener datos del formulario
    const fechaEntrada = document.getElementById('fechaEntrada').value;
    const fechaSalida = document.getElementById('fechaSalida').value;
    const habitacion = document.getElementById('habitacion').value;
    const plan = document.getElementById('plan').value;
    const personas = document.getElementById('personas').value;
    const costo = document.getElementById('costo').value;

    // Crear un objeto FormData para enviar los datos al script PHP
    const formData = new FormData();
    formData.append('fechaEntrada', fechaEntrada);
    formData.append('fechaSalida', fechaSalida);
    formData.append('habitacion', habitacion);
    formData.append('plan', plan);
    formData.append('personas', personas);
    formData.append('costo', costo);

    // Enviar los datos al script PHP
    fetch('conf_reservacion.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(message => {
        alert(message);
    })
    .catch(error => {
        console.error('Error al realizar la reserva:', error);
    });
}
