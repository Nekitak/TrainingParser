<?php

 

namespace vender\core;

 

/**
*       route:  'news' => 'news/index' where
*	@routes = 'array(route1 , route2 , ...)'
*	@uriPattern  -  'news'
*	@path - 'news/index'
*	@uri - 'localhost/news/...'
*	@controllerFile - 'NewsController.php'
*	@controllerName - 'NewsController'
*	@actionName - 'actionIndex()'
*/

class Router  
{
    protected static $routes;
    protected static $route;
     
    public function __construct()
    {
        $this->routes = include(ROOT . '/vender/core/config/routes.php');      
    }
    
    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI']))
            return trim($_SERVER['REQUEST_URI'], '/');
    }
    
 
    private function createAction($segments)
    {
        /* get controller name and controller action  */
        
        $controllerFolder = array_shift($segments);
        $ControllerName = 'app\controllers\\' . ucfirst($controllerFolder).'Controller';  
        $templateName = array_shift($segments);
        $actionName = 'action'.ucfirst($templateName);  
			 	 	
            $ControllerFile = ROOT.'/app/controllers/'.$ControllerName.'.php'; // компануем в путь , который будет указываться до контроллера , нужного нам
 
		if(file_exists($ControllerFile))   
                    include_once($ControllerFile);
			 			  
                    $ControllerObject = new $ControllerName(); 
                    return array($ControllerObject, $actionName);                  
    }

    
    public function run()
    {
        $uri = $this->getURI();
        
        if($path!= null){
            unset($path);
        }
        
        foreach($this->routes as $uriPattern => $path) 
	{		 			 	 
            if(preg_match("~$uriPattern~", $uri))
            {			 	
		$segments = explode('/', preg_replace("~$uriPattern~", $path, $uri)); // разделяем строку на  части и формируем массив
                
                if(call_user_func_array($this->createAction($segments) ,  $segments)  != null) 
                    break;
            }
	}	 
    }
    
    
}
