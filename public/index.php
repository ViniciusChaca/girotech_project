<?php require_once('../src/jurosComposto.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>
    Calculadora Investimentos
  </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- View Port-->
  <meta name="viewport" content=" width=devide-width, initial-scale=1.0">

  <!-- CSS -->
  <link rel="stylesheet" href="./styles/global.css">
  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@500;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <h1>Simulador de Investimentos</h1>
    <form id="formJuros" method="post" action="#" enctype="multipart/form-data">
      <label for="">Valor Investido (R$) </label>
      <input type="number" name="capital_inicial" step="any" onkeyup="if(this.value<0)this.value=1" onblur="if(this.value<0)this.value=1">

      <label for="">Prazo do Investimento (Meses)</label>
      <input type="number" name="meses" onkeyup="if(this.value<0)this.value=1" onblur="if(this.value<0)this.value=1">

      <label for="">Taxa de Juros Mensal (%)</label>
      <input type="number" name="taxa_de_juros" step="any">

      <button type="submit">Calcular</button>

      <?php
      jurosCompostos(floatval($_POST['capital_inicial']), floatval($_POST['meses']), floatval($_POST['taxa_de_juros']));
      ?>
    </form>
  </div> <!-- /container -->
</body>

</html>