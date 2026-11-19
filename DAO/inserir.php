<?php

  namespace ClinicaVeterinaria\projeto\DAO;
  use ClinicaVeterinaria\projeto\DAO\Conexao;


  class Inserir{
    public function cadastrarVeterinario(Conexao $conexao,
                                         int $codigo,
                                         string $nome,
                                         string $telefone,
                                         string $endereco,
                                         float $salario,
                                         string $especialidade)
{
    try{
      $conn = $conexao->conectar();
      $sql  = "Insert into veterinario(codigo, nome, especialidade,
       salario, endereco, telefone) values( '$codigo', '$nome', '$especialidade',
       '$salario', '$endereco', '$telefone')";//preparando o comando

       $result = mysqli_query($conn,$sql);// executar o comando no bd
       //verifico se executou ou não

       if($result){
         return "<br><br>inserido com sucesso! Código: ".mysqli_insert_id($conn);
       }
       return "<br><br>Não inserido! Esse código já existe, digite outro.";


 }catch(\Exception $erro){
   return "<br><br>Impossivel cadastrar cliente <br><br> $erro";
 }
}

    public function cadastrarTutor(Conexao $conexao,
                                   int $codigo,
                                   string $nome,
                                   string $cpf,
                                   string $telefone,
                                   string $email,
                                   string $endereco)
{
    try{
      $conn = $conexao->conectar();
      $sql  = "Insert into tutor(codigo, nome, cpf, telefone, email, endereco)
       values( '$codigo', '$nome', '$cpf', '$telefone', '$email', '$endereco')";//preparando o comando

       $result = mysqli_query($conn,$sql);// executar o comando no bd

       if($result){
         return "<br><br>inserido com sucesso! Código: ".mysqli_insert_id($conn);
       }
       return "<br><br>Não inserido! Esse código já existe, digite outro.";


 }catch(\Exception $erro){
   return "<br><br>Impossivel cadastrar tutor <br><br> $erro";
 }
}

    public function cadastrarAnimal(Conexao $conexao,
                                    int $codigo,
                                    string $nome,
                                    string $especie,
                                    string $raca,
                                    string $sexo,
                                    int $idade,
                                    float $peso,
                                    int $codigoTutor)
{
    try{
      $conn = $conexao->conectar();
      $sql  = "Insert into animal(codigo, nome, especie, raca, sexo, idade, peso, codigoTutor)
       values( '$codigo', '$nome', '$especie', '$raca', '$sexo', '$idade', '$peso', '$codigoTutor')";//preparando o comando

       $result = mysqli_query($conn,$sql);// executar o comando no bd

       if($result){
         return "<br><br>inserido com sucesso! Código: ".mysqli_insert_id($conn);
       }
       return "<br><br>Não inserido! Confira se esse código já existe ou se o código do tutor está errado.";


 }catch(\Exception $erro){
   return "<br><br>Impossivel cadastrar animal <br><br> $erro";
 }
}
  }

?>
