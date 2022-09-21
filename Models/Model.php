<?php

namespace Models;

use Source\Constants;

class Model
{
    protected static \PDO $pdo;

    public function __construct()
    {
        try {
            static::$pdo = new \PDO('mysql:dbname=' . Constants::DB_NAME . ';host=' . Constants::DB_HOST . '', Constants::DB_USERNAME, Constants::DB_PASSWORD, [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
        } catch (\PDOException $e) {
            $e->getMessage();
            die();
        }
    }
    public function all(): array
    {
        $statement =  $this->getPDO()->query("SELECT * FROM {$this->table}");
        return $statement->fetchAll();
    }

    protected function getPDO(): \PDO
    {
        return static::$pdo;
    }
}
