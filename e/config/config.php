<?php

### MŰKÖDÉSI BEÁLLÍTÁSOK

/** PHP hibakijelzés
 *  https://www.php.net/manual/en/errorfunc.configuration.php
 */
 #error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
 error_reporting(E_ALL);
 ini_set("display_errors", 1); 

# A működési beállítások vége





### OLDAL BEÁLLÍTÁSOK

/** Az URI elejének figyelmenkívülhagyása > /e/modules/parse_uri
 * 
 *
 */
  define("URI_IGNORE", 4);


?>