<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP - 03</title>
</head>

<body>
  <h1>Conversor de moedas v1.0</h1>
  <?php
  $inputValue = $_GET['money'];
  const currentDollarQuotation = 5.22;
  $result = number_format($inputValue / currentDollarQuotation, 2);

  echo "<div>Seus $inputValue equivalem a US$ $result </div>"
  ?>
  <div>Cotação fixa de 5,22 informada diretamente no código</div>
</body>

</html>