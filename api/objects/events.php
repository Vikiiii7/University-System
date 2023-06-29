<?php 
class Forum{
 
    // database connection and table name
    private $conn;
    private $table_name = "events";
 
    // object properties
    public $id;
    public $title;
    public $description;
    public $uploaded_date;
    public $filepath;
    
    
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
function read(){
 
    // select all query
    $query = "SELECT * FROM events";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
        }
    };
?>
