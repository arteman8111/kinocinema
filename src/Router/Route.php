<?php

class Route
{

    // PHP8 Объявляем прям в конструкторе переменные
    public function __construct(
        private string $uri,
        private string $method,
        private $action
    )
    {}
    
    public function getUri(): string
    {
        return $this->uri;
    }

    public function getAction(): callable
    {
        return $this->action;
    }

    public function getMethod(): string
    {
        return $this->method;
    }
}