<?php
namespace Core;

class Model extends Database
{
    protected string $table = "";
    private static string $query= "";
    private static $instance;

    public function __construct()
    {
        $this->table = strtolower(explode("\\", get_class($this))[2]) . "s";

        static::$query = "SELECT * FROM " . $this->table;
    }

    public static function All()
    {

        $statement = static::queryBuilder(static::$query);

        return $statement->fetchAll();
    }

    private static function queryBuilder(string $statement)
    {
        $instance = static::getInstance();

        return $instance::getPdo()->query($statement);
    }

    private static function getInstance()
    {
        if(!static::$instance)
        {
            static::$instance = new static();
        }

        return static::$instance;
    }
}