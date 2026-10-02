<?php
session_start();

$precioVista = 300;
$precioDesayuno = 150;
$impuestoRenta = 0.15;
$impuestoHotelero = 0.18;

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

function addReserva($reserva)
{
    $reservas = $_SESSION["reservas"] ?? [];
    $reservas[] = $reserva;
    $_SESSION["reservas"] = $reservas;
}

function getReservas()
{
    return $_SESSION["reservas"] ?? [];
}