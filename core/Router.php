<?php
namespace Core;

class Router
{
    use ClassInstanceTrait;

    private array $routes = [];

    public static $instance = null;

    public function register(string $path, callable|array $action) : void
    {
        $this->routes[$path] = $action;
    }

    public function resolve(string $uri)
    {
        $path = $uri;

        $action = $this->routes[$path] ?? null;

        if(is_callable($action))
        {
            $action();
        }

        if(is_array($action))
        {
            [$className, $method] = $action;

            if(class_exists($className) && method_exists($className, $method))
            {
                $className = new $className();
                call_user_func_array([$className, $method],[]);

            }
        }
    }
}