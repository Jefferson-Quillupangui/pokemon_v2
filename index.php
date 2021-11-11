<?php

  include './controlador.php';

?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Hola Mundo!</title>
  </head>
  <body>
   
    <main>
  <h1 class="visually-hidden">Pokemonv3</h1>

    <div class="b-example-divider"></div>

    <div class="container px-4 py-5" id="custom-cards">
      
    <h2 class="pb-2 border-bottom">Mundo Pokemon</h2><br>
    
    <div class="container">
      <div class="row">
        <div class="col">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>&nbsp;
              <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-filter"></i></i></button>
            </form><br>
          </div>

        <div class="col"></div>

      </div>
    </div>

    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <?php foreach ($data['pokemon_entries'] as $clave => $valor) { ?>
        <div class="feature col">
          
          <div class="feature-icon bg-primary bg-gradient">
            <img src="resource/pokemons/00<?php echo substr(str_repeat(0, 1).$valor['entry_number'], - 1); ?>.png" class="card-img-top" alt="...">
          </div>
          <h2><?php echo  $nombre =  $valor['pokemon_species']['name']." ";  ?></h2>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
          <a href="#" class="icon-link">
            Ver más
            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
          </a>

        </div>
      <?php } ?>
    </div>


    </div>
    <div class="b-example-divider"></div>

  </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>