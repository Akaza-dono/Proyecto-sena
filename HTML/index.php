<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto de prueba</title>
</head>
<body>
    <h1>Prueba</h1>
    <?php
        $nombre = "Ethan";

        $saldoAnterior = 2000;
        $abono = 1000;

        $nuevoSaldo = $saldoAnterior + $abono;

        echo $nombre. "su saldo en la cuenta es: ". $nuevoSaldo;
    ?>
</body>
</html>