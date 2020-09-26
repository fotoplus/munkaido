<?PHP

/**
 * 
 * 
    $page = array();
    $page['name'] = isset( $_REQUEST['page'] ) ? $_REQUEST['page'] : 'home';

    print


 */




 class ParseURI {

  public $segments;

  function __construct() {
    $_SERVER['REQUEST_URI_PATH'] = preg_replace('/\?.*/', '', $_SERVER['REQUEST_URI']);
    $segments = explode('/', trim($_SERVER['REQUEST_URI_PATH'], '/'));
    $segments = array_slice ($segments, URI_IGNORE);
    print_r($segments);

  }
  

  function is_page() {

  }

  function open_page () {

  }

 }


 $page=new ParseURI(URI_IGNORE);



die();

?>