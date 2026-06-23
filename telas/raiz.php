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

    <title>Calcular Raiz Quadrada</title>
</head>
<body>
    <form method="POST" style="text-align:center;margin:10%;background-color:#aaff34;padding:5%">
        <H1></H1>

        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o valor para a raiz quadrada</label>
            <input type="text" class="form-control" id="primeiroNumero" name="primeiroNumero">
        </div>
        

        <button type="submit" class="btn btn-primary">Calcular raiz
            <?php 
                $valor = (float)$_POST['primeiroNumero'];
                //chamo a variavel que representa a classe Funcao
                $resultado = $funcao->calcularRaiz($valor);
                
            ?>
        </button>

        <h2> 

        <?php 
           if(isset($_POST['primeiroNumero'])){
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