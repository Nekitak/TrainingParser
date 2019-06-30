<?php

 

namespace app;

use vender\core\Router;
 
 
/**
 * Description of Application
 *
 * @author nekitak46
 */

class Application 
{
   protected $router;
  
   
    public function __construct() 
    {
       $this->router = new Router();
       $this->router->run();
    }
    
    public static function debug($param)
    {
        echo "<pre>";
        print_r($param);
        echo "</pre>";
    }
}
