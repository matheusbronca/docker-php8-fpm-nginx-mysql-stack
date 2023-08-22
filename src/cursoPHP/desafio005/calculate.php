<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP - 05</title>
</head>

<body>
  <h1>Analisador de número real</h1>
  <?php
  $inputValue = $_GET["floatNumber"];
  $integerValue = intval($inputValue);
  $floatValue = number_format(floatval($inputValue) - $integerValue, 3);

  echo "
    <p>Analisando o número" . number_format($inputValue, 3) . " informado pelo usuário</p>
    <ul>
      <li>
        A parte inteira do número é $integerValue
      </li>
      <li>
        A parte inteira do número é $floatValue
      </li>
    </ul>
    "
  ?>
</body>

</html>