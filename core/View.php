<?php
namespace Core;

class View
{

    public function __construct(private string $viewPath)
    {
    }

    public function view()
    {
        ob_start();

        require BASE_VIEW_PATH . $this->viewPath . '.php';

        return ob_get_clean();
    }

    public static function render(string $view)
    {

        echo  new static($view);

    }

    public function __toString()
    {
        return $this->view();
    }
}