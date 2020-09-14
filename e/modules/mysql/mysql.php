<?php

/**
 * Kapcsolódási adatok: /e/credentials/mysql.php
 * További beállítások: /e/config/mysql.php
 */

include('e/credentials/mysql.php');
include('e/config/mysql.php');

/**
 * Az adatbáziskapcsolat létrehozása
 * 
 */
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


/**
 * Az adatbázis-kapcsolat karakterkódolásának ellenőrzése
 * és szükség esetén megváltoztatása a megfelelőre.
 */
if($mysqli->character_set_name() != $db_charset) {
  if (!$mysqli->set_charset($db_charset)) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
    exit();
  }
}



?>