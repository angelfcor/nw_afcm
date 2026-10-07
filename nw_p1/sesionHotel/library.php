<?php
session_start();

const PRECIO_VISTA = 300;
const PRECIO_DESAYUNO = 150;
const IMPUESTO_RENTA = 0.15;
const IMPUESTO_HOTELERO = 0.18;

function getTipos()
{
    return [
        "Sencilla" => 800,
        "Doble" => 1200,
        "Suite" => 2500
    ];
}

function getSiNo()
{
    return ["No", "Sí"];
}

function getNumeros($max)
{
    $numeros = [];
    for ($i = 1; $i <= $max; $i++) {
        $numeros[] = $i;
    }
    return $numeros;
}

function generarSelect($nombre, $opciones)
{
    $html = "<select name='$nombre'>";
    foreach ($opciones as $opcion) {
        $html .= "<option value='$opcion'>$opcion</option>";
    }
    return $html . "</select>";
}

function addReserva($nombre, $correo, $telefono, $personas, $habitaciones, $tipo, $vista, $desayuno, $dias)
{
    $precio = getTipos()[$tipo];
    if ($vista == "Sí") {
        $precio += PRECIO_VISTA;
    }

    $subtotal = $precio * $habitaciones * $dias;
    if ($desayuno == "Sí") {
        $subtotal += PRECIO_DESAYUNO * $personas * $dias;
    }

    $renta = $subtotal * IMPUESTO_RENTA;
    $hotelero = $subtotal * IMPUESTO_HOTELERO;

    $reserva = [
        "nombre" => $nombre,
        "correo" => $correo,
        "telefono" => $telefono,
        "personas" => $personas,
        "habitaciones" => $habitaciones,
        "tipo" => $tipo,
        "vista" => $vista,
        "desayuno" => $desayuno,
        "dias" => $dias,
        "subtotal" => $subtotal,
        "renta" => $renta,
        "hotelero" => $hotelero,
        "total" => $subtotal + $renta + $hotelero
    ];

    $reservas = $_SESSION["reservas"] ?? [];
    $reservas[] = $reserva;
    $_SESSION["reservas"] = $reservas;
}

function getReservas()
{
    return $_SESSION["reservas"] ?? [];
}