<?php

use App\Controller\AnimalController;

$controller = new AnimalController();
$id = 1;

echo match($_GET['page']){
    'home' => $controller->displayAnimals(),
    'animal-available' => $controller->displayAvailableAnimal(),
    'animal' => $controller->getOneAnimal($id),
};

/* $id = 1;

$routes = [
    "home" => ["controller" =>"AnimalController", "method" => "displayAnimals"],
    "animal" => ["controller" =>"AnimalController", "method" => "getOneAnimal", "param" => ["id" => $id]],
    "animal-available" => ["controller" => "AnimalController", "method" => "displayAvailableAnimal"],
];

$case = $routes[$_GET["page"]];
$caseController = "App\Controller\\".$case["controller"];
$controller = new $caseController();
$method = $case["method"];

$param = null;
if (isset($case["param"])) {
    $param = $case["param"];
}

$controller->$method($param); */