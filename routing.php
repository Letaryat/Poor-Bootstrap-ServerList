<?php
include('app/ext/AltoRouter.php');

$router = new AltoRouter();
$router->setBasePath('/poor-bootstrap-serverlist');

$router->map('GET', '/','/app/controllers/index.php', 'index');
$router->map('GET', '/index.php','/app/controllers/index.php', 'index1');
$router->map('GET', '/index','/app/controllers/index.php', 'index2');
$router->map('GET', '/server/[i:id]', '/app/controllers/serverinfo.php','serverinfo' );
$match = $router->match();



if($match) {
    $target = $match["target"];
    if(strpos($target, "#") !== false) { 
        list($controller, $action) = explode("#", $target);
        $controller = new $controller;
        $controller->$action($match["params"]);
    } else { 
        if(is_callable($match["target"])) {
            call_user_func_array($match["target"], $match["params"]); 
        }else{
            require BaseDIR.$match["target"]; 
            //require $_SERVER['DOCUMENT_ROOT'].$match["target"]; 
        }
    }
} else {
    //echo "Jeblo kurwa" . __DIR__;
    require('app/views/errors/404.php');
    

}


?>