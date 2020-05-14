<?php
namespace F\Core;
class Database {
    
    public $pdo;
    
    public function __construct(){
            
        try
        {
            $this->pdo = new \PDO('mysql:host='. $_ENV['DATABASE_HOST'] . ';dbname='. $_ENV['DATABASE_NAME'].';charset=utf8mb4',$_ENV['DATABASE_USERNAME'],$_ENV['DATABASE_PASSWORD']);
        }
        catch(\Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        
        
        
        
    }
    
    
}