<?php 
$conn = mysqli_connect('localhost','root','jeetu2005#','auth');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $father = $_POST['father_name'];
    $dob = $_POST['dob'];
    $contact = $_POST['contact'];
    $email = $_POST['email']; 
    $qual = $_POST['qualification'];
    $course = $_POST['course'];
    $status = $_POST['status']; 

    $sql = "INSERT INTO students (first_name, last_name, father_name, date_of_birth, contact_no, email, qualification, course,status) 
            VALUES ('$fname', '$lname', '$father', '$dob', '$contact', '$email', '$qual', '$course','$status')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Student added successfully'); window.location.href='Stud_sect.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }    


}


?>