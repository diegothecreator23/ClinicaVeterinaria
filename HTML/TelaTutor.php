<?php
    namespace ClinicaVeterinaria\projeto\HTML;
    require_once('../PHP/tutor.php');
    require_once('../DAO/conexao.php');
    require_once('../DAO/inserir.php');

    use ClinicaVeterinaria\projeto\php\Tutor;
    use ClinicaVeterinaria\projeto\DAO\Conexao;
    use ClinicaVeterinaria\projeto\DAO\Inserir;

    $conexao = new conexao();
    $inserir = new inserir();
    $mensagem = "";

   ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Tutor</title>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
</head>
<body>
<div class="container mt-4" style="max-width: 700px;">
    <h1>Cadastro Tutor</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="number" min="1" class="form-control" id="codigo" name="codigo" placeholder="Digite o código (ou deixe em branco para gerar sozinho)">
        </div>

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Ex.: 123.456.789-09" required>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Ex.: 11987654321" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="nome@email.com" required>
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua, número e bairro" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar

         <?php
           if(isset($_POST['nome'])){

            $codigo   = (int)$_POST['codigo']; // em branco vira 0 e o banco gera o código
            $nome     = $_POST['nome'];
            $cpf      = $_POST['cpf'];
            $telefone = $_POST['telefone'];
            $email    = $_POST['email'];
            $endereco = $_POST['endereco'];

            $mensagem = $inserir->cadastrarTutor($conexao,
                                                  $codigo,
                                                  $nome,
                                                  $cpf,
                                                  $telefone,
                                                  $email,
                                                  $endereco);



           }
         ?>

        </button>
        <a href="../index.php" class="btn btn-secondary">Voltar</a>
        <div class="mt-3">
            <?php

            if(isset($_POST['nome'])){
                echo $mensagem;
            }else{
                echo "Preencha os campos";
            }

        ?>
        </div>
</form>
</div>
</body>
</html>
