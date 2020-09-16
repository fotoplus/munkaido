<?php

require_once ('e/config/config.php');
require_once ('e/modules/mysql/mysql.php');
require_once ('e/modules/auth/auth.php');


?>
<!doctype html>
<html class="no-js" lang="hu">

  <head>

    <meta charset="utf-8">

    <title>Munkaidő nyilvántartás</title>
    <meta name="description" content="Online munkaidőnyilvántartás">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="styles/normalize/normalize.css">
    <link rel="stylesheet" href="styles/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="styles/reset/reset.css">

    <link rel="stylesheet" href="styles/master.css">

  </head>

  <body>

    <?php

    include ('e/pages/auth/login.php');

    ?>

    <!-- Scriptek -->  
      <script src="js/modernizr/modernizr-custom.js"></script>
      <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Scriptek (vége) -->

  </body>
</html>
<?php

?>