<?php
    session_start();

  if(!isset($_SESSION['student_id'])){
    header("Location: student_login.php");
    exit();
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="sms2.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
  </head>
  <body>
    <div class="container">
     <div class="sidebar">
        <h1><i class="fa-solid fa-graduation-cap"></i> Student Panel</h1>

        <div class="menu">
          <a href="sms2.php" class="courselink"
            ><i class="fa-solid fa-house"></i> Dashboard</a
          >
          <a href="profile.php" class="courselink"
            ><i class="fa-regular fa-user"></i> Profile</a
          >
          <a href="Course.php" class="courselink"
            ><i class="fa-solid fa-book"></i> Courses</a
          >
          <a href="stu_result.php" class="courselink"
            ><i class="fa-solid fa-trophy"></i> Results</a
          >
          <a href="../homepage/logout.php" class="courselink"
            ><i class="fa-solid fa-angle-left"></i> Logout</a
          >
        </div>
      </div>
      </div>

      <div class="main">
        <!-- profile section -->
        <div class="top-box">
          <div>
            <h1>Welcome, Student</h1>
            <p>Here is your academic overview.</p>
          </div>

          <div class="profile-img">
            <img src="../../images/profileImg.png" alt="" />
          </div>
        </div>

        <div class="cards">
          <div class="card blue">
            <div>
              <h3>Total Courses</h3>
              <h1>6</h1>
            </div>
            <i class="fa-solid fa-book-open"></i>
          </div>

          <div class="card yellow">
            <div>
              <h3>Assignments</h3>
              <h1>12</h1>
            </div>
            <i class="fa-solid fa-clipboard-list"></i>
          </div>

          <div class="card green">
            <div>
              <h3>Attendance</h3>
              <h1>92%</h1>
            </div>
            <i class="fa-solid fa-circle-check"></i>
          </div>

          <div class="card purple">
            <div>
              <h3>CGPA</h3>
              <h1>8.5</h1>
            </div>
            <i class="fa-solid fa-graduation-cap"></i>
          </div>
        </div>
        <!-- mid section box 1 -->
        <div class="bottom-section">
          <div class="quote-box">
            <div class="quote-content">
              <i class="fa-solid fa-book-open-reader quote-icon"></i>
              <p>
                "Success is the sum of small efforts repeated day in and day
                out."
              </p>
            </div>

            <img src="../../images/stuImg.png" alt="" />
          </div>
          <!-- mid section box 2 -->
          <div class="deadline-box">
            <h2>Upcoming Deadlines</h2>

            <div class="item">
              <i class="fa-regular fa-clock"></i>
              <div>
                <h4>Assignment 1</h4>
                <p>May 25</p>
              </div>
            </div>
            <!-- mid section box 3 -->
            <div class="item">
              <i class="fa-regular fa-clock"></i>
              <div>
                <h4>Assignment 2</h4>
                <p>May 26</p>
              </div>
            </div>
          </div>
          <!-- activity feed -->
          <div class="activity-box">
            <h2>Recent Activity Feed</h2>

            <div class="activity">
              <i class="fa-solid fa-check"></i>
              <div>
                <h4>Completed Python Quiz</h4>
                <p>2 hours ago</p>
              </div>
            </div>

            <div class="activity">
              <i class="fa-solid fa-upload"></i>
              <div>
                <h4>Uploaded Assignment 4</h4>
                <p>2 hours ago</p>
              </div>
            </div>
          </div>
        </div>
        <!-- footer  -->
        <footer>© 2026 Student Management System</footer>
      </div>
    </div>
  </body>
</html>
