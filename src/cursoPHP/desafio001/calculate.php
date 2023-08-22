<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP - 01</title>
</head>

<body>
  <h1>Resultado</h1>
  <div action="/calculate.php">
    <?php
    $choosedNumber = $_GET['number'];
    $previousNumber = $choosedNumber - 1;
    $nextNumber = $choosedNumber + 1;
    echo "<div>O número escolhido foi $choosedNumber</div>";
    echo "<div>O número antecessor é $previousNumber </div>";
    echo "<div>O próximo número é $nextNumber </div>";
    ?>
  </div>
</body>

</html>