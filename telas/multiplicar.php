<?php
    namespace Projeto\ti23t\telas;
    require_once('../php/funcoes.php');//acessando o arquivo
    include('cabecalho.php');
    use Projeto\ti23t\php\Funcao; //acessando a classe que está no arquivo funcoes.php
    $funcao = new Funcao(); //construtor da classe funcao -> conectando a INDEX E FUNCOES
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Somar</title>
</head>
<body>
    <form method="POST" style="text-align:center;margin:10%;background-color:#aaff34;padding:5%">
        <H1>Somar</H1>

        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o primeiro número</label>
            <input type="number" class="form-control" id="primeiroNumero" name="primeiroNumero">
        </div>
        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o segundo número</label>
            <input type="number" class="form-control" id="segundoNumero" name="segundoNumero">
        </div>
        

        <button type="submit" class="btn btn-primary">Multiplicar
            <?php 
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
                //chamo a variavel que representa a classe Funcao
                $funcao->coletar($num1, $num2);
                
            ?>
        </button>

        <h2> 

        <?php 
           echo $funcao->multiplicar() ;
        
        
        ?>
        </h2>
        

        <button type="button" class="btn btn-primary">Subtrair</button>

        <button type="button" class="btn btn-primary">Multiplicar</button>

        <button type="button" class="btn btn-primary">Dividir</button>


</body>
</html>