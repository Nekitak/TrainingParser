<?php

namespace app\models;
/**
 * Description of Parser
 *
 * @author nekitak46
 */

class Parser 
{
    
    //this function get html file from yandex news and return $html
    public static function parse()
    {
        $html = file_get_html('https://news.yandex.ru/Moscow/index.html?from=rubric');
        
        return $html;
    }
     
}
