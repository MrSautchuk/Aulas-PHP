<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Sorteador de numeros</h1>
  <section>
    <main>
      <?php 
      $n1 = $_GET["numero1"];
      $n2 = $_GET["numero2"];
      echo "O número sorteado é :<br>";
      echo rand($n1, $n2);
      ?>
      <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
  </section>
  </header>
</body>
</html>