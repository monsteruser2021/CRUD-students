<?php

class DB {
  public static $instance=null;
  public static function createInstance(){
    if( !isset(self::$instance)){
      $options[PDO::ATTR_ERRMODE] = PDO:: ERRMODE_EXCEPTION;
      self::$instance = new PDO('mysql:host=localhost;dbname=crud_students', 'root', '', $options);
      echo "connected...";
    }
    return self::$instance;
  }
}

?>