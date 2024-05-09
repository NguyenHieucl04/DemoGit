<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'test';

$conn = mysqli_connect($host, $user, $password, $db);
$sql = "select * from myguests";
$result = mysqli_query($conn, $sql);
while($row[] = $result->fetch_assoc()){
    $json = json_encode($row);
}
echo $json;
$conn -> close();