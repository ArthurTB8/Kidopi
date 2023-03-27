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


  @foreach ($primeiroPaisVar as $pais1)


  <p>
    {{$pais1->Pais}}<br>
    Casos:
    {{$pais1->Confirmados}}<br>
    Mortos:
    {{$pais1->Mortos}}
  </p>


  @endforeach

  @foreach ($segundoPaisVar as $pais2)


  <p>
    {{$pais2->Pais}}<br>
    Casos:
    {{$pais2->Confirmados}}<br>
    Mortos:
    {{$pais2->Mortos}}
  </p>


  @endforeach

  <div>
    <P>
      {{ sprintf('%0.2f', $data['firstCountryRate']) }}%
    </P>
  </div>

  <div class="compare-result">
    <ul class="compare-list">
      <li><strong>Pais 1:</strong> {{ $pais1 }}
      <li><strong>Media:</strong> {{ sprintf('%0.2f',$mediaPais1 ) }}%</li>
      <li><strong>Pais 2:</strong> {{ $pais2 }}</li>
      <li><strong>Media:</strong> {{ sprintf('%0.2f', $mediaPais2) }}%</li>
      <li><strong>Pais teve a diferenca de </strong> {{ sprintf('%0.2f', $mediaPais1 - $mediaPais2 ) }}%</li>
    </ul>
  </div>







</main>







</html>