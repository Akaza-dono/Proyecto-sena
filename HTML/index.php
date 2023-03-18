<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Proyecto de prueba</title>
</head>
<body>

    <!-- <h1>Prueba</h1> -->
    <?php
        // $nombre = "Ethan";

        // $saldoAnterior = 2000;
        // $abono = 1000;

        // $nuevoSaldo = $saldoAnterior + $abono;

        // // echo $nombre. " su saldo en la cuenta es: ". $nuevoSaldo;

        // $nota1 = 4;
        // $nota2 = 5;
        // $nota3 = 1;
        // $totalNota = ($nota1 + $nota2 + $nota3) / 3;

        // if($totalNota > 3){
        //     echo $nombre." Su promedio es ".$totalNota." Usted pasa";
        // }else{
        //     echo $nombre." Su promedio es ".$totalNota." Usted no pasa";
        // }
    ?>
    <!-- <table class="table">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Saldo Anterior</td>
                <td>Nuevo Saldo</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $nombre = 'Alejandro';
                $saldoAnterior = 10000;
                $nuevoSaldo = 20000;
                $abono = 5000;


                $nuevoSaldo = $nuevoSaldo + $abono;

                echo "<tr>
                        <td>{$nombre}</td>
                        <td>{$saldoAnterior}</td>
                        <td>{$nuevoSaldo}</td>  
                     </tr>"

            ?>
        </tbody>
    </table> -->
    <h1>Lista de multiplos</h1>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <td>numero</td>
                <td>Ecuacion</td>
                <td>Multiplo</td>
                <td>Total</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                $valor = 5;
                while($i <= 10){
                    echo "<tr>
                            <td>{$i}</td>
                            <td>Multiplicado por</td>
                            <td>{$valor}</td>
                            <td>" . $valor * $i . "</td>
                        </tr>";
                    $i++;
                }
            ?>
        </tbody>
</table>








</body>
</html>