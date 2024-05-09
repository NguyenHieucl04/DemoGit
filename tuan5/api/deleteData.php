<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'test';

$conn = mysqli_connect($host, $user, $password, $db);

if(!empty($_POST['email'])){
    $email = $_POST['email'];
    if($conn){
        $sql = "DELETE FROM  myguests WHERE email = '".$email."' ";
        if(mysqli_query($conn, $sql)){
            echo 'Delete thanh cong';
        }else echo "Delete that bai";
    }else echo "Have no connection to database";
}else echo "All field are required";
