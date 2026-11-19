<?php

namespace ClinicaVeterinaria\projeto\DAO;
use ClinicaVeterinaria\projeto\DAO\Conexao;

class Excluir{
  function ExcluirVeterinario(Conexao $conexao, int $codigo){
    try{
        $conn = $conexao->conectar();
        $sql = "delete from veterinario where codigo = '$codigo'";
        $result = mysqli_query($conn, $sql);
        if($result && mysqli_affected_rows($conn) > 0){
           return "<br><br>Excluído com sucesso!";
        }
        return "<br><br>Não Excluído! Confira o código.";
    }catch(\Exception $erro){
        return "Algo deu errado! <br><br> $erro";
    }
  }// fim da function

  function ExcluirTutor(Conexao $conexao, int $codigo){
    try{
        $conn = $conexao->conectar();
        $sql = "delete from tutor where codigo = '$codigo'";
        $result = mysqli_query($conn, $sql);
        if($result && mysqli_affected_rows($conn) > 0){
           return "<br><br>Excluído com sucesso!";
        }
        return "<br><br>Não Excluído! Confira o código (um tutor que tem animais cadastrados não pode ser excluído).";
    }catch(\Exception $erro){
        return "Algo deu errado! <br><br> $erro";
    }
  }// fim da function

  function ExcluirAnimal(Conexao $conexao, int $codigo){
    try{
        $conn = $conexao->conectar();
        $sql = "delete from animal where codigo = '$codigo'";
        $result = mysqli_query($conn, $sql);
        if($result && mysqli_affected_rows($conn) > 0){
           return "<br><br>Excluído com sucesso!";
        }
        return "<br><br>Não Excluído! Confira o código.";
    }catch(\Exception $erro){
        return "Algo deu errado! <br><br> $erro";
    }
  }// fim da function

}//fim do excluir

?>
