<?php

//INSERT INTO `courses` (`id`, `course_name`) VALUES (NULL, 'JavaScript course');

include_once '../configurations/DB.php';
$connectionDB = DB::createInstance();

//print_r($_POST);

$id=isset($_POST['id']) ? $_POST['id']: '';
$course_name=isset($_POST['course_name']) ? $_POST['course_name']: '';
$action=isset($_POST['action']) ? $_POST['action']: '';

if($action){
  switch($action){
    case 'add':
      $sql="INSERT INTO courses (id, course_name) VALUES (NULL, :course_name)";
      $search=$connectionDB->prepare($sql);
      $search->bindParam(':course_name', $course_name);
      $search->execute();
    break;
    case 'edit':
      $sql="UPDATE courses SET course_name=:course_name WHERE id=:id";
      $search=$connectionDB->prepare($sql);
      $search->bindParam(':id',$id);
      $search->bindParam(':course_name',$course_name);
      $search->execute();
      //echo $sql;
    break;
    case 'delete':
      $sql="DELETE FROM courses WHERE id=:id";
      $search=$connectionDB->prepare($sql);
      $search->bindParam(':id',$id);
      $search->execute();
      //echo $sql;
    break;
    case 'select':
      $sql="SELECT * FROM courses WHERE id=:id";
      $search=$connectionDB->prepare($sql);
      $search->bindParam(':id',$id);
      $search->execute();
      $course=$search->fetch(PDO::FETCH_ASSOC);
      $course_name=$course['course_name'];
      
    break;
  }
}

$search=$connectionDB->prepare("SELECT * FROM courses");
$search->execute();
$coursesList=$search->fetchAll();

//print_r($coursesList);

?>