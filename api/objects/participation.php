<?php 
class Forum{
 
    // database connection and table name
    private $conn;
    private $table_name = "participation";
 
    // object properties
    public $id;
    public $uname;
    public $event_id;

    
    
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
function read(){
 
    // select all query
    $query = "SELECT * FROM participation";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
        }
    };
?>
