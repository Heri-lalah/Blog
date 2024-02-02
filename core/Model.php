<?php
namespace Core;

class Model extends Database
{
    protected string $table = "";

    public function __construct()
    {
        $this->table = strtolower(explode("\\", get_class($this))[2]) . "s";
    }

    public function all()
    {
        var_dump($this->getPdo());
        die();

        $statement = $this->getPdo()->query("SELECT * FROM {$this->table}");

        return $statement->fetchAll();
    }
}