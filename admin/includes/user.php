<?php

class User {

//Call this method to search all users//
  public static function find_all_users() {
    return self::find_this_query("SELECT * FROM users");

    // global $database;
    // $result_set = $database->query("SELECT * FROM users");
    // return $result_set;
  }

//Seatch by ID
  public static function find_by_id($id) {
    global $database;
    $result_set = self::find_this_query("SELECT * FROM users WHERE id = $id");
    $found_user = mysqli_fetch_array($result_set);
    return $found_user;
  }

  public static function find_this_query($sql){
    global $database;
    $result_set = $database->query($sql);
    return $result_set;
  }
/////////*****END OF USER CLASS******////////
}





?>
