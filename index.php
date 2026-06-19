<?php namespace Projeto\ti23t;     
    include('telas/cabecalho.php'); //Tentando utilizara a formatação
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
        <h1> Boas Vindas </h1>

        <form method="POST" style="text-align:center;margin:10%;background-color:#aaff34;padding:5%">

        <a href="telas/somar.php" class="btn btn-primary">Somar</a>

        <a href="telas/subtrair.php" class="btn btn-primary">Subtrair</a>

        <a href="telas/multiplicar.php" class="btn btn-primary">Multiplicar</a>

        <a href="telas/dividir.php" class="btn btn-primary">Dividir</a>

        <a href="telas/segundoGrau.php" class="btn btn-primary">Segundo Grau</a>

        <a href="telas/imc.php" class="btn btn-primary">IMC</a>

        <a href="telas/areaRetangulo.php" class="btn btn-primary">Área de Retangulo</a>

    </form>
</body>
</html>