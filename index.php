<?php 

require('app/ext/functions.php');
include('app/ext/SourceQuery/bootstrap.php');
include('config.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('BaseDIR', __DIR__);

define('BaseURL', BasicURL());

define('BasePath', UriExplode($_SERVER['PHP_SELF']));

define ('Assets', 'app\assets');

define ('Partials', 'app\partials');

require_once(Partials . '/head.php');
require('routing.php');
require_once(Partials . '/footer.php');

?>