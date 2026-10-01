<?php

    $txtNombre = "";
    $txtEdad = "";
    $txtResultMsg = "";

    if(isset($_POST["btnEnviar"])) {
        $txtNombre = $_POST["txtNombre"];
        $txtEdad = $_POST["txtEdad"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Nombre y Edad Simple</title>
</head>
<body>
    <h1>Datos Generales del Usuario</h1>
    <form action="registro_nombre_edad.php" method="post">
        <label for="txtNombre">Nombre Completo</label>
        <input type="text" id="txtNombre" name="txtNombre"
            placeholder="Nombre Completo"/>
        <br/>
        <label for="txtEdad">Edad</label>
        <input type="number" id="txtEdad" name="txtEdad"
            placeholder="Edad"/>
        <br/>
        <br/>
        <button type="submit" name="btnEnviar">
            ENVIAR
        </button>
        <br/>
    </form>
    <section>
        <?php
            if($txtNombre !== "" && $txtEdad !== "") {
                echo "----- Resumen -----<br/>";
                echo "¡Bienvenido " . $txtNombre . "!, 
                su edad es " . $txtEdad;
            } 
        ?>
    </section>
</body>
</html>