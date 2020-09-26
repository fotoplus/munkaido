<?php

require_once ('e/config/config.php');
require_once ('e/modules/mysql/mysql.php');
require_once ('e/modules/auth/auth.php');

define("PAGES", "e/pages/");
$page = array();
$page['name'] = isset( $_REQUEST['page'] ) ? $_REQUEST['page'] : 'home';


?>
<!doctype html>
<html class="no-js" lang="hu">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="styles/vendor/normalize/normalize.css">
    <link rel="stylesheet" href="styles/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="styles/vendor/reset/reset.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="styles/master.css">

    <link rel="stylesheet" href="styles/<?php print $page['name']; ?>.css">

    <title>Fotoplus</title>
    <meta name="description" content="Weboldal">

  </head>

  <body>

    <?php

    $page['file'] = $page['name'] . '.php';

    if( file_exists( PAGES . $page['file'] ) ) {

      include ( PAGES . $page['file']);

    } else {

      include (  PAGES . 'e404.php');
    }



    ?>

    <!-- Scriptek -->  
      <script src="js/vendor/jquery/jquery-3.5.1.min.js"></script>
      <script src="js/vendor/bootstrap/bootstrap.min.js"></script>
      <script src="js/vendor/modernizr/modernizr-custom.js"></script>

      <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Scriptek (vége) -->

  </body>
</html>
<?php

?>