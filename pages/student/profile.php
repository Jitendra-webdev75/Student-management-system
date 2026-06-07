<?php
 session_start();

  if(!isset($_SESSION['student_id'])){
    header("Location: student_login.php");
    exit();
}

$student_name = $_SESSION['student_name'];
$student_Lastname = $_SESSION['student_Lastname'];
$student_id = $_SESSION['student_id'];
$father_name = $_SESSION['father_name'];
$dob = $_SESSION['dob'];
$course_name = $_SESSION['course_name'];
$email_id = $_SESSION['email_id'];
$contact_no = $_SESSION['contact_no'];
$status_bar = $_SESSION['status_bar'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="leftPannel.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <header>
         <div class="sidebar">
      <h1> <i class="fa-solid fa-graduation-cap"></i> Student Profile</h1>

      <div class="menu">
        <a href="sms2.php" class="courselink"><i class="fa-solid fa-house"></i> Dashboard</a>
        <a href="profile.php" class="courselink active"><i class="fa-regular fa-user"></i> Profile</a>
        <a href="Course.php" class="courselink"><i class="fa-solid fa-book"></i> Courses</a>
        <a href="stu_result.php" class="courselink"><i class="fa-solid fa-trophy"></i> Results</a>
        <a href="../homepage/logout.php" class="courselink"><i class="fa-solid fa-angle-left"></i> Logout</a>
      </div>
    </div>
    </header>
     <main >
        
          <div class="center">
           <div class="profile">
            <br>
            <span style="color: #0D1C2F; "><h1>Profile</h1></span>
            <span style="color: #444651; " >Manage your personal and academic information</span>
         </div>          
        </div>
         <!--  -->
        <div class="center" style="margin:20px 0px 20px 0px ">
          <div class="editprofile ">

            <div class="editprofile-1 center">
                <span><img src="../../images/boyAvtar.png" alt="" height="120px"></span>
                <span class="studetail">
                    <div class="stuname"><h2><?php echo htmlspecialchars(ucwords($student_name)); ?></h2></div>
                    <div class="stuid">Student ID: <b><?php echo $student_id ?></b></div>
                    <div class="stucourse">Course:<b> <?php echo htmlspecialchars(($course_name)); ?></b></div>
                    <div class="active"><b> <?php echo htmlspecialchars(($status_bar)); ?></b></div>
                </span>
            </div>
            
              

          </div>            
        </div>
          <!--  -->
          <div class="center">
               <div class="card" style="width: 70vw;">
          
                <div class="card-header">
                  👤 Personal Information
                </div>
          
                <table>
                  <tr>
                    <td class="label">Full Name</td>
                    <td class="colon">:</td>
                    <td class="value"><?php echo htmlspecialchars(ucwords($student_name . $student_Lastname)); ?></td>
                  </tr>
          
                  <tr>
                    <td class="label">Father's Name</td>
                    <td class="colon">:</td>
                    <td class="value"><?php echo htmlspecialchars(ucwords($father_name )); ?></td>
                  </tr>
          
                  <tr>
                    <td class="label">Student ID</td>
                    <td class="colon">:</td>
                    <td class="value"><b><?php echo $student_id ?></b></td>
                  </tr>
          
                  <tr>
                    <td class="label">Date of Birth</td>
                    <td class="colon">:</td>
                    <td class="value"><?php echo htmlspecialchars(($dob)); ?></td>
                  </tr>
          
                  <tr>
                    <td class="label">Course</td>
                    <td class="colon">:</td>
                    <td class="value"><?php echo htmlspecialchars(($course_name)); ?></td>
                  </tr>
          
                  <tr>
                    <td class="label">Email</td>
                    <td class="colon">:</td>
                    <td class="value"><?php echo $email_id?></td>
                  </tr>
          
                  <tr>
                    <td class="label">Phone Number</td>
                    <td class="colon">:</td>
                    <td class="value"><?php echo $contact_no ?></td>
                  </tr>
          
                 
                </table>
          
              </div>
          
              <!--  -->
              <!-- <div class="card aacademic">
          
                <div class="card-header">
                  🎓 Academic Information
                </div>
          
                <table>
          
                  <tr>
                    <td class="label">Course</td>
                    <td class="colon">:</td>
                    <td class="value">
                      Bachelor of Computer Applications
                    </td>
                  </tr>
          
                  <tr>
                    <td class="label">Branch / Stream</td>
                    <td class="colon">:</td>
                    <td class="value">Computer Applications</td>
                  </tr>
          
                  <tr>
                    <td class="label">Year / Semester</td>
                    <td class="colon">:</td>
                    <td class="value">2nd Year / 4th Semester</td>
                  </tr>
          
                  <tr>
                    <td class="label">Enrollment No.</td>
                    <td class="colon">:</td>
                    <td class="value">ENR2023001023</td>
                  </tr>
          
                  <tr>
                    <td class="label">Admission Date</td>
                    <td class="colon">:</td>
                    <td class="value">20 Jul 2023</td>
                  </tr>
          
                  <tr>
                    <td class="label">Batch</td>
                    <td class="colon">:</td>
                    <td class="value">2023 - 2026</td>
                  </tr>
          
                  <tr>
                    <td class="label">College</td>
                    <td class="colon">:</td>
                    <td class="value">ABC College, Indore</td>
                  </tr>
          
            </table> -->
      
          </div>
      
        </div>
              

        </div>
        <!--  -->
        <div class="summarytext"><h3>📶 Summary</h3></div>
          <div class="crente">
            
          <div class="summary ">
            

              <div class="summary_box ">
                <div class="attendence center">
                  <span ><h1>📆</h1></span>
                  <span>
                    <div style="color: #444651;">Attendance</div>
                    <div style="color: #0D1C2F; padding: 5px 0 0 0;"><h3>79%</h3></div>
                  </span>
                </div>
              </div>

              <div class="summary_box box2 ">
                <div class="attendence center">
                  <span style="color: #059669;"><h1>₹</h1></span>
                  <span style="padding-left: 10px;">
                    <div style="color: #059669;">Fees status</div>
                    <div style="color: #064E3B; padding: 5px 0 0 0;"><h3>Paid</h3></div>
                  </span>
                </div>
              </div>

              <div class="summary_box box3 ">
                <div class="attendence center">
                  <span ><h1>📋</h1></span>
                  <span>
                    <div style="color: #F97316;">Assignment</div>
                    <div style="color: #7C2D12; padding: 5px 0 0 0;"><h3>3 Pending</h3></div>
                  </span>
                </div>
              </div>

              <div class="summary_box box4">
                <div class="attendence center">
                  <span style="color: #9333EA;"><h1 > ☆</h1></span>
                  <span>
                    <div style="color: #A855F7;">CGPA</div>
                    <div style="color: #581C87; padding: 5px 0 0 0;"><h3>9.45</h3></div>
                  </span>
                </div>
              </div>

          </div>
         </div>
     </main>
</body>
</html>

