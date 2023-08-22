<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP - 02</title>
</head>

<body>
  <h1>Trabalhando com números aleatórios</h1>
  <form action="index.php">
    <?php
    $randomNumber = rand(0, 100);

    echo "
      <div>Gerando um número aleatório entre 0 e 100...</div>
      <div>O valor gerado foi $randomNumber</div>
    "
    ?>
    <button type="submit">Gerar outro</button>
  </form>
</body>

</html>