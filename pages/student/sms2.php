<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="sms2.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
  </head>

      <?php
    session_start();

  if(!isset($_SESSION['student_id'])){
    header("Location: student_login.php");
    exit();
}
?>
  <body>
    <div class="container">
      <!-- Sidebar -->
      <div class="sidebar">
        <h1><i class="fa-solid fa-graduation-cap"></i> Student Panel</h1>

        <div class="menu">
          <a href="sms2.html" class="courselink"
            ><i class="fa-solid fa-house"></i> Dashboard</a
          >
          <a href="profile.html" class="courselink"
            ><i class="fa-regular fa-user"></i> Profile</a
          >
          <a href="Course.html" class="courselink"
            ><i class="fa-solid fa-book"></i> Courses</a
          >
          <a href="stu_result.html" class="courselink"
            ><i class="fa-solid fa-trophy"></i> Results</a
          >
          <a href="" class="courselink"
            ><i class="fa-solid fa-angle-left"></i> Logout</a
          >
        </div>
      </div>

      <!-- Main Content -->
      <div class="main">
        <!-- Welcome -->
        <div class="welcome-box">
          <div>
            <h2>Welcome, Student</h2>
            <p>Here is your academic overview.</p>
          </div>
          <img src="/Project/images/welcome.jpeg" alt="" />
        </div>

        <!-- Cards -->
        <div class="cards">
          <div class="card card1">
            <h3>Total Courses</h3>
            <h1>6</h1>
          </div>

          <div class="card card2">
            <h3>Assignments</h3>
            <h1>12</h1>
          </div>

          <div class="card card3">
            <h3>Attendance</h3>
            <h1>92%</h1>
          </div>

          <div class="card card4">
            <h3>CGPA</h3>
            <h1>8.5</h1>
          </div>
        </div>

        <div class="professional">
          <p>
            "Success is the sum of small<br />
            efforts repeated day in and day out."
          </p>
          <img src="/Project/images/ui.png" alt="" />
        </div>
      </div>
    </div>
  </body>
</html>
