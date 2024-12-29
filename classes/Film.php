<?php 



class Film {

  private $id;
  private $title;
  private $genre;
  private $duree;

  private static $lastId = 1; 
  public static $films = [];


  // construct :
  private function __construct($title, $genre, $duree)
  {
    // if ($role == 'admin') {
      $this->id = self::$lastId++;
      $this->title = $title;
      $this->genre = $genre;
      $this->duree = $duree;
      
      $this::$films [] = $this;
    // }

  }

  public function getTitle(){
    return $this->title;
  }

  // methods:
  public function displayFilms (){
    return 
    ['title' => $this->title, 
    'genre' => $this->genre,
    'duree' => $this->duree];
  }


  public static function addFilm ($title, $genre, $duree, $userrole){
    if ( $userrole == 'admin' ) {
      return new Film($title, $genre, $duree);
    }

  }


  public function  updateFilm($title, $genre, $duree, $userrole){
    if ( $userrole == 'admin' ) {
      $this->title = $title;
      $this->genre = $genre;
      $this->duree = $duree;
    }

  }

  public function  deleteFilm($userrole){

    if ( $userrole == 'admin' ) {
      // delet :
      $deleteIndx = array_search($this, self::$films);
      unset(self::$films[$deleteIndx]);
      return true;
    }else{
      return false;
    }

  }



}

