<?php
namespace F\Core;

class Controller{
    
    public function render($filename, $vars= []){
        
        extract($vars);
         
        require_once PROJECT_DIR . '/templates/' . $filename;
        
    }
    
}