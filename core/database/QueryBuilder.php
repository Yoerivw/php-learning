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

    //Create a function to Insert data into the table, refactor into a function then use once it works without
    /* public function insertAll($table){
        
    } */

    public function insert($table, $parameters){
        // insert into a tablename %S (%s) values (:name)

        // array_keys() returns an array containing the keys of the input array,
        // and implode() concatenates each element of the new array into a
        // string in which each element is separated by ", ":
        // Trick to preface each column name with a colon, which acts as a
        // placeholder for the value corresponding to the specified key:
        
        // the SQL query
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try{
            // Prepare the query and save it to statement
        $statement = $this->pdo->prepare($sql);
        // execute() accepts an array that is used in binding values to the
        // placeholders (parameters) specified in $values:

        $statement->execute($parameters);
        } catch (Exception $e){
            // Production
            //die('Whoops, something went wrong');
            //Development
            die($e->getMessage());
        }

        
    }

}
