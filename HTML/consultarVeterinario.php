<?php
    namespace ClinicaVeterinaria\projeto\HTML;
    require_once('../DAO/conexao.php');
    require_once('../DAO/consultar.php');

    use ClinicaVeterinaria\projeto\DAO\Conexao;
    use ClinicaVeterinaria\projeto\DAO\Consultar;

    $conexao = new Conexao();
    $consultar = new Consultar();
    $resultado = "";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Veterinario</title>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
</head>
<body>
<div class="container mt-4" style="max-width: 700px;">
      <h1>Consultar Veterinário</h1>
      <form method="POST">
          <div class="mb-3">
              <label for="codigo" class="form-label">Código</label>
              <input type="number" class="form-control" id="codigo" name="codigo" placeholder="Digite o código" required>
          </div>
          <button type="submit" class="btn btn-primary">Consultar
           <?php
           if(isset($_POST['codigo'])){
               $resultado = $consultar->consultarVeterinario($conexao,$_POST['codigo']);
           }
           ?>
            </button>
          <a href="../index.php" class="btn btn-secondary">Voltar</a>
    </form>
    <div class="mt-3"><?php echo $resultado;?></div>
</div>
</body>
</html>
