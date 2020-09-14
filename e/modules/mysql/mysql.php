<?php

include('e/credentials/mysql.php');

$mysqli = new mysqli(
    $mysql['host'], // Az adatbázis címe, jellemzően "localhost"
    $mysql['user'], // Felhasználóinév
    $mysql['password'], // Jelszó
    $mysql['db'] // A hasznáűlni kívánt adatbáis
  );

/*
 * Ez lenne a "hivatalos" megoldás a kapcsolat ellenőrzésére,
 * viszont a PHP 5.2.9 verziója alatt nem igazán működik.
 */
if ($mysqli->connect_errno) {
  echo "Sikertelen kapcsolódás az adatbázishoz: " . $mysqli->connect_error;
  exit();
}



?>