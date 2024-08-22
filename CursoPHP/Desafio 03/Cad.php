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
    <h1>Conversor de Moedas <strong>1.0</strong></h1>
    <?php 
    $real = $_GET["numero"];
    define ('Dolar', 5.48);
    $cot = $real*Dolar;
    echo"Seus R$ $real equivalem a $$cot <br><br><br>";
    echo "<strong>Cotação fixa de $5,48</strong>, informações diretamente no código<br><br>";
    ?>
      <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </section>
  </header>
</body>
</html>