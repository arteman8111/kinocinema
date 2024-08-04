<?php
// Юзать нужно только <?php в подобных файлах

// Пространство имен для импорта
namespace App;

// Достаем класс Роутер для работы маршрутизации
use App\Router\Router;

class App
{
    public function run(): void
    {
        $router =  new Router();
        
        $uri = $_SERVER['REQUEST_URI'];

        $router->dispatch($uri);
    }
}
