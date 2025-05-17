<?php

include_once '../configurations/DB.php';
$connectionDB = DB::createInstance();

$id = isset($_POST ['id']) ? $_POST ['id']: '';
$names = isset($_POST ['student_name']) ? $_POST ['student_name']: '';
$last_names = isset($_POST ['last_names']) ? $_POST ['last_names']: '';

$courses = isset($_POST ['courses']) ? $_POST ['courses']: '';
$action = isset($_POST ['action']) ? $_POST ['action']:'';

if ($action != ""){
  switch($action){
    case 'add':
      $sql = "INSERT INTO students (id, names, last_names) VALUES (NULL,:names,:last_names)";
      $search = $connectionDB -> prepare($sql);
      $search -> bindParam(':names', $names);
      $search -> bindParam(':last_names', $last_names);
      $search -> execute();
      $idStudent = $connectionDB -> lastInsertId();

  }
}

$sql  = "SELECT * FROM students";
$studentsList = $connectionDB->query($sql);
$students=$studentsList->fetchAll();

print_r($students);

?>