<?php
require_once("new_config.php");

////////************ DATABASE CLASS **********/////
class Database {

  public $connection;

  function __construct(){
    $this->open_db_connection ();//invokes automatically

  }

  public function open_db_connection () {

  $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno()){
      die("Database connection failed badly" . mysqli_error);
    }
  //Check if connected
  // if($connection) {
  //   echo "true";
  // }
  }
///////////////******END OF CLASS ******** ///////
}

$database = new Database(); // now reffers to Database Class



?>
