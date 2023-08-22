<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício PHP</title>
</head>

<body>
  <h1>Somar valores</h1>

  <?php
  $value1 = $_GET["v1"] ?? 0;
  $value2 = $_GET["v2"] ?? 0;
  ?>

  <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
    <label for="v1">Valor 1</label>
    <input type="number" name="v1" id="v1">
    <label for="v2">Valor 2</label>
    <input type="number" name="v2" id="v2">
    <input type="submit" value="Somar">
  </form>

  <?php
  $result = $value1 + $value2;

  echo "
      <div>
        <h2>Resultado:</h2>
        <p>O resultado da soma do valor 1: $value1 e o valor 2: $value2 é igual a: <strong>$result</strong></p>
      </div>
    ";
  ?>
</body>

</html>