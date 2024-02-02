<?php

namespace Core;

trait ClassInstanceTrait
{
    public static $instance = null;

    public static function getInstance()
    {
        if(static::$instance== null)
        {
            return static::$instance = new static();
        }

        return static::$instance;

    }
}