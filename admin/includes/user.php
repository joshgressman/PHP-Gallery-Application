<?php

class User {

//Call this method to search all users//
  public static function find_all_users() {
    global $database;
    $result_set = $database->query("SELECT * FROM users");
    return $result_set;
  }

//Seatch by ID
  public static function find_by_id($id) {
    global $database;
    $result_set = $database->query("SELECT * FROM users WHERE id = $id");
    return $result_set;
  }

/////////*****END OF USER CLASS******////////
}





?>
