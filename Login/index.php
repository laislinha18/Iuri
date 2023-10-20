<?php

include __DIR__ . '/router.php';

//obtendo a rota
$uri = isset($_SERVER['REQUEST_URI']) ? 
    $_SERVER['REQUEST_URI'] :
    null;

if ($uri) {
    $request = explode('?',$uri);
}


if (array_key_exists($request[0], $rotas)) {
    include __DIR__ . $rotas[$request[0]];
} else {
    
    http_response_code(404);
    include __DIR__ . '/pages/404.php';
    
}

