<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../homepage/Admin_login.php");
    exit();
?>