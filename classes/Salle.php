<?php 



class Salle {

  private $id;
  private $name;
  private $capacite;

  private static $lastId = 1; 
  public static $Salles = [];
  


  // construct :
  private function __construct($name, $capacite)
  {

    // if ($role == 'admin') {
      $this->id = self::$lastId++;
      $this->name = $name;
      $this->capacite = $capacite;
      $this::$Salles [] = $this;
      // $this::$Salles [] = ['name' => $this->name, 'capacite' => $this->capacite];

    // }

  }

  // methods:
  public function displaySalle (){
    return 
    ['name' => $this->name, 
    'capacite' => $this->capacite];
  }


  public static function addSalle ($name, $capacite, $userrole){
    if ( $userrole == 'admin' ) {
      return new Salle($name, $capacite);
    }

  }


  public function  updateSalle($name, $capacite, $userrole){
    if ( $userrole == 'admin' ) {
      $this->name = $name;
      $this->capacite = $capacite;
    }

  }


  public function  deleteSalle($userrole){

    if ( $userrole == 'admin' ) {
      // delet :
      $deleteIndx = array_search($this, self::$Salles);
      unset(self::$Salles[$deleteIndx]);

      return true;
    }else{
      return false;
    }

  }


}

