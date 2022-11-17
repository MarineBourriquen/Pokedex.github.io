<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">-->

  <link rel="stylesheet" href="<?= $absoluteURL ?>/css/style.css">

  <title>Pokédex</title>
</head>

<body>
    <header>
        <div class="en_tete">
            <h1>Pokédex</h1>
            <nav class="navigation">
                <a href="<?= $router->generate( "main-home")?>">Liste</a>
                <a href="<?= $router->generate( "main-type")?>">Type</a>
            </nav>
        </div>

    </header>