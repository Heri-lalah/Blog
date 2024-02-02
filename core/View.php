<?php
namespace Core;

class View
{

    public function __construct(private string $viewPath, private ?array $params)
    {
    }

    public function view()
    {
        ob_start();

        extract($this->params);

        require BASE_VIEW_PATH . $this->viewPath . '.php';

        return ob_get_clean();
    }

    public static function render(string $view, ?array $params=null)
    {

        echo  new static($view, $params);

    }

    public function __toString()
    {
        return $this->view();
    }
}