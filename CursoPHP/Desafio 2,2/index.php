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
    <h1>Trabalhando com números aleatórios</h1>
      <form> 
      <?php 
      $r = rand(1, 100);
      echo "Gerando números aleatórios entre 0 e 100 <br>";
      echo "Número gerado <strong>$r</strong>";
    ?> 
        <input type="submit" value="Enviar" >
      </form>
    </section>
  </header>
</body>
</html>