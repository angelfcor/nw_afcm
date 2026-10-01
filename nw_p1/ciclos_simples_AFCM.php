<?php
    $texto = "¡Hola Mundo!";
    $chkInverso = false;
    $cmbVeces = 0;
    $resultado = "";

    if(isset($_POST["btnEnviar"])) {
        $cmbVeces = intval($_POST["cmbVeces"] ?? "0");
        
        $chkInverso = isset($_POST["chkInverso"]);

        if ($chkInverso) {
            $resultado .= "<h3>Descendente</h3>";
            for ($i = $cmbVeces; $i >= 1; $i--) {
                $resultado .= $i . " " . $texto . "<br/>";
            }
        } else {
            $resultado .= "<h3>Ascendente</h3>";
            for ($i = 1; $i <= $cmbVeces; $i++) {
                $resultado .= $i . " " . $texto . "<br/>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos Simples</title>
</head>
<body>
    <h1>Ciclos Asc/Desc</h1>
    <form action="ciclos_simples_AFCM.php" method="post">
        <label for="cmbVeces">Valor a Iterar</label>
        <select id="cmbVeces" name="cmbVeces">
            <option value="1" <?php if($cmbVeces == 1) echo 'selected'; ?>>1 vez</option>
            <option value="2" <?php if($cmbVeces == 2) echo 'selected'; ?>>2 veces</option>
            <option value="3" <?php if($cmbVeces == 3) echo 'selected'; ?>>3 veces</option>
            <option value="4" <?php if($cmbVeces == 4) echo 'selected'; ?>>4 veces</option>
            <option value="5" <?php if($cmbVeces == 5) echo 'selected'; ?>>5 veces</option>
            <option value="6" <?php if($cmbVeces == 6) echo 'selected'; ?>>6 veces</option>
            <option value="7" <?php if($cmbVeces == 7) echo 'selected'; ?>>7 veces</option>
            <option value="8" <?php if($cmbVeces == 8) echo 'selected'; ?>>8 veces</option>
            <option value="9" <?php if($cmbVeces == 9) echo 'selected'; ?>>9 veces</option>
            <option value="10" <?php if($cmbVeces == 10) echo 'selected'; ?>>10 veces</option>
        </select>
        <br/><br/>
        
        <label>
            <input type="checkbox" name="chkInverso" id="chkInverso" 
            <?php if($chkInverso) echo 'checked'; ?>/>
            Iterar Inversamente (descendente)
        </label>
        <br/><br/>

        <button type="submit" name="btnEnviar">
            Iterar
        </button>
    </form>

    <section>
        <?php 
            if($resultado != "") {
                echo $resultado;
            }
        ?>
    </section>
</body>
</html>