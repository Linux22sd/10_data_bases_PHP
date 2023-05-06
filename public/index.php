<?php

require("../vendor/autoload.php");

use Router\RouterHandler;
use App\Controllers\IncomesController;
use App\Controllers\WithdrawController;

// obtener urls

$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);

$pos0 = $slug[0] == "" ? "/" : $slug[0];
$pos1 = $slug[1] ?? null;
$pos2 = $slug[2] ?? null;
 
    // get instancia del router
$router = new RouterHandler();

switch($pos0){

    case "/" :
        require("../resouces/views/home/cartera.php");
        break;


        
    case "menu-incomes" :
        require("../resouces/views/incomes/menu_incomes.php");
        break;
    case "incomes" :
        $method = $_POST['method'] ?? "get";
        $router->set_method($method);
        $router->set_data($_POST);
        $router->route(IncomesController::class, $pos1);
        break;



    case "m_withdraw" :
        require("../resouces/views/incomes/incomes_menu.php");
        break;    
    case "withdraw" :
        $method = $_POST['method'] ?? "get";
        $router->set_method($method);
        $router->set_data($_POST);
        $router->route(WithdrawController::class, $id);
        break;
        
    default :
        echo "404 Pagina no encontrada";
}

