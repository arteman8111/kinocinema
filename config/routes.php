<?php
// Делаем маршрутизацию через php с одного индекса
// Записываем в массив routes.php все пути файлов
return [
    '/home' => function () {
        include_once APP_PATH . '/views/pages/home.php';
    },
    '/movies' => function () {
        include_once APP_PATH . '/views/pages/movies.php';
    },
];
