<?php 



class Connection {

//connect to the database with a try catch 
    public static function make()
    {
        try {
    
            return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root','');
        
        } catch (PDOException $e){
            die('Could not connect.');
        }
    
    }
}