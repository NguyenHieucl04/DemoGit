<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'test';

$conn = mysqli_connect($host, $user, $password, $db);

if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    if($conn){
        $sql = "INSERT INTO myguests( firstname, lastname, email) VALUES ('".$firstname."', '".$lastname."', '".$email."')";
        if(mysqli_query($conn, $sql)){
            echo 'Insert thanh cong';
        }else echo "Insert that bai";
    }else echo "Have no connection to database";
}else echo "All field are required";
