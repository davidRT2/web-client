<?php 
    require_once "../API/model.php";
    $id = $_GET['nim'];
    $url = 'http://localhost:8080/api/students/';
    model::deleteStudent($id, $url);
?>