<?php
    namespace ClinicaVeterinaria\projeto\php;

    class Animal{
        private int $codigo;
        private string $nome;
        private string $especie;
        private string $raca;
        private string $sexo;
        private int $idade;
        private float $peso;
        private int $codigoTutor;

    //metodo construtor
    public function __construct(int $codigo, string $nome, string $especie, string $raca,
    string $sexo, int $idade, float $peso, int $codigoTutor){
         $this->codigo      =$codigo;
         $this->nome        =$nome;
         $this->especie     =$especie;
         $this->raca        =$raca;
         $this->sexo        =$sexo;
         $this->idade       =$idade;
         $this->peso        =$peso;
         $this->codigoTutor =$codigoTutor;

    }//fim do construtor

    public function __get(string $dados):mixed
    {
        return $this->$dados;
    }// fim do get

    public function __set(string $variavel, string $novoDado):void
    {
        $this->$variavel = $novoDado;
    }//fim do set

    public function imprimir():string
    {
         return "<br>Código: ".$this->codigo.
                "<br>Nome: ".$this->nome.
                "<br>Espécie: ".$this->especie.
                "<br>Raça: ".$this->raca.
                "<br>Sexo: ".$this->sexo.
                "<br>Idade: ".$this->idade.
                "<br>Peso: ".$this->peso." kg".
                "<br>Código do Tutor: ".$this->codigoTutor. "<br><br>";
    }// fim do imprimir
}//fim da classe
?>
