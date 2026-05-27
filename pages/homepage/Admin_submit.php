

<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

// Static admin login
$admin_email = "monika_mam@gmail.com";
$admin_password = "12345";

if($email == $admin_email && $password == $admin_password){

    $_SESSION['admin'] = $email;

    echo "
    <script>
        alert('Login Successfully');

        window.location.href='/SMS/Project/pages/AdminDash/Admin_Dashboard.php';
        

    </script>
    ";

}else{

    echo "
    <script>
        alert('Incorrect Email or Password');

        window.location.href='Admin_login.php';
    </script>
    ";
}
?>