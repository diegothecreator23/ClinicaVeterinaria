<?php
    namespace ClinicaVeterinaria\projeto\php;

    class Tutor{
        private int $codigo;
        private string $nome;
        private string $cpf;
        private string $telefone;
        private string $email;
        private string $endereco;

    //metodo construtor
    public function __construct(int $codigo, string $nome, string $cpf,
    string $telefone, string $email, string $endereco){
         $this->codigo   =$codigo;
         $this->nome     =$nome;
         $this->cpf      =$cpf;
         $this->telefone =$telefone;
         $this->email    =$email;
         $this->endereco =$endereco;

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
                "<br>CPF: ".$this->cpf.
                "<br>Telefone: ".$this->telefone.
                "<br>E-mail: ".$this->email.
                "<br>Endereço: ".$this->endereco. "<br><br>";
    }// fim do imprimir
}//fim da classe
?>
