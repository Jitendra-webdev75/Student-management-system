<?php

$conn = mysqli_connect('localhost','root','jeetu2005#','auth');


if($conn){
    
    $result1 = mysqli_query($conn,"select count(*) as total from students");
    $data1 = mysqli_fetch_assoc($result1);
    
    $result2 = mysqli_query($conn,"select count(*) as cnt from  students where status = 'Active'");
    $data2 = mysqli_fetch_assoc($result2);

    $result3 = mysqli_query($conn,"select count(*) as cnt from  students where status = 'Inactive'");

    $data3 = mysqli_fetch_assoc($result3);



    echo json_encode(['totalStudent' => $data1['total'],
                        'activeStudent' => $data2['cnt'],
                        'InactiveStudent' => $data3['cnt']]);
}



?>