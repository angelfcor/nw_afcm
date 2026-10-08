<?php

require_once("vendor/autoload.php");

use Unicah\Oop1\Math\Point as MPoint;
use Unicah\Oop1\Shapes\Point as SPoint;

$instanciaUnaClase = new Unicah\Oop1\UnaClase();

$instanciaUnaClase-> printHola();

$MPuntoA = new MPoint(0,0);
$MPuntoB = new MPoint(10,10);

echo sprintf("La distancia entre %s y %s es %i",
$MPuntoA->toString(),
$MPuntoB->toString(),
$MPuntoA->distance($MPuntoB));

$SPuntoA = new SPoint(0,0);
$SPuntoB = new SPoint(20,20);

echo sprintf("Punto a: <br/> %s <br/> Punto b: <br/> %s")

// en el repo que clonamos tenemos que correr composer install