<?php
$conn = mysqli_connect('localhost','root','jeetu2005#','auth');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM students WHERE student_id = '$id'";
    
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Student deleted successfully'); window.location.href='Stud_sect.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>