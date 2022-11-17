<?php

class Pokemon
{
    //==============================
    // Propriétés
    //==============================

    private $id;
    private $name;
    private $hp;
    private $attack;
    private $defense;
    private $spe_attack;
    private $spe_defense;
    private $speed;
    private $number;

    //==============================
    // Méthodes
    //==============================
    public function find( $id )
    {
      
      $pdo = Database::getPDO();
      $sql = "SELECT * FROM `pokemon` WHERE `number` = " . $id;
      $statement = $pdo->query( $sql );

      $resultObject = $statement->fetchObject("Pokemon");
      // var_dump( $resultObject );
 
      return $resultObject;
    }

   
    public function findAll()
    {
      $pdo = Database::getPDO();
      $sql = "SELECT * FROM `pokemon`";
      $statement = $pdo->query( $sql );

      $results = $statement->fetchAll( PDO::FETCH_CLASS, "Pokemon");

      return $results;
    }

    public function getTypes()
    {
      $pdo       = Database::getPDO();
      $statement = $pdo->query( "SELECT * FROM `type`
      INNER JOIN `pokemon_type` ON `type`.`id`=`type_id`
      WHERE `pokemon_number` = " . $this->getNumber() );
      $results   = $statement->fetchAll( PDO::FETCH_CLASS, "Type" );
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
     * Get the value of hp
     */ 
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set the value of hp
     *
     * @return  self
     */ 
    public function setHp($hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get the value of attack
     */ 
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Set the value of attack
     *
     * @return  self
     */ 
    public function setAttack($attack)
    {
        $this->attack = $attack;

        return $this;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set the value of defense
     *
     * @return  self
     */ 
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get the value of spe_attack
     */ 
    public function getSpe_attack()
    {
        return $this->spe_attack;
    }

    /**
     * Set the value of spe_attack
     *
     * @return  self
     */ 
    public function setSpe_attack($spe_attack)
    {
        $this->spe_attack = $spe_attack;

        return $this;
    }

    /**
     * Get the value of spe_defense
     */ 
    public function getSpe_defense()
    {
        return $this->spe_defense;
    }

    /**
     * Set the value of spe_defense
     *
     * @return  self
     */ 
    public function setSpe_defense($spe_defense)
    {
        $this->spe_defense = $spe_defense;

        return $this;
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }


}