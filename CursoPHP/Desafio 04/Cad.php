<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sem entrada do usuário</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
  <header>
    <section>
    <h1>Conversor de Moedas <strong>v. 2.0</strong></h1>
    <?php 
    $real = $_GET["numero"];

    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim    = date("m-d-Y");

    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    $cotação = $dados['value']['0']['cotacaoCompra'];

    echo "Seus <strong>R$$real</strong> equivalem a <strong>US$$cotação</strong> <br><br><br>";
    echo "Cotação Variavel obtida atraves do site do <strong><a href='https://www.bcb.gov.br/'>Banco Central do Brasil</a></strong><br><br>";
    ?>
      <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </section>
  </header>
</body>
</html>