<?php

namespace Vendor\Manager;

use App\Entity\Animal;
use Vendor\Database\Database;
use Vendor\Interfaces\GlobalInterface;
use Vendor\Interfaces\ManagerInterface;

abstract class Manager implements ManagerInterface, GlobalInterface
{

    protected $db;
    protected $table;

    public function __construct()
    {
        $db = new Database();
        $this->db = $db->getPdo();
    }

    // public abstract function create($article);

    // Fetch the data from the database
    //#[return array]
    public function getList()
    {
        $query = $this->db->query("SELECT * FROM $this->table");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\" . ucfirst($this->table));
    }

    public function listOnlyAvailable()
    {
        $query = $this->db->query("SELECT * FROM $this->table WHERE status = 1");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\" . ucfirst($this->table));
    }

    public function listLast10()
    {
        $query = $this->db->query("SELECT * FROM (SELECT * FROM $this->table ORDER BY id DESC LIMIT 10)var ORDER BY id ASC");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\" . ucfirst($this->table));
    }

    // #[return object]
    public function getOne(int $id)
    {   
        $query = $this->db->query("SELECT * from $this->table WHERE id = $id");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\" . ucfirst($this->table));
    }

    public  function update(int $id, Animal $animal)
    {
        $query = $this->db->query("UPDATE $this->table set nom =:nom, description = :description, status = :status WHERE id = :id" );
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\" . ucfirst($this->table));
    }

    public function delete(int $id)
    {
        $query = $this->db->query("DELETE FROM Animal WHERE id = :id");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\" . ucfirst($this->table));
    }
}
