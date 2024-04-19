<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

 require '../app/core/init.php';

$controller = $_GET['page_name'] ?? 'home';
$controller= strtolower($controller);
if(isset($_GET['page_name'])){
    $controller = $_GET['page_name'];
}
if(file_exists("../app/controllers/".$controller. ".php"))
{
    require "../app/controllers/".$controller. ".php";
}
else 
{
    echo "no controller found";
}


