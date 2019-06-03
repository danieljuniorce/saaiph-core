<?php
namespace Saaiph;

use Saaiph\Router\Router;

class Saaiph
{
    public function __construct($filename, bool $user_namespace, string $namespace_controller = '')
    {
        //Inicializando o Router
        if ($user_namespace === true) {
            new Router($filename, $user_namespace, $namespace_controller);
        }
    }
}