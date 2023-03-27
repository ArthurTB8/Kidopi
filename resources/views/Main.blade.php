
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/Main.css')}}">

    
  </head>


  <body>

  <div class="topnav">
  <a class="active" href="http://127.0.0.1:8000/main">Inicio</a>
  <a href="http://127.0.0.1:8000/comparar">Compare</a>
  <a href="#about">Sobre</a>
  </div>

  <div class="container">

  <div class="bandeiras"><a href="http://127.0.0.1:8000/pais=Brasil"><img src="{{ URL('img/bandeira-brasil.jpg') }}" alt="Bandeira Brasil"</a></div> 

  <div class="bandeiras"><a href="http://127.0.0.1:8000/pais=Australia"><img src="{{ URL('img/bandeira-australia.png') }}" alt="Bandeira Australia"</a></div>

  <div class="bandeiras"><a href="http://127.0.0.1:8000/pais=Canada"> <img src="{{ URL('img/bandeira-canada.png') }}" alt="Bandeira Canada"</a></div>

  </div>





 


  </body>
</html>

