<?php 

class QueryBuilder{


    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
         //prepare the table from your database
    $statement = $this->pdo->prepare("select * from {$table}");
    
    //execute those statements
    $statement->execute();
    
    //save the fetched object into a variable
    return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
