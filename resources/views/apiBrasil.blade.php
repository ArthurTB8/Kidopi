<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="{{ asset('css/Brasil.css')}}">


  </head>
  <body>

  <div>

  @foreach ($BrasilArray as $Brasil)


  <p>
  {{$Brasil->Pais}}<br>
  Estado:
  {{$Brasil->ProvinciaEstado}}<br>
  Casos:
  {{$Brasil->Confirmados}}<br>
  Mortos:
  {{$Brasil->Mortos}}
  </p>
    

  @endforeach

  </div>
 

   
  </body>
</html>