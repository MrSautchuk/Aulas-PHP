<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Antecessor e Sucessor</title>
  <link rel="stylesheet" href="Style.css">
</head>
<body>
<header>
    <h1>Antecessor e Sucessor</h1>
    <main>
      <?php 
        $numero = $_GET["numero"] ?? "Digite um número válido";
        $ant = $_GET["numero"]-1;
        $sus = $_GET["numero"]+1;
        echo "O número digitado foi: <strong>$numero</strong> <br>";
        echo "Seu antecessor é: <strong>$ant</strong> \n <br>";
        echo "E seu sucessor é: <strong>$sus</strong> \n <br>";
      ?>
      <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
  </header>
</body>
</html>