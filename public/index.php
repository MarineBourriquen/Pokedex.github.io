<?php


  require_once __DIR__ . "/../vendor/autoload.php";

  // Inclure les classes de Database
  require_once __DIR__ . "/../app/utils/Database.php";

  // Inclure les classes de Controllers
  require_once __DIR__ . "/../app/Controllers/MainController.php";

  // Inclure les classes de Models
  require_once __DIR__ . "/../app/Models/Pokemon.php";
  require_once __DIR__ . "/../app/Models/Type.php";

  //=========================
  // Routes
  //=========================

  $router = new AltoRouter();

  $router->setBasePath( $_SERVER['BASE_URI'] );

  // Route home renvoyant vers tous les pokémons
  $router->map("GET", "/", ["controller" => "MainController", "method" => "home"], "main-home");

  // Route détail renvoyant vers le détail d'un pokémon
  $router->map("GET", "/detail/[i:number]", ["controller" => "MainController", "method" => "detail"], "main-detail");

  // Route type renvoyant vers la liste des types
  $router->map("GET", "/type", ["controller" => "MainController", "method" => "type"], "main-type");

  // Route type renvoyant vers la liste des Pokémons par types
  $router->map("GET", "/type/[i:id]", ["controller" => "MainController", "method" => "pokemonType"], "main-pokemonType");

  
  $match = $router->match();
  // var_dump($match);

  //=========================
  // Dispatcher
  //=========================

  if( $match !== false )
  {
    $routeData = $match['target'];

    $controllerName = $routeData['controller'];
    $methodToCall   = $routeData['method'];

    $controller = new $controllerName(); 
    $controller->$methodToCall( $match['params'] ); 
  }
  else
  {
    http_response_code( 404 );
    exit( "404 Not Found" );
  }


