<?php

include_once '../configurations/DB.php';
$connectionDB = DB::createInstance();

print_r($_POST);

$sql  = "SELECT * FROM students";
$studentsList = $connectionDB->query($sql);
$students=$studentsList->fetchAll();

print_r($students);

?>