<?php
    namespace ClinicaVeterinaria\projeto\HTML;
    require_once('../PHP/animal.php');
    require_once('../DAO/conexao.php');
    require_once('../DAO/inserir.php');

    use ClinicaVeterinaria\projeto\php\Animal;
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
    <title>Cadastro Animal</title>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
</head>
<body>
<div class="container mt-4" style="max-width: 700px;">
    <h1>Cadastro Animal</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="number" min="1" class="form-control" id="codigo" name="codigo" placeholder="Digite o código (ou deixe em branco para gerar sozinho)">
        </div>

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do animal" required>
        </div>

        <div class="mb-3">
            <label for="especie" class="form-label">Espécie</label>
            <select class="form-select" id="especie" name="especie" required>
                <option value="">Selecione</option>
                <option>Cachorro</option>
                <option>Gato</option>
                <option>Ave</option>
                <option>Coelho</option>
                <option>Roedor</option>
                <option>Réptil</option>
                <option>Outro</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="raca" class="form-label">Raça</label>
            <input type="text" class="form-control" id="raca" name="raca" placeholder="Ex.: SRD, Poodle, Siamês" required>
        </div>

        <div class="mb-3">
            <label for="sexo" class="form-label">Sexo</label>
            <select class="form-select" id="sexo" name="sexo" required>
                <option value="">Selecione</option>
                <option>Macho</option>
                <option>Fêmea</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="idade" class="form-label">Idade (anos)</label>
            <input type="number" min="0" class="form-control" id="idade" name="idade" placeholder="Ex.: 3" required>
        </div>

        <div class="mb-3">
            <label for="peso" class="form-label">Peso (kg)</label>
            <input type="number" step="0.01" min="0" class="form-control" id="peso" name="peso" placeholder="Ex.: 4.5" required>
        </div>

        <div class="mb-3">
            <label for="codigoTutor" class="form-label">Código do Tutor</label>
            <input type="number" class="form-control" id="codigoTutor" name="codigoTutor" placeholder="Código do dono (veja em Consultar Tutor)" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar

         <?php
           if(isset($_POST['nome'])){

            $codigo      = (int)$_POST['codigo']; // em branco vira 0 e o banco gera o código
            $nome        = $_POST['nome'];
            $especie     = $_POST['especie'];
            $raca        = $_POST['raca'];
            $sexo        = $_POST['sexo'];
            $idade       = $_POST['idade'];
            $peso        = $_POST['peso'];
            $codigoTutor = $_POST['codigoTutor'];

            $mensagem = $inserir->cadastrarAnimal($conexao,
                                                   $codigo,
                                                   $nome,
                                                   $especie,
                                                   $raca,
                                                   $sexo,
                                                   $idade,
                                                   $peso,
                                                   $codigoTutor);



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
