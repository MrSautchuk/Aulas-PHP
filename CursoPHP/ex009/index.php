<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores Aritimeticos</title>
</head>
<body>
  

<?php 
  /*
    Operadores Aritimeticos

    + Adição
    - Subtrção
    * Multiplicação
    / Divisão Real (Com ponto flutuante)
    % Divisão Inteira (Sem ponto flutuante)
    ** Exponenciação
  */

  $res = 5+2/2;
  echo "$res<br>";

  /*
  Ordem de Precedencia
  
  0º    ()
  
  1º    ** 
  2º    *   /   %
  3º    +   -
  */

  $res2 = 50/2+3**2;
  echo "$res2 <br>";

  $res3 = 50/(2+3)**2;
  echo "$res3 <br>";


  // abs() retorna o valor absoluto, tecnicamente retira o sinal (+ -) da frente do numero

  $r1 = abs(500);
  echo "$r1 <br>";

  $r2 = abs(-2000);
  echo "$r2 <br>";

  // base convert converte numeros de uma base para outra

  $r3 = base_convert(254,10,8);
  echo "$r3 <br>";

  // ceil() floor() round() arredondam o valor "ceil" pra cima "floor" pra baixo e "round" faz o arredondamento aritimetico

  //hypot() calcula a hypotenusa

  // intdiv() entega o valor inteiro do resultado da divisão
  $r4 = intdiv(5,2);
  echo "$r4 <br>";

  // min() max() mostra o valor minimo e maximo entre valores
  $r5 = min(5, 1, 10, 19);
  echo "$r5 <br>";

  // pi() contem o valor de pi
  $r6 = pi();
  $r7 = M_PI;
  echo "$r6,   $r7 <br>";

  // pow() função Power para calcular potencia que foi substituida por **
  // usando esta função você perde a ordem de precedencia, precisa ser usado parenteses para superar este problema
  $r8 = pow(2,10);
  echo "$r8 <br>";

  // sqrt calcula raiz quadrada
  // raiz quadrada, cubica e etc tambem pode ser calculada usando potência
  $r9 = sqrt(9);
  echo "$r9 <br>";

  $r10 = 9** (1/2); //Elevado a 2º Potência
  echo "$r10 <br>";
  $r11 = 27** (1/3);// Elevado a 3º Potência
  echo "$r11 <br>";



?>

</body>
</html>