<?php
require_once("new_config.php");

////////************ DATABASE CLASS **********/////
class Database {

  public $connection;

  function __construct(){
    $this->open_db_connection ();//invokes automatically

  }

  public function open_db_connection () {

  // $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
  $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if($this->connection->connect_errno) {
      die("Database connection failed badly" . $this->connection->connect_errno);
    }
  }

  public function query($sql) {
    $result = $this->connection->query($sql);
      $this->confirm_query($result);
      return $result;
  }

  private function confirm_query($result){
    if(!$result){
      die("query failed" . $this->connection->error);
    }
  }

  public function escape_string($string){
    $escaped_string = $this->connection->real_escape_string($string);
    return $escaped_string;
  }

  public function the_insert_id() {
    return $this->connection->insert_id;
  }

///////////////******END OF CLASS ******** ///////
}

//Makes the class global used in Users
$database = new Database(); // now reffers to Database Class



?>
