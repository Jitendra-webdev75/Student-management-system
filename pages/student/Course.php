<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Course.css">
    <link rel="stylesheet" href="sms2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <header>
         <div class="sidebar">
      <h1> <i class="fa-solid fa-graduation-cap"></i> Student Courses</h1>
      <div class="menu">
        <a href="sms2.php" class="courselink"><i class="fa-solid fa-house"></i> Dashboard</a>
        <a href="profile.php" class="courselink"><i class="fa-regular fa-user"></i> Profile</a>
        <a href="Course.php" class="courselink"><i class="fa-solid fa-book"></i> Courses</a>
        <a href="stu_result.php" class="courselink"><i class="fa-solid fa-trophy"></i> Results</a>
        <a href="../homepage/logout.php" class="courselink"><i class="fa-solid fa-angle-left"></i> Logout</a>
      </div>
    </div>
    </header>
    <div class="main">
        <div class="head">
            <h3>My Course</h3>
        </div>
        <div class="navbar">
            <div class="navlink">
                <div class="card card1">
                    <div class="logo logo1">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <div class="text">
                        <span>3</span>
                        <p>Enrolled Course</p>
                    </div>
                </div>
                <div class="card">
                    <div class="logo logo2">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <div class="text">
                        <span>1</span>
                        <p>Completed</p>
                    </div>
                </div>
                <div class="card">
                    <div class="logo logo3">
                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <div class="text">
                        <span>1</span>
                        <p>In Progress</p>
                    </div>
                </div>
                <div class="card">
                    <div class="logo logo4">
                        <i class="fa-solid fa-list"></i>
                    </div>
                    <div class="text">
                        <span>3</span>
                        <p>Total Course</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="head2">
            <p>Enrolled Course</p>
        </div>
        <div class="head3">
            <span>Course</span>
            <span>Instructor</span>
            <span>Progress</span>
            <span> Status</span>
            <span>Action</span>
        </div>
        <div class="course-about">
            <div class="course1">
                <div class="course1-details">
                    <img src="/Project/images/python.jpeg" alt="">
                    <div class="course-text">
                        <h3>Python</h3>
                        <p>Learn Python from<br> basic to advance</p>
                    </div>
                </div>
                <div class="instructor">
                    <div id="user">
                    <i class="fa-solid fa-circle-user"></i>
                    </div>
                    <p>jatin</p>
                </div>
                <div class="progress">
                    <h4>70%</h4>
                    <div class="fill">
                        <div class="innerfill"></div>
                    </div>
                </div>
                <div class="status">
                    <h4>In Progress</h4>
                </div>
                <div class="Action">Continue</div>
            </div>
             <div class="course2">
                <div class="course1-details">
                    <img src="/Project/images/html.jpeg" alt="" id="img2">
                     <div class="course-text">
                        <h3>Web Development</h3>
                        <p>HTML CSS,JavaScript for<br>beginner</p>
                    </div>
                </div>
                 <div class="instructor instructor1">
                    <div class="user user1">
                    <i class="fa-solid fa-circle-user"></i>
                    </div>
                    <p>Rahul</p>
                </div>
                 <div class="progress progress1">
                    <h4>90%</h4>
                    <div class="fill">
                        <div class="innerfill innerfill1"></div>
                    </div>
                </div> 
                <div class="status status1">
                    <h4>In Progress</h4>
                </div>
                <div class="Action">Continue</div>
            </div>
            <div class="course3">
                  <div class="course1-details">
                    <img src="/Project/images/python.jpeg" alt="">
                    <div class="course-text">
                        <h3>C Programming</h3>
                        <p>Learn C language step<br>by step</p>
                    </div>
                </div>
                <div class="instructor instructor2">
                    <div class="user user3">
                    <i class="fa-solid fa-circle-user"></i>
                    </div>
                    <p>Aman</p>
                </div>
                <div class="progress progress2">
                    <h4>50%</h4>
                    <div class="fill">
                        <div class="innerfill innerfill2"></div>
                    </div>
                </div>
                <div class="status status2">
                    <h4>In Progress</h4>
                </div>
                <div class="Action">Continue</div>
            </div>
            </div> 
      </div> 

</table>
    
</body>

</html>