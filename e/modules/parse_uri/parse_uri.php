<?PHP

/**
 * 
 * 
 * Special thanks for: 
 */


$_SERVER['REQUEST_URI_PATH'] = preg_replace('/\?.*/', '', $_SERVER['REQUEST_URI']);
$segments = explode('/', trim($_SERVER['REQUEST_URI_PATH'], '/'));
#var_dump($segments);
#print_r($segments);

die();

define("PAGES", "e/pages/");
$page = array();
$page['name'] = isset( $_REQUEST['page'] ) ? $_REQUEST['page'] : 'home';




?>