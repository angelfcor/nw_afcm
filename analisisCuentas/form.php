<?php
require_once "library.php";

$txtCuenta = "";

if (isset($_POST["btnProcesar"])) {
    $txtCuenta = $_POST["txtCuenta"] ?? "";

    procesarTextoYGuardarCuentas($txtCuenta);
}

$cuentasResultados = getCuentasExtraidas();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador de Cuentas</title>
</head>
<body>
    <h1>Analizador de Cuentas</h1>
    <form action="form.php" method="post">
        <label for="txtCuenta">Cuentas</label>
        <textarea name="txtCuenta" id="txtCuenta" rows="10" cols="50"
            placeholder="Pega el texto a analizar aqui..."
        ><?php echo $txtCuenta;?></textarea>
        <br/>
        <button type="submit" name="btnProcesar">Procesar</button>
    </form>

    <h2>Resultados del Analisis</h2>
    <pre>
        <?php
        print_r($cuentasResultados);
        ?>
    </pre>
</body>
</html>