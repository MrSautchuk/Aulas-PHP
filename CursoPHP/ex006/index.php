<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 

// Entendendo aspas simples e duplas

  const CANAL = "Curso em Video";
  echo "Eu adoro o CANAL \n"; //Constante não executa dentro da string
  echo "Eu adoro o ".CANAL."\n"; //Constante executa mediante a concatenação
  echo "Estamos no ano de " .date('Y') ."\n";

  $nom="Rodrigo";
  $snom="Nogueira";
  //echo  " $nom "Minotauro" $snom "; //Reporta erro
  echo '$nom "Minotauro" $snom'; //é interpretado de forma literal
  echo "$nom \"Minotauro\" $snom \n"; // Solução

  /*
  Sequencias de escape
  \n Nova Linha
  \t Tabulação Horizontal (TAB)
  \\ Exibir Barra Invertida
  \$ Exibir Sinal de Sifrão
  \u{} Codepoint Unicode
*/
  ?>
</body>
</html>