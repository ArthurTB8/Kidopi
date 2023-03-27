<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="{{ asset('css/Australia.css')}}">

    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap"
      rel="stylesheet"
    />
  
  </head>
  <body>

  <div>

  @foreach ($AustraliaArray as $Australia)


  <p>
  {{$Australia->Pais}}<br>
  Estado:
  {{$Australia->ProvinciaEstado}}<br>
  Casos:
  {{$Australia->Confirmados}}<br>
  Mortos:
  {{$Australia->Mortos}}


  @endforeach

  </div>
 

   
  </body>
</html>
