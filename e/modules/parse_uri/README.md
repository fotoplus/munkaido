# Az URL-ek feldolgozása






~~~htaccess
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule !^index\.php$ index.php
~~~

~~~php
$_SERVER['REQUEST_URI_PATH'] = preg_replace('/\?.*/', '', $_SERVER['REQUEST_URI']);
$segments = explode('/', trim($_SERVER['REQUEST_URI_PATH'], '/'));
~~~



