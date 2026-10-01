<?php
    // Nomenclatura Hungaro Camello (camelCase)
    // las variables en php comienza en con el simbolo de dolar
    //todas las variables que comienzan con _ estan reservados por servicios PHP
    $txtNombre = "";
    $txtCorreo = "";
    
    // la funcion isset valida si existe en el post la variable como parametro(btnEnviar)
    if (isset($_POST["btnEnviar"])) {
        $txtNombre = $_POST["txtNombre"];
        $txtCorreo = $_POST["txtCorreo"];
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Generales</title>
</head>
<body>
    <h1>Datos Generales</h1>
    <form action="form_datos_generalesAFCM.php" method="post">
        <label for="txtNombre">Nombre Completo</label>
        <input type="text" id="txtNombre" name="txtNombre"
            placeholder="Nombre Completo"/>
        <br/>
        <label for="txtCorreo">Correo Electronico</label>
        <input type="email" id="txtCorreo" name="txtCorreo"
            placeholder="Correo Electronico"/>
        <br/>        
        <button type="submit" name="btnEnviar">
            Enviar
        </button>

    </form>
    <!--Esta seccion se creo para avisar que si se lleno el form-->
    <section>
        <?php
            //en php el concatenador es el punto
            if( $txtNombre !== "" && $txtCorreo !== "") {
                echo "Bienvenido " . $txtNombre ." ". " Con correo: " . $txtCorreo;
            }
        ?>
    </section>
</body>
</html>