<?php  

require_once './classes/User.php';
require_once './classes/Film.php';
require_once './classes/Salle.php';
require_once './classes/Projection.php';


// create users:
$admin_1 = new User('isam chajia', '@email.com', 18, 'admin');
$client = new User('isam chajia', '@email.com', 18);

// create films:
$film_1 = Film::addFilm('hello', 'horor','01:25:42', $admin_1->getRole());
$film_2 = Film::addFilm('cv', 'drama','00:05:42', $admin_1->getRole());
$film_3 = Film::addFilm('bien', 'comedie','02:05:42', $admin_1->getRole());

// create salles:
$salle_1 = Salle::addSalle('room_1', 45, $admin_1->getRole());
$salle_2 = Salle::addSalle('room_2', 50, $admin_1->getRole());
$salle_3 = Salle::addSalle('room_3', 40, $admin_1->getRole());


// create projection :
$proj_1 = new Projection('05:15:25', '06:15:25', $film_1, $salle_1);
$proj_2 = new Projection('07:15:25', '08:15:25', $film_2, $salle_1);
$proj_3 = new Projection('07:50:25', '09:15:25', $film_3, $salle_1);



// delete film:
if ($film_1->deleteFilm($admin_1->getRole())) {
  echo '<hr>';
  echo 'delet '.$film_1->getTitle().' successfuly';
}


// // display films:
// echo '<pre>';
// print_r(Film::$films);
// echo '</pre>'; 


// display salles :
// echo '<pre>';
// print_r(Salle::$Salles);
// echo '</pre>'; 

// display  projection:
echo '<pre>';
print_r(Projection::$Projections);
echo '</pre>'; 






