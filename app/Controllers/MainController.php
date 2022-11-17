<?php

  class MainController
  {
    public function home()
    {
        $pokemonModel = new Pokemon();
        $pokemonAll = $pokemonModel->findAll();
        $this->show( 'home', ["pokemonAll" => $pokemonAll] );
    }

    public function detail($params)
    {
        $pokemonModelBis = new Pokemon();
        $pokemonById = $pokemonModelBis->find($params['number']);
        $typeByPokemon = $pokemonById->getTypes();
        // $typeByPokemon = $pokemonModelBis->getType($params['number']);
        $this->show( 'detail', ["pokemonById" => $pokemonById, "typeByPokemon" => $typeByPokemon]);
    }

    public function type ()
    {
      $typeModel = new Type ();
      $typeAll = $typeModel->findAll();
      $this->show('type', ["typeAll" => $typeAll]);

    }

    public function pokemonType($params)
    {
      $pokemonModelTer = new Type();
      $pokemonByType = $pokemonModelTer->getPokemon($params['id']);
      $this->show('pokemonType', ["pokemonByType" => $pokemonByType]);
    }

    public function show( $viewName, $viewData = [] )
    {
      
      global $router;

      extract( $viewData );

      $absoluteURL = $_SERVER['BASE_URI'];
      
     //d( get_defined_vars() );

      require_once __DIR__ . '/../views/partials/header.tpl.php';

      require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';

      require_once __DIR__ . '/../views/partials/footer.tpl.php';
    }

  }