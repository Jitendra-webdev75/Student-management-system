<?php
session_start();
$conn = mysqli_connect('localhost','root','jeetu2005#','auth');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM students WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);

        if($password == $row['password']){
            $_SESSION['student_id'] = $row['student_id'];
            $_SESSION['student_name'] = $row['first_name'];
            header("Location:../student/sms2.php");
            exit();          
        }
        else{
            echo "incorrect password";
        }
    }
    else{
        echo "user not found";
    }
?>