<?php
    namespace ClinicaVeterinaria\projeto\DAO;
    use ClinicaVeterinaria\projeto\DAO\Conexao;

    class Consultar{

       function consultarVeterinario(Conexao $conexao, int $codigo){

       try
       {
            $conn = $conexao->conectar();
            $sql = "select * from veterinario where codigo = '$codigo'";
            $result = mysqli_query($conn,$sql);
            //buscar os dados no banco

            while($dados = mysqli_fetch_array($result)){
                if($dados['codigo'] == $codigo){
                   return '<br>Código: '.$dados['codigo'].
                          '<br>Nome: '.$dados['nome'].
                          '<br>Especialidade: '.$dados['especialidade'].
                          '<br>Telefone: '.$dados['telefone'].
                          '<br>Endereço: '.$dados['endereco'].
                          '<br>Salário: '.$dados['salario'];
                }// fim do if
            }// fim do while
            return "<br><br>Veterinário não encontrado!";

        }catch(\Exception $erro)
        {
          return "<br><br>Algo deu errado! <br><br>$erro";
        }

    }//fim do consultar funcionario

       function consultarTutor(Conexao $conexao, int $codigo){

       try
       {
            $conn = $conexao->conectar();
            $sql = "select * from tutor where codigo = '$codigo'";
            $result = mysqli_query($conn,$sql);
            //buscar os dados no banco

            while($dados = mysqli_fetch_array($result)){
                if($dados['codigo'] == $codigo){
                   return '<br>Código: '.$dados['codigo'].
                          '<br>Nome: '.$dados['nome'].
                          '<br>CPF: '.$dados['cpf'].
                          '<br>Telefone: '.$dados['telefone'].
                          '<br>E-mail: '.$dados['email'].
                          '<br>Endereço: '.$dados['endereco'];
                }// fim do if
            }// fim do while
            return "<br><br>Tutor não encontrado!";

        }catch(\Exception $erro)
        {
          return "<br><br>Algo deu errado! <br><br>$erro";
        }

    }//fim do consultar tutor

       function consultarAnimal(Conexao $conexao, int $codigo){

       try
       {
            $conn = $conexao->conectar();
            //junta com a tabela tutor para mostrar o nome do dono
            $sql = "select animal.*, tutor.nome as nomeTutor from animal
                    inner join tutor on tutor.codigo = animal.codigoTutor
                    where animal.codigo = '$codigo'";
            $result = mysqli_query($conn,$sql);
            //buscar os dados no banco

            while($dados = mysqli_fetch_array($result)){
                if($dados['codigo'] == $codigo){
                   return '<br>Código: '.$dados['codigo'].
                          '<br>Nome: '.$dados['nome'].
                          '<br>Espécie: '.$dados['especie'].
                          '<br>Raça: '.$dados['raca'].
                          '<br>Sexo: '.$dados['sexo'].
                          '<br>Idade: '.$dados['idade'].' ano(s)'.
                          '<br>Peso: '.$dados['peso'].' kg'.
                          '<br>Tutor: '.$dados['nomeTutor'].' (código '.$dados['codigoTutor'].')';
                }// fim do if
            }// fim do while
            return "<br><br>Animal não encontrado!";

        }catch(\Exception $erro)
        {
          return "<br><br>Algo deu errado! <br><br>$erro";
        }

    }//fim do consultar animal
    } //fim do consultar
?>
