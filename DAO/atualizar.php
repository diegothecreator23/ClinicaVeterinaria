<?php
namespace ClinicaVeterinaria\projeto\DAO;
use ClinicaVeterinaria\projeto\DAO\Conexao;

Class Atualizar{
    function atualizar(Conexao $conexao,
                       int $codigo,
                       string $campo,
                       string $novoDado)

    {
       try{
          $conn = $conexao->conectar();//abrir a conexão com bd
         $sql = "update veterinario set $campo = '$novoDado' where codigo = '$codigo'";
         $result =mysqli_query($conn, $sql);
         if($result){
            return "<br><br>Dado Atualizado com sucesso!";
         }
         return "<br><br>Não atualizado!";
        }catch(\Exception $erro){
           return "<br><br>Algo deu Errado<br><br> $erro";

        }


 }//fim do metodo

    function atualizarTutor(Conexao $conexao,
                            int $codigo,
                            string $campo,
                            string $novoDado)

    {
       try{
          $conn = $conexao->conectar();//abrir a conexão com bd
         $sql = "update tutor set $campo = '$novoDado' where codigo = '$codigo'";
         $result =mysqli_query($conn, $sql);
         if($result){
            return "<br><br>Dado Atualizado com sucesso!";
         }
         return "<br><br>Não atualizado!";
        }catch(\Exception $erro){
           return "<br><br>Algo deu Errado<br><br> $erro";

        }


 }//fim do metodo

    function atualizarAnimal(Conexao $conexao,
                             int $codigo,
                             string $campo,
                             string $novoDado)

    {
       try{
          $conn = $conexao->conectar();//abrir a conexão com bd
         $sql = "update animal set $campo = '$novoDado' where codigo = '$codigo'";
         $result =mysqli_query($conn, $sql);
         if($result){
            return "<br><br>Dado Atualizado com sucesso!";
         }
         return "<br><br>Não atualizado! (se mudou o tutor, confira se o código do tutor existe)";
        }catch(\Exception $erro){
           return "<br><br>Algo deu Errado<br><br> $erro";

        }


 }//fim do metodo

}//fim da  classe


?>
