<?php
namespace ClinicaVeterinaria\projeto\HTML;
    require_once('../DAO/conexao.php');
    require_once('../DAO/atualizar.php');

    use ClinicaVeterinaria\projeto\DAO\Conexao;
    use ClinicaVeterinaria\projeto\DAO\Atualizar;

    $conexao = new Conexao();
    $atualizar = new Atualizar();
    $resultado = "";




?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Animal</title>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
</head>
<body>
<div class="container mt-4" style="max-width: 700px;">
    <h1>Atualizar Animal</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="number" class="form-control" name="codigo" id="codigo" placeholder="Digite o código" required>
        </div>

        <div class="mb-3">
            <label for="campo" class="form-label">Escolha o campo que deseja atualizar</label>
            <select class="form-select" name="campo" id="campo">
                <option value="nome">Nome</option>
                <option value="especie">Espécie</option>
                <option value="raca">Raça</option>
                <option value="sexo">Sexo</option>
                <option value="idade">Idade</option>
                <option value="peso">Peso</option>
                <option value="codigoTutor">Código do Tutor</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="novoDado" class="form-label">Informe o novo dado</label>
            <input type="text" class="form-control" name="novoDado" id="novoDado" placeholder="Digite o novo valor" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar
            <?php
              if(isset($_POST['codigo'])){
                  $codigo = $_POST['codigo'];
                  $campo = $_POST['campo'];
                  $novoDado = $_POST['novoDado'];
                  //fazer a operação
                  $resultado = $atualizar->atualizarAnimal($conexao, $codigo, $campo, $novoDado);
              }
            ?>
        </button>
        <a href="../index.php" class="btn btn-secondary">Voltar</a>
    </form>
    <div class="mt-3">
    <?php

       echo $resultado

    ?>
    </div>
</div>
</body>
</html>
