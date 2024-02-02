<?php
namespace Core;

class Model extends Database
{
    protected static string $table = "";

    public function __construct()
    {
        static::$table = strtolower(explode("\\", get_class($this))[2]) . "s";
    }

    public static function All()
    {

        $statement = static::getPdo()->query("SELECT * FROM " . static::$table);

        return $statement->fetchAll();
    }
}