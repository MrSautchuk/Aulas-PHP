<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 

// String HEREDOC

  $curso = "PHP";
  $ano = date("Y");

  echo<<< FRASE
    Estou estudando $curso em $ano
  FRASE;

// Sintaxe NOWDOC

$curso = "PHP";
  $ano = date("Y");

  echo<<< 'FRASE'
    Estou estudando $curso em $ano
  FRASE;

  ?>
</body>
</html>