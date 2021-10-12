<?php

namespace App\Manager;

use App\Entity\Animal;
use Vendor\Manager\Manager;

//CRUD
class AnimalManager extends Manager
{

    protected $db;
    protected $table = "Animal";

    public function create($animal)
    {
        $st = "INSERT INTO Animal(nom, description, status) VALUES (:nom, :description, :status)";

        $prepare = $this->db->prepare($st);
        $prepare->bindValue(":nom", $animal->getNom());
        $prepare->bindValue(':description', $animal->getDescription);
        $prepare->bindValue(":status", $animal->getStatus());

        $prepare->execute();
    }

    public function getOne(int $id)
    {
        $st = "SELECT * FROM Animal WHERE id = :id";
        $prepare = $this->db->prepare($st);
        $prepare->bindValue(':id', $id);

        $prepare->execute();
    }

    // Update
    public function update(int $id, Animal $animal)
    {
        $st = "UPDATE FROM Animal SET nom = :nom, description = :description, status = :status WHERE id = :id";

        // Temp set for the update
        $prepare = $this->db->prepare($st);
        $prepare->bindValue(':nom', $animal->setNom('Nom'));
        $prepare->bindValue(':description', $animal->setDescription('Test'));
        $prepare->bindValue(':status', $animal->setStatus(1));
        $prepare->bindValue(':id', $id);

        $prepare->execute();
    }
    
    // Delete
    public function delete(int $id)
    {
        $st = "DELETE FROM Animal WHERE id = :id";

        $prepare = $this->db->prepare($st);
        $prepare->bindValue(":id", $id);

        $prepare->execute();
    }
}