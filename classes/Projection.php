<?php 



class Projection {

  private $id;
  private $dateStart;
  private $dateEnd;
  private Film $filme;
  private Salle $salle;

  private static $lastId = 1; 
  public static $Projections = [];

  // consruct :
  public function __construct($dateStart, $dateEnd, $filme , $salle) {


    $startTime = strtotime($dateStart);
    $endTime = strtotime($dateEnd);
    
    $exist = false;
      
    foreach ( self::$Projections as $projection ) {
      
      $projectionStart = strtotime($projection->getDateStart());
      $projectionEnd = strtotime($projection->getDateEnd());

      if ($projection->getSalle() == $salle && 
        $startTime < $projectionEnd &&
        $endTime > $projectionStart
      ) {
        $exist = true;
        break;
      }

    }

    if (!$exist) {
      $this->id = self::$lastId++;
      $this->dateStart = $dateStart;
      $this->dateEnd = $dateEnd;
      $this->filme = $filme;
      $this->salle = $salle;
      $this::$Projections [] = $this;
    }else{
      echo "err time". $dateStart . ' - ' . $dateEnd;
    }
    
  }
  

  
  public function getDateStart() {
    return $this->dateStart;
  }

  public function getDateEnd() {
      return $this->dateEnd;
  }

  public function getFilme() {
      return $this->filme;
  }

  public function getSalle() {
      return $this->salle;
  }



  // display projection ;
  public function displayProjection(){
    return $this;
  }





}

