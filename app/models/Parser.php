<?php

namespace app\models;
/**
 * Description of Parser
 *
 * @author nekitak46
 */

class Parser 
{
    public static function parse()
    {
        $html = file_get_html('https://news.yandex.ru/Moscow/index.html?from=rubric');
        
        return $html;
    }
     
}
