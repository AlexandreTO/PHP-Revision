<?php

namespace Vendor\Database;

class Database
{
    // Initialisation de la base de donnée locale
    private $dbUser = "alexandre";
    private $dbPass = "root";
    private $host = "localhost";
    private $dbName = "phpIpssi";
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->dbName", $this->dbUser, $this->dbPass, [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
    }

    /**
     * Méthode magique appelée à la destruction de la classe
     *
     * @return void
     */
    public function __destruct()
    {
        $this->pdo = null;
    }

    public function getPdo()
    {
        try {
            return $this->pdo;
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}
