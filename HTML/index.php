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

        // echo $nombre. " su saldo en la cuenta es: ". $nuevoSaldo;

        $nota1 = 4;
        $nota2 = 5;
        $nota3 = 1;
        $totalNota = ($nota1 + $nota2 + $nota3) / 3;

        if($totalNota > 3){
            echo $nombre." Su promedio es ".$totalNota." Usted pasa";
        }else{
            echo $nombre." Su promedio es ".$totalNota." Usted no pasa";
        }
    ?>
</body>
</html>