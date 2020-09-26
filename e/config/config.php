<?php

/**
 * PHP hibakijelzés
 * 
 *  error_reporting [integer]
 * 
 *    Set the error reporting level. The parameter is either an integer representing a bit field,
 *    or named constants. The error_reporting levels and constants are described in Predefined Constants, 
 *    and in php.ini. To set at runtime, use the error_reporting() function. See also the display_errors
 *    directive. PHP 5.3 or later, the default value is E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED. 
 *    This setting does not show E_NOTICE, E_STRICT and E_DEPRECATED level errors. You may want to show 
 *    them during development. Prior to PHP 5.3.0, the default value is E_ALL & ~E_NOTICE & ~E_STRICT. 
 * 
 * Bővebben: https://www.php.net/manual/en/errorfunc.configuration.php
 */

 #error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
 error_reporting(E_ALL);
 ini_set("display_errors", 1); 

?>