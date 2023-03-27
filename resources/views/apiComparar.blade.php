<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Covid Info</title>
  <link rel="icon" type="image/x-icon" href="https://www.un.org/sites/un2.un.org/files/2020/04/covid-19.svg">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/comparar.css')}}">

</head>

<main>

  <div class="topnav">
    <a class="active" href="http://127.0.0.1:8000/main">Inicio</a>
    <a href="http://127.0.0.1:8000/comparar">Compare</a>
    <a href="#about">Sobre</a>
  </div>




  <div class="compare-result">
            <ul class="compare-list">
                <li><strong>Pais 1:</strong> {{ $data['$primeiroPais'] }}<li>
                <li><strong>Media:</strong> {{ sprintf('%0.2f', $data['$primeiroPaisMedia']) }}%</li>
                <li><strong>Pais 2:</strong> {{ $data['segundoPais'] }}</li>
                <li><strong>Media:</strong> {{ sprintf('%0.2f', $data['$segundoPaisMedia']) }}%</li>
                <li><strong>Resultado:</strong> {{ sprintf('%0.2f', $data['resultado']) }}%</li>
            </ul>
        </div>






</main>







</html>