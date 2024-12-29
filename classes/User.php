<?php  




class User {

  private $id;
  private $fullname;
  private $email;
  private $password;
  private $age;
  private $role; // (client, admin , projection admin, reservation admin)


  // construct:
  public function __construct($fullname, $email, $age, $role = 'client')
  {
    $this->fullname = $fullname;
    $this->email = $email;
    $this->age = $age;
    $this->role = $role;    
  }



  // geters & seters :
  public function getRole(){
    return $this->role;
  }

  public function setRole($role){
    $this->role = $role;
  }









  // methodes
  public function register($fullname, $email, $password, $age, $role) {

    $this->fullname = $fullname;
    $this->email = $email;
    $this->password = $password;
    $this->age = $age;
    $this->role = $role;

    // send info to database :


  }


  public function login($email, $password) {

    $this->email = $email;
    $this->password = $password;

    // check database for this email and pass :
  }




}

