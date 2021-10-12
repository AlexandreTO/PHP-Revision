<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Manager\AnimalManager;
use Vendor\Controller\DefaultController;

class AnimalController extends DefaultController
{
    public function __construct()
    {
        $this->manager = new AnimalManager;
    }

    // Display the last 10 animals
    public function displayAnimals()
    {
        $animals = $this->manager->listLast10();
        $this->render('indexView', ['animals' => $animals]);
    }

    // Display the available animals
    public function displayAvailableAnimal()
    {
        $animals = $this->manager->listOnlyAvailable();
        $this->render('availableAnimal', ['animals' => $animals]);
    }

    // Check animal info
    public function getOneAnimal(int $id)
    {
        $animal = $this->manager->getOne($id);
        $this->render('oneAnimal', ['animal' => $animal]);
    }
}
