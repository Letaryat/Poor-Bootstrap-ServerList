<?php 
function UriExplode($uri)
{
    $ex = explode("/", $uri);
    if(count($ex) === 3){
        $x = "/" . $ex[1] . "/";
        return $x;
        }
        elseif(count($ex) === 2){
            return "/";
        }
}

function BasicURL()
{
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    return UriExplode($uri);
}

function test(){
    echo "test";
}

?>