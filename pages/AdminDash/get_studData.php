<?php

$conn = mysqli_connect('localhost','root','jeetu2005#','auth');

if($conn){
    $query = "select count(*) as total from students";
    $result = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($result);
    echo json_encode(['totalStudent' => $data['total']]);
}



?>