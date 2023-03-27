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



  <section class="apiComparar">
    <form id="form-compare-countries" method="get" action="{{route('apiComparar')}}">
      <label>Comparar paises:</label>
      <select name="primeiro" class="pais1">
        @foreach ($PaisesArray as $Paises)
        <option value={{str_replace(" ", "_", $Paises)}} style="cursor: pointer;">{{ $Paises }}</option>
        @endforeach
      </select>
      <select name="secondCountry" class="pais2">
        @foreach ($PaisesArray as $Paises)
        @if($loop->index == 1)
        <option selected value={{str_replace(" ", "_", $Paises)}} style="cursor: pointer;">{{ $Paises }}</option>
        @else
        <option value={{str_replace(" ", "_", $Paises)}} style="cursor: pointer;">{{ $Paises }}</option>
        @endif
        @endforeach
      </select>
      <input type="submit" value="Get info" />
    </form>
  </section>




</main>

</html>