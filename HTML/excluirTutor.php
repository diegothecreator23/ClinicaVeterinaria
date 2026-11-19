<?php
namespace ClinicaVeterinaria\projeto\HTML;
    require_once('../DAO/conexao.php');
    require_once('../DAO/excluir.php');

    use ClinicaVeterinaria\projeto\DAO\Conexao;
    use ClinicaVeterinaria\projeto\DAO\Excluir;

    $conexao = new Conexao();
    $excluir = new Excluir();
    $resultado = "";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir tutor</title>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
</head>
<body>
<div class="container mt-4" style="max-width: 700px;">
    <h1>Excluir Tutor</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="number" class="form-control" id="codigo" name="codigo" placeholder="Digite o código" required>
        </div>
        <button type="submit" class="btn btn-danger">Excluir

        <?php
        if(isset($_POST['codigo'])){
            $codigo = $_POST['codigo'];
            $resultado = $excluir->ExcluirTutor($conexao, $codigo);
        }
        ?>
    </button>
        <a href="../index.php" class="btn btn-secondary">Voltar</a>
</form>
<div class="mt-3">
<?php
 echo $resultado;
 ?>
</div>
</div>
</body>
</html>
