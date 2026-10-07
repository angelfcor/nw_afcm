<?php
require_once "library.php";

$reservas = getReservas();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reservas</title>
</head>

<body>
    <h1>Reservas</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Personas</th>
            <th>Habitaciones</th>
            <th>Tipo</th>
            <th>Vista</th>
            <th>Desayuno</th>
            <th>Días</th>
            <th>Subtotal</th>
            <th>Imp. Renta 15%</th>
            <th>Imp. Hotelero 18%</th>
            <th>Total</th>
        </tr>
        <?php
        foreach ($reservas as $r) {
            echo "<tr>";
            echo "<td>" . $r["nombre"] . "</td>";
            echo "<td>" . $r["correo"] . "</td>";
            echo "<td>" . $r["telefono"] . "</td>";
            echo "<td>" . $r["personas"] . "</td>";
            echo "<td>" . $r["habitaciones"] . "</td>";
            echo "<td>" . $r["tipo"] . "</td>";
            echo "<td>" . $r["vista"] . "</td>";
            echo "<td>" . $r["desayuno"] . "</td>";
            echo "<td>" . $r["dias"] . "</td>";
            echo "<td>" . number_format($r["subtotal"], 2) . "</td>";
            echo "<td>" . number_format($r["renta"], 2) . "</td>";
            echo "<td>" . number_format($r["hotelero"], 2) . "</td>";
            echo "<td>" . number_format($r["total"], 2) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>