<?php
    namespace Projeto\ti23t\php;

    class Funcao{
        //encapsulamento = evitar que outras classwes do projeto acessem diretamente as suas variaveis
        private int $num1 ;
        private int $num2 ; 
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



    }//fim da classe






















?><!-- Fechamento da tag php -->