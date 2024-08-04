<?php

// Используем пространство имен Router
namespace App\Router;

class Router
{
    public function dispatch(string $uri): void
    {
        // Маршрутизация по REQUEST_URI = /{uri}
        $routes = $this->getRoutes();
        // Вызов функии по ключу $routes
        $routes[$uri]();
    }

    private function getRoutes():array
    {
        return require_once APP_PATH . '/config/routes.php';
    }   
}
