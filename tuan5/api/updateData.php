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
        $sql = "UPDATE myguests SET firstname= '".$firstname."', lastname = '".$lastname."' WHERE email = '".$email."' ";
        if(mysqli_query($conn, $sql)){
            echo 'Update thanh cong';
        }else echo "Update that bai";
    }else echo "Have no connection to database";
}else echo "All field are required";
