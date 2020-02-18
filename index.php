<?php

//Prend en charge les controleurs
foreach (glob(__DIR__."/controllers/*.php") as $filename)
{
    include_once $filename;
}

//Prend en charge les classes
foreach (glob(__DIR__."/classes/*.php") as $filename)
{
    include_once $filename;
}


$request = explode('/', $_SERVER['REQUEST_URI'])[2];

switch ($request) {
    case '' :
        $controller = new HomeController();
        break;

    case 'product':
        $id = explode('/', $_SERVER['REQUEST_URI'])[3];
        $controller = new ProductController($id);
        break;

    case 'ncis':
        $controller = new NcisController();
        break;

    default:
        http_response_code(404);
        echo '404';
        break;
}

