<?php

namespace app\controllers;

 
 
 

/**
 * Description of SiteController
 *
 * @author nekitak46
 */

use  app\models\Parser;

class SiteController  
{
    public  function actionIndex()
    {
       require_once(LIBS . 'simple_html_dom.php');
       
       $html = Parser::parse();
       
       require_once(ROOT . '/app/views/site/index.php');
        
    }
}
