<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="Style.css">
</head>
<body>
  <header>
    <h1>Resultado do Processamento</h1>
    <main>
      <?php 
        $nome = $_GET["nome"] ?? "Sem nome";
        $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
        echo"É um pracer te conhecer, <strong>$nome $sobrenome</Strong>! Este é o meu site.";
      ?>
      <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
  </header>
</body>
</html>