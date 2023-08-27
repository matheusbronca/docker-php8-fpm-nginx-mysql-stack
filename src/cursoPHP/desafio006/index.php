<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício PHP</title>
</head>

<body>
  <h1>Anatomia de uma divisão</h1>

  <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
    <label for="dividendo">Dividendo:</label>
    <input type="number" name="dividendo" id="dividendo">
    <label for="divisor">Divisor:</label>
    <input type="number" name="divisor" id="divisor">
    <input type="submit" value="Somar">
  </form>

  <?php
  $dividend = $_GET["dividendo"] ?? 0;
  $divider = $_GET["divisor"] ?? 0;
  $IS_DIVISIBLE = $divider != 0;
  $integerResult = $IS_DIVISIBLE ? (int) ($dividend / $divider) : 0;
  $remnant = $IS_DIVISIBLE ? $dividend % $divider : 0;

  echo "<br/><strong>Dividendo:</strong> $dividend";
  echo "<br/><strong>Divisor:</strong> $divider";
  echo "<br/><strong>Parte inteira:</strong> $integerResult";
  echo "<br/><strong>Resto:</strong> $remnant";

  ?>

</body>

</html>