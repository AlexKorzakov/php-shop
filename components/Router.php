<?php

class Router
{
    private $routes;

    public function __construct()
    {

        $routesPath = ROOT. '/config/routes.php';
        $this->routes = include($routesPath);
    }

    //Returns request string
    //return string

    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        // получить строку запроса
        $uri = $this->getURI();

        //проверка наличия запроса в routes.php
        foreach ($this->routes as $uriPattern => $path){

            // СРАВНЕНИЕ $URIPATTERN AND $URI
            if (preg_match("~$uriPattern~", $uri)){

                // получаем внутренний путь из внешнего согласно правилу.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                // определение какой контроллер и экшн обрабатывает запрос
                $segments = explode('/', $internalRoute);
                
                $controllerName = array_shift($segments). 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments;

                // подключить файл класса контроллера
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

                if(file_exists($controllerFile)){
                    include_once($controllerFile);
                }
                // создать объект и вызвать метод
                $controllerObject = new $controllerName;


                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                // $result = $controllerObject->$actionName();
                if ($result != null){
                    break;
                }
            };
        };
    }
}



?>