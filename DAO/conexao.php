<?php
 namespace ClinicaVeterinaria\projeto\DAO;
 class Conexao{
   function conectar(){
    try {

       mysqli_report(MYSQLI_REPORT_OFF); // se o SQL der erro, volta false (igual em todas as versões do PHP)
       $conn = mysqli_connect('localhost', 'root', '', 'clinicaVeterinaria');
       if($conn){
        mysqli_set_charset($conn, 'utf8mb4'); // acentos
        return $conn;
        echo "Conectado!";
       }else{
        die("Conexão Falhou! Verifique se o MySQL está ligado e se o banco foi criado.");
       }

    }
    catch(\Exception $erro)
    {
        echo "Algo deu errado " . $erro;

    } // fim do catch

   } //fim do conectar

 } // fim do conexao
?>
