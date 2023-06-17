<?php

require 'connection.php';
class Router
{
    public $routes = [];
//    public function __construct()
//    {
//        $this->routes[];
//    }

public function get($uri,$action)
{
    $this->routes[] =[
        'uri' => $uri,
        'action' => $action,
        'method' => 'GET'
    ];
}

}