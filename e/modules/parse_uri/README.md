# Az URL-ek

---


Külön köszönet [Markus Wulftange](@mwulftange)nek, Németországból a mod_reqrite modul használatának leegyszerűsítésének megoldásáért.

~~~
# htaccess
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule !^index\.php$ index.php
~~~

~~~php
# php
$_SERVER['REQUEST_URI_PATH'] = preg_replace('/\?.*/', '', $_SERVER['REQUEST_URI']);
$segments = explode('/', trim($_SERVER['REQUEST_URI_PATH'], '/'));
var_dump($segments);
~~~

Forrás: https://stackoverflow.com/a/659008

