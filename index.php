<?php 

// PHP - Les Variables
// EXERCICE 1 

// $name = 'Ayse';
// echo $name;

//  EXERCICE 2
// $lastName = 'Onal';
// $firstName = 'Ayse';
// $age = 18;

// echo $lastName . $firstName . $age ;

// EXERCICE 3

$km = 1;

$km = 3;

$km = 125;

// echo $km;

// EXERCICE 4

$string = 'string';
$int = 2;
$float = 3.1 ;
$boolean = true;

// echo $string . $int . $float . $boolean;

// EXERCICE 5

$int = 4;

// echo $int; 

$int = '';

// echo '<p>' . $int . '</p>';

// EXERCICE 6 

// $name = 'Simon';

// echo 'Bonjour ' . $name . ', comment vas tu ?';

// EXERCICE 7 

// echo 'Bonjour ' . $lastName . ' ' . $firstName . ' tu as ' . $age . ' ans.';

// EXERCICE 8 

$firstOperation = 3 + 4;
$secondOperation = 5 * 20;
$thirdOperation = 45 / 5;

// echo 'add ' . $firstOperation . ' ' . 'sub ' . $secondOperation . ' ' . 'div ' . $thirdOperation;





// PHP - Les Conditions
// EXERCICE 1 

// $age = 18;

// if ($age >= 18) {
  // echo 'Vous etes majeur';
// } else {
  // echo 'Vous etes mineur';
// }

// EXERCICE 2

$isEasy = false;

if (true) {
  // echo 'C\'est facile!!' ;
} else {
  // echo 'C\'est difficile!!!';
}

// EXERCICE 3

// $gender = 'homme';

// $age = 20;

// if ($gender && $age < 18) {
//   echo 'Vous êtes un(e) ' . $gender . ' et vous êtes mineur';
// } else if ($gender && $age >= 18) {
//   echo 'Vous êtes un(e) ' . $gender . ' et vous êtes majeur';
// };


// EXERCICE 4

$magnitude = 1;

switch ($magnitude) {
  case 1:
    // echo 'Micro-séisme impossible à ressentir.';
    break;

    case 2;
    // echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
}

// EXERCICE 5 

$gender = 'Homme';

if ($gender != 'Homme') {
  // echo 'C\'est une developpeuse !!!' ;
} else {
  // echo 'C\'est un developpeur !!!';
}


// EXERCICE 7

$isOk = true ;

// if ($isOk === false) {
//   echo 'C\'est pas bon !!!' ;
// } else {
//   echo 'C\'est ok !!';
// }


// PHP - Les Boucles
// EXERCICE 1 

$var = 0;

for($i = 0; $i <= 10; $i++) {
  // echo $var + $i;
}

// EXERCICE 2

// $firstNumber = 0;
// $secondNumber = 99;

// for($i = 0; $i < 20 ; $i++) {
//  $result = $firstNumber + $i ;
//  $finalResult = $result * $secondNumber;
//   echo $finalResult;
// }

// EXERCICE 3 
$firstNumber = 100;
$secondNumber = 99;

for($i = 10; $i > 0 ; $i -= 1 ) {
  $result = $firstNumber - $i ;
  $finalResult = $result * $secondNumber;
  //  echo $finalResult;
}

// PHP - Les Functions
// EXERCICE 1

$variable = true;

function isTrue ($var) {
  return true;
}

// echo isTrue($variable);


// EXERCICE 2 

// $string1 = ;

// $line = 'this is an exercise';

// function stringLine($string) {
//  echo $string = 'assh';
// }

// stringLine($line);


// EXERCICE 3 

// $textOne = 'hey';
// $textTwo = 'whatsupp';

// function stringLine($stringOne, $stringTwo) {
//   return $stringOne . $stringTwo ;
// }

// echo stringLine($textOne, $textTwo);


// EXERCICE 6 

function stringLine($lastName, $firstName, $age) {
//  echo 'Bonjour ' . $lastName .' '. $firstName . ' ,tu as ' . $age . ' ans'; 
}

 stringLine('Onal', 'Ayse', 18);

//  EXERCICE 7

$genre = 'femme';
$age = 18;
$e = 'e';

function genreAge($genre, $age, $e) {

    if ($age >= 18) {
      if ($genre === 'femme') {
        // echo 'Vous etes un'.$e.' '. $genre .' majeur';
      } else if ($genre === 'homme') {
        // echo 'Vous etes un '. $genre .' majeur';
      }
  } else {
    // echo 'Vous etes un'.$e.' '. $genre .' mineur';
  }
}

genreAge($genre, $age, $e);

// anniv

// $date = 2;

// for($i = 0; $i <= $date ; $i ++) {
//   if ($i < $date) {
//     echo 'Pas encore!';
//   } else if ($i === $date) {
//     echo 'Jour J';
//   } else if ($i >= $date) {
//     echo 'Trop tard !';
//   }
  
// }

// PHP - Les Tableaux
// EXERCICE



?>