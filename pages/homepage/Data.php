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
    $password = $_POST['password']; 
    $qual = $_POST['qualification'];
    $course = $_POST['course']; 

    $sql = "INSERT INTO students (first_name, last_name, father_name, date_of_birth, contact_no, email, password, qualification, course) 
            VALUES ('$fname', '$lname', '$father', '$dob', '$contact', '$email', '$password', '$qual', '$course')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration Successful! <a href='student_login.php'>Login here</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }    


}


?>