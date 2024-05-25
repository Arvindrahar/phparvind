<?php

$_SERVER = "localhost";
$userName ="root";
$passwprd = '';
$dbname = 'test';

$conn = new mysqli($_SERVER , $userName , $passwprd , $dbname);

if($conn->connect_errno>0){
        echo 'somthing want wrong,connection failed';
    }else{
        echo 'connection successfull';
    }
// echo "<pre>";
// print_r($conn->connect_errno);
// echo "</pre>"
// if($conn->connect_errno>0){
//     echo 'somthing want wrong,connection failed';
// }else{
//     echo 'connection successfull';
// }
// $sql = 'INSERT INTO students (name , email , phone , image_path) VALUES ("Arvind rahar" , "arvind123@gmail.com" , "9772306132", "sfdsdf")';

// if($conn->query($sql)){
//     echo 'Data inserted successfull';
// }else{
//     echo 'Data not inserted successfull';
// }
?>