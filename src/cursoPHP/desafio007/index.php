<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício PHP</title>
</head>

<body>
  <h1>Informe seu salário</h1>

  <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
    <label for="salario">Salário (R$):</label>
    <input type="number" name="salario" id="salario">
    <input type="submit" value="Calcular">
  </form>
  <p>**Considerando o salário mínimo de R$ 1.380,00</p>

  <?php
  const MINIMUM_WAGE = 1380;
  $wage = $_GET["salario"] ?? 0;
  $integerResult = (int) ($wage / MINIMUM_WAGE);
  $remnant = $wage % MINIMUM_WAGE;

  function formatCurrency($valueToFormat)
  {
    $currencyStd = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    return numfmt_format_currency($currencyStd, $valueToFormat, "BRL");
  }

  echo "<br/>Quem recebe um salário de <strong>" . formatCurrency($wage) . "</strong> ganha <strong>$integerResult salários mínimos + </strong> " . formatCurrency($remnant);
  ?>

</body>

</html>