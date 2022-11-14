<?php

function routes():array{
    return [
        '/'=> "",
        'app/views' => '',
        'app/views/dashboard ' => ''
    ];
}

function routerModule(){
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = routes();

if(array_key_exists($uri, $routes)){
    echo "Achou" . $uri;
}
    
}


?>