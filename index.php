<?php
require 'connection.php';
$con['db'] = (new Database())->db;

 if (isset($_POST['username'])  &&  isset($_FILES['image'])){
    $userName = $_POST['username'];
    $image = $_FILES['image'];
    $filePath = "uploads/".$image["name"];
    move_uploaded_file($image["tmp_name"],"$filePath");

    if ($userName !== "" && $filePath !== ""){
        $sta = $con['db']->query("INSERT INTO data (username,image) VALUES('$userName','$filePath')");
    }
 }

try {
    $fetching = $con['db']->query("SELECT * from data ");
    $fetchedDatas = $fetching->fetchAll(PDO::FETCH_OBJ);
//    var_dump($fetchedDatas);
}
 catch (Exception $e){
     die($e->getMessage());
 }

 require 'view.php';