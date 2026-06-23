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

    <title>Calcular Área</title>
</head>
<body>
    <form method="POST" style="text-align:center;margin:10%;background-color:#aaff34;padding:5%">
        <H1>Calcular área Triangulo</H1>

        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe a Altura</label>
            <input type="text" class="form-control" id="primeiroNumero" name="primeiroNumero">
        </div>
        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe a base</label>
            <input type="text" class="form-control" id="segundoNumero" name="segundoNumero">
        </div>
        

        <button type="submit" class="btn btn-primary">Calcular Area
            <?php 
                $altura = (float)$_POST['segundoNumero'];
                $base = (float)$_POST['primeiroNumero'];
                //chamo a variavel que representa a classe Funcao
                $resultado = $funcao->areaTriangulo($altura, $base);
                
            ?>
        </button>

        <h2> 

        <?php 
           if(isset($_POST['primeiroNumero']) || isset($_POST['segundoNumero'])){
                echo $resultado;
           }else{
                echo "Preencha os campos";
           }
        
        
        ?>
        </h2>
        

        <button type="button" class="btn btn-primary">Subtrair</button>

        <button type="button" class="btn btn-primary">Multiplicar</button>

        <button type="button" class="btn btn-primary">Dividir</button>


</body>
</html>