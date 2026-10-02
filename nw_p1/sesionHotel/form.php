<?php
require_once "library.php";

if (isset($_POST["btnEnviar"])) {
    $cliente = $_POST["txtCliente"];
    $personas = (int)$_POST["cmbPersonas"];
    $habitaciones = (int)$_POST["cmbHabitaciones"];
    $tipo = $_POST["cmbTipo"];
    $vista = $_POST["cmbVista"];
    $desayuno = $_POST["cmbDesayuno"];
    $dias = (int)$_POST["cmbDias"];

    $precio = getTipos()[$tipo];
    if ($vista == "Sí") {
        $precio += $precioVista;
    }

    $subtotal = $precio * $habitaciones * $dias;
    if ($desayuno == "Sí") {
        $subtotal += $precioDesayuno * $personas * $dias;
    }

    $renta = $subtotal * $impuestoRenta;
    $hotelero = $subtotal * $impuestoHotelero;
    $total = $subtotal + $renta + $hotelero;

    addReserva([
        "cliente" => $cliente,
        "personas" => $personas,
        "habitaciones" => $habitaciones,
        "tipo" => $tipo,
        "vista" => $vista,
        "desayuno" => $desayuno,
        "dias" => $dias,
        "subtotal" => $subtotal,
        "renta" => $renta,
        "hotelero" => $hotelero,
        "total" => $total
    ]);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reserva de Hotel</title>
</head>

<body>
    <h1>Reserva de Hotel</h1>
    <form action="form.php" method="post">
        <label>Cliente</label>
        <input type="text" name="txtCliente" required />
        <br />
        <label>Número de Personas</label>
        <?php echo generarSelect("cmbPersonas", getNumeros(10)); ?>
        <br />
        <label>Número de Habitaciones</label>
        <?php echo generarSelect("cmbHabitaciones", getNumeros(5)); ?>
        <br />
        <label>Tipo de Habitación</label>
        <?php echo generarSelect("cmbTipo", array_keys(getTipos())); ?>
        <br />
        <label>Con Vista</label>
        <?php echo generarSelect("cmbVista", getSiNo()); ?>
        <br />
        <label>Desayuno Incluido</label>
        <?php echo generarSelect("cmbDesayuno", getSiNo()); ?>
        <br />
        <label>Días de Reserva</label>
        <?php echo generarSelect("cmbDias", getNumeros(30)); ?>
        <br />
        <button type="submit" name="btnEnviar">Reservar</button>
    </form>
</body>

</html>