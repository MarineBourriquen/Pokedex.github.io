<?php

class Type
{
    //==============================
    // Propriétés
    //==============================

    protected $id;
    protected $name;
    protected $color;

    //==============================
    // Méthodes
    //==============================
    public function find( $id )
    {
      
      $pdo = Database::getPDO();
      $sql = "SELECT * FROM `type` WHERE `id` = " . $id;
      $statement = $pdo->query( $sql );

      $resultObject = $statement->fetchObject( "Type" );
      // var_dump( $resultObject );
 
      return $resultObject;
    }

   
    public function findAll()
    {
      $pdo = Database::getPDO();
      $sql = "SELECT * FROM `type`";
      $statement = $pdo->query( $sql );

      $results = $statement->fetchAll( PDO::FETCH_CLASS, "Type" );

      return $results;
    }

    public function getPokemon($id)
    {
      $pdo       = Database::getPDO();

      $sql = "SELECT * FROM `pokemon`
      INNER JOIN `pokemon_type` ON `pokemon`.`number`=`pokemon_number`
      WHERE `type_id` = " . $id;

      $statement = $pdo->query( $sql );
      
      $results   = $statement->fetchAll( PDO::FETCH_CLASS, "Pokemon" );

      return $results;
    }

    //==============================
    // Getters / Setters
    //==============================

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}