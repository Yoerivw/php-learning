<?php 



class Connection {

//connect to the database with a try catch 
    public static function make($config)
    {
        try {
    
           /*  return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root',''); */

           return new PDO(

                $config['connection'] .';dbname=' .$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
           );
        
        } catch (PDOException $e){
            die('Could not connect.');
        }
    
    }
}