<?php

namespace Core;

use PDO;

class Database
{

    protected static \PDO $pdo;

    private function __construct()
    {
        try{
            static::$pdo = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_HOST,
            DB_USER_NAME,
            DB_PASSWORD,
            [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
        }catch(\PDOException $exception){
            echo $exception->getMessage();
        }
    }

    public function getPdo() : \PDO
    {
        new Database();

        return static::$pdo;
    }
}