<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dados do servidor</title>
</head>

<body>
  <h1>Exemplo de PHP</h1>
  <?php
  $name = "Matheus";
  date_default_timezone_set("America/Sao_Paulo"); // GMT-3

  echo "Hoje é dia " . date("d/M/Y");
  eco "e a hora atual é " . date("G:i:s T");
  ?>
</body>

</html>