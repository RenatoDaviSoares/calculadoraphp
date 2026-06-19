<?php
    namespace Projeto\ti23t\php;

    class Funcao{
        //encapsulamento = evitar que outras classwes do projeto acessem diretamente as suas variaveis
        private int $num1 ;
        private int $num2 ;
        private int $num3 ; 
        private int $resultado ; 


        //Construtor = Instancia as variaveis = dar valores Iniciais
        public function __construct()
        {
            $this->resultado = 0;
        }


        //construtor = instancia as variaveis = Dar valores iniciais 
        public function coletar(int $num1, int $num2){
            $this->num1 = $num1;
            $this->num2 = $num2;

        }//fim do coletar


        //APENAS GET E SET USAM DOIS UNDERLINES
        
        //metodos modificadores(SET) e acesso(GET)
        public function __get(string $dados):mixed 
        {
            return $this->dados;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void 
        {
            $this-> variavel = $novoDado;

        }//fim do set
        
        //METODOS - somar , subtrair, multiplicar, dividir
        public function somar(){
            //usando a função SET
            $this->resultado = $this->num1 + $this->num2;
            return "<br>A soma do $this->num1 e do $this->num2 é: $this->resultado <br>";
            
        }//fim do metodo somar 

        public function subtrair(){
            $this->resultado = $this->num1 - $this->num2;
            return $this->resultado;
            return "<br>A subtração do $this->num1 menos $this->num2 é: $this->resultado <br>";
        }

        public function multiplicar(){
            $this->resultado = $this->num1 * $this->num2 ;
            return $this->resultado;
            return "<br>A multiplicação do $this->num1 vezes $this->num2 é: $this->resultado <br>";
        }

        public function dividir(){
            if($this->num2 <= 0)
            {
                return "Impossivel dividir por zero!";
            }
            else
            {
            $this->resultado = $this->num1 / $this->num2;
            } 
            return "<br>A divisão do $this->num1 dividio por $this->num2 é: $this->resultado <br>";
        }//fim do dividir


        public function baskara(int $a, int $b, int $c){
            $delta = pow($b, 2) - 4 * $a * $c ;

            if($delta < 0){
                return "Impossível calcular X1 e X2 de delta negativo, valor do delta: $delta";
            }else {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                return "<br>Delta; $delta<br>: $x1<br1>X2: $x2";              
            }
        }

        public function imc(float $peso, float $altura){
            $resultado = $peso / ($altura * $altura);
            if($resultado < 0){
                return "Impossivel calcular IMC de números negativos";
            }else if($resultado <= 18.5){
                return "Você é abaixo do peso";
            }else if($resultado > 18.6 || $resultado < 24.9){
                return "Você é peso normal";
            }else if($resultado > 25.0 || $resultado < 29.9 ){
                return "Você é gordão parte 1";
            }else if($resultado > 30.0 || $this->resultado < 34.9){
                return "Você é gordão parte 2";
            }else if($resultado > 35.0 || $resultado > 39.9){
                return "você é gordão parte 3";
            }else if($resultado > 40.0){
                return "VOCÊ É MUITO GORDO MANÉKKKKKKKK";
            }
        }

        public function areaRetangulo(float $altura, float $largura){
            $resultado = $altura * $largura;
            if($altura <= 0 || $largura <= 0){
                return "Valores não podem ser zero!";
            }else {
                return "a Área do retangulo é: $resultado";
            }
        }

    }//fim da classe






















?><!-- Fechamento da tag php -->