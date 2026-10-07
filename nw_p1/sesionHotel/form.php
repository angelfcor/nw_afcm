<?php
require_once "library.php";

$txtNombre = "";
$txtEmail = "";
$txtTelefono = "";
$cmbPersonas = 1;
$cmbHabitaciones = 1;
$cmbTipo = "";
$cmbVista = "";
$cmbDesayuno = "";
$cmbDias = 1;

if (isset($_POST["btnEnviar"])) {
    $txtNombre = $_POST["txtNombre"] ?? "";
    $txtEmail = $_POST["txtEmail"] ?? "";
    $txtTelefono = $_POST["txtTelefono"] ?? "";
    $cmbPersonas = (int)($_POST["cmbPersonas"] ?? 1);
    $cmbHabitaciones = (int)($_POST["cmbHabitaciones"] ?? 1);
    $cmbTipo = $_POST["cmbTipo"] ?? "";
    $cmbVista = $_POST["cmbVista"] ?? "";
    $cmbDesayuno = $_POST["cmbDesayuno"] ?? "";
    $cmbDias = (int)($_POST["cmbDias"] ?? 1);

    addReserva(
        $txtNombre,
        $txtEmail,
        $txtTelefono,
        $cmbPersonas,
        $cmbHabitaciones,
        $cmbTipo,
        $cmbVista,
        $cmbDesayuno,
        $cmbDias
    );
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Hotel</title>
</head>

<body>
    <h1>Reserva de Hotel</h1>
    <form action="form.php" method="post">
        <label for="txtNombre">Nombre</label>
        <input type="text" name="txtNombre" id="txtNombre"
            placeholder="Nombre Completo" value="<?php echo $txtNombre; ?>" />
        <br />
        <label for="txtEmail">Correo Electrónico</label>
        <input type="email" name="txtEmail" id="txtEmail"
            placeholder="correo electrónico" value="<?php echo $txtEmail; ?>" />
        <br />
        <label for="txtTelefono">Teléfono</label>
        <input type="text" name="txtTelefono" id="txtTelefono"
            placeholder="teléfono" value="<?php echo $txtTelefono; ?>" />
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