<?php

namespace Core;

use PDO;
use Core\Constant;

class Database
{

    protected static \PDO $pdo;

    public static function getPdo() : \PDO

    {

        try{
            static::$pdo = new PDO('mysql:dbname=' . Constant::DB_NAME . ';host=' . Constant::DB_HOST,
            Constant::DB_USER_NAME,
            Constant::DB_PASSWORD,
            [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
        }catch(\PDOException $exception){
            echo $exception->getMessage();
        }

        return static::$pdo;
    }
}