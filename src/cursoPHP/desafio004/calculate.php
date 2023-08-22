<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP - 04</title>
</head>

<body>
  <h1>Conversor de moedas v2.0</h1>
  <?php
  $startDate = date("m-d-Y", strtotime("-7 days"));
  $endDate = date("m-d-Y");

  $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $startDate . '\'&@dataFinalCotacao=\'' . $endDate . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

  $jsonData = json_decode(file_get_contents($url), true);
  $dollarPrice = $jsonData["value"][0]["cotacaoCompra"];


  $currencyFormat = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
  $inputValue = $_GET['money'] ?? 0;
  $result = $inputValue / $dollarPrice;

  var_dump($jsonData);

  echo "<p>Seus " . numfmt_format_currency($currencyFormat, $inputValue, "BRL") . " equivalem a " . numfmt_format_currency($currencyFormat, $result, "USD") . "</p>"
  ?>
</body>

</html>