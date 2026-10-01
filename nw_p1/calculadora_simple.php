<?php 
    $fltOperando1 = 0;
    $fltOperando2 = 0;
    $fltResultado = "";
    
    if(isset($_POST["btnAdd"])) {
        $fltOperando1 = floatval($_POST["fltOperador1"] ?? "0.00");
        $fltOperando2 = floatval($_POST["fltOperador2"] ?? "0.00");
        
        $fltResultado = "El resultado de la suma entre " 
            . $fltOperando1 . " y " . $fltOperando2 . " " 
            . "es " . ($fltOperando1 + $fltOperando2);
    }
    if(isset($_POST["btnSub"])) {
        $fltOperando1 = floatval($_POST["fltOperador1"] ?? "0.00");
        $fltOperando2 = floatval($_POST["fltOperador2"] ?? "0.00");
        
        $fltResultado = "El resultado de la resta entre " 
            . $fltOperando1 . " y " . $fltOperando2 . " " 
            . "es " . ($fltOperando1 - $fltOperando2);
    }
    if(isset($_POST["btnMult"])) {
        $fltOperando1 = floatval($_POST["fltOperador1"] ?? "0.00");
        $fltOperando2 = floatval($_POST["fltOperador2"] ?? "0.00");
        
        $fltResultado = "El resultado de la multiplicacion entre " 
            . $fltOperando1 . " y " . $fltOperando2 . " " 
            . "es " . ($fltOperando1 * $fltOperando2);
    }
    if(isset($_POST["btnDiv"])) {
        $fltOperando1 = floatval($_POST["fltOperador1"] ?? "0.00");
        $fltOperando2 = floatval($_POST["fltOperador2"] ?? "0.00");

        if($fltOperando2 == 0) {
            $fltResultado = "Error: no se puede dividir entre 0..";
        } else {
            $fltResultado = "El resultado de la division entre " 
            . $fltOperando1 . " y " . $fltOperando2 . " " 
            . "es " . ($fltOperando1 / $fltOperando2);
        }
    }
    if(isset($_POST["btnFact"])) {
        $fltOperando1 = floatval($_POST["fltOperador1"] ?? "0.00");
        $fltOperando2 = floatval($_POST["fltOperador2"] ?? "0.00");
        $suma = $fltOperando1 + $fltOperando2;

        if ($suma < 0) {
            $fltResultado = "Error: La suma es negativa, no se puede calcular el factorial.";
        } else {
            $factorial = 1;
            for ($i = 1; $i <= $suma; $i++) {
                $factorial = $factorial * $i;
            }
            $fltResultado = "La suma es $suma y su factorial es: " . $factorial;
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="calculadora_simple.php" method="post">
        <fieldset>
            <legend>Operadores</legend>
            <label for="fltOperador1">Operando1</label>
            <input type="number" id="fltOperador1" name="fltOperador1"
                placeholder="Un valor entre -100 y 100"/>
            <br/>
            <label for="fltOperador2">Operando2</label>
            <input type="number" id="fltOperador2" name="fltOperador2"
                placeholder="Un valor entre -100 y 100"/>
            <br/>
        </fieldset>
        <fieldset>
            <legend>Operaciones</legend>
            <button type="submit" name="btnAdd">
                Sumar
            </button>
            <br/>
            <button type="submit" name="btnSub">
                Restar
            </button>
            <br/>
            <button type="submit" name="btnMult">
                Multiplicar
            </button>
            <br/>
            <button type="submit" name="btnDiv">
                Dividir
            </button>
            <br/>
            <button type="submit" name="btnFact">
                Factorial
            </button>
            <br/>
        </fieldset>
    </form>

    <section>
        <?php
            if($fltResultado != "") {
                echo "<h3>" . $fltResultado . "</h3>";
            } 
        ?>
    </section>
</body>
</html>