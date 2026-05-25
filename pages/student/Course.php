<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Course Dashboard</title>
<link rel="stylesheet" href="course.css">
<link rel="stylesheet" href="leftPannel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="container">
<!-- sidebar -->
 <div class="sidebar">
        <h1><i class="fa-solid fa-graduation-cap"></i> Student Panel</h1>

        <div class="menu">
          <a href="sms2.php" class="courselink"
            ><i class="fa-solid fa-house"></i> Dashboard</a
          >
          <a href="profile.php" class="courselink"
            ><i class="fa-regular fa-user"></i> Profile</a
          >
          <a href="Course.php" class="courselink active"
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

<div class="main-content">

<h1>My Courses</h1>

<div class="cards">

<div class="card">
<div class="icon pink">
<i class="fa-solid fa-book"></i>
</div>
<div>
<h2>3</h2>
<p>Enrolled Course</p>
</div>
</div>

<div class="card">
<div class="icon green">
<i class="fa-solid fa-circle-check"></i>
</div>
<div>
<h2>1</h2>
<p>Completed</p>
</div>
</div>

<div class="card">
<div class="icon yellow">
<i class="fa-solid fa-spinner"></i>
</div>
<div>
<h2>1</h2>
<p>In Progress</p>
</div>
</div>

<div class="card">
<div class="icon blue">
<i class="fa-solid fa-layer-group"></i>
</div>
<div>
<h2>3</h2>
<p>Total Course</p>
</div>
</div>

</div>

<div class="table-box">

<div class="table-title">Enrolled Course</div>

<table>
<thead>
<tr>
<th>Course</th>
<th>Instructor</th>
<th>Progress</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<!-- courses -->
<tbody>
   
<tr>
<td>
<div class="course">
<i class="fa-brands fa-python course-icon"></i>
<div>
<h4>Python</h4>
<p>Learn Python from basic to advance</p>
</div>
</div>
</td>

<td><i class="fa-solid fa-user instructor"></i> Jatin</td>

<td>
<span>70%</span>
<div class="progress-bar">
<div class="progress" style="width:70%"></div>
</div>
</td>

<td><span class="status">In Progress</span></td>

<td><button>Continue</button></td>
</tr>

<tr>
<td>
<div class="course">
<i class="fa-solid fa-code course-icon"></i>
<div>
<h4>Web Development</h4>
<p>HTML CSS JavaScript for beginner</p>
</div>
</div>
</td>

<td><i class="fa-solid fa-user instructor"></i> Rahul</td>

<td>
<span>90%</span>
<div class="progress-bar">
<div class="progress" style="width:90%"></div>
</div>
</td>

<td><span class="status">In Progress</span></td>

<td><button>Continue</button></td>
</tr>

<tr>
<td>
<div class="course">
<i class="fa-solid fa-c course-icon"></i>
<div>
<h4>C Programming</h4>
<p>Learn C language step by step</p>
</div>
</div>
</td>

<td><i class="fa-solid fa-user instructor"></i> Aman</td>

<td>
<span>50%</span>
<div class="progress-bar">
<div class="progress" style="width:50%"></div>
</div>
</td>

<td><span class="status">In Progress</span></td>

<td><button>Continue</button></td>
</tr>

</tbody>
</table>

</div>
 <!-- tasks -->
<div class="bottom-section">

<div class="box">
<h3><i class="fa-regular fa-calendar"></i> Upcoming Tasks</h3>
<ul>
<li>Python Quiz 3 - Due: May 28</li>
<li>HTML/CSS Project - Due: June 02</li>
</ul>
</div>
<!-- Announcement section -->
<div class="box">
<h3><i class="fa-solid fa-bullhorn"></i> Announcements</h3>
<ul>
<li>Live Q&A session this Friday</li>
<li> Server maintenance on Sunday</li>
</ul>
</div>

</div>

<!-- <footer>
© 2026 Student Management System
</footer> -->

</div>

</div>

</body>
</html>