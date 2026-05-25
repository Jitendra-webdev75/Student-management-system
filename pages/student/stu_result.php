<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="stud_result.css" />
    <link rel="stylesheet" href="leftPannel.css" class="css">

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

  </head>
  <body>
    <div class="container">
      <!-- Sidebar -->
      <div class="sidebar">
        <h1><i class="fa-solid fa-graduation-cap"></i> Student Panel</h1>

        <div class="menu">
          <a href="sms2.php" class="courselink "
            ><i class="fa-solid fa-house"></i> Dashboard</a
          >
          <a href="profile.php" class="courselink"
            ><i class="fa-regular fa-user"></i> Profile</a
          >
          <a href="Course.php" class="courselink"
            ><i class="fa-solid fa-book"></i> Courses</a
          >
          <a href="stu_result.php" class="courselink active"
            ><i class="fa-solid fa-trophy"></i> Results</a
          >
          <a href="../homepage/logout.php" class="courselink"
            ><i class="fa-solid fa-angle-left"></i> Logout</a
          >
        </div>
      </div>

      <!-- Main Content -->
      <main class="main-content">
        <!-- Top Navbar -->
        <div class="topbar">
          <div>
            <h1>Result Dashboard</h1>
            <p>Welcome back,Student</p>
          </div>

          <div class="top-icons">
            <i class="fa-regular fa-bell"></i>

            <div class="profile">
              <img src="../../images/man.jpeg" alt="" />

              <span>Hello, Student</span>
            </div>
          </div>
        </div>

        <!-- Cards -->
        <div class="cards">
          <div class="card blue">
            <div class="icon">
              <i class="fa-solid fa-chart-simple"></i>
            </div>

            <div>
              <h3>CGPA</h3>
              <h2>8.25</h2>
              <p>Out of 10</p>
            </div>
          </div>

          <div class="card green">
            <div class="icon">
              <i class="fa-solid fa-percent"></i>
            </div>

            <div>
              <h3>Percentage</h3>
              <h2>82.5%</h2>
              <p>Overall</p>
            </div>
          </div>

          <div class="card purple">
            <div class="icon">
              <i class="fa-solid fa-award"></i>
            </div>

            <div>
              <h3>Grade</h3>
              <h2>A</h2>
              <p>Excellent</p>
            </div>
          </div>

          <div class="card orange">
            <div class="icon">
              <i class="fa-solid fa-trophy"></i>
            </div>

            <div>
              <h3>Status</h3>
              <h2>PASS</h2>
              <p>Keep it up!</p>
            </div>
          </div>
        </div>

        <!-- Table + Performance -->
        <div class="content">
          <!-- Table -->
          <div class="table-section">
            <div class="section-title">
              <h2>Subject Wise Marks</h2>
            </div>

            <table>
              <thead>
                <tr>
                  <th>Code</th>
                  <th>Subject</th>
                  <th>Credits</th>
                  <th>Marks</th>
                  <th>Grade</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>CS101</td>
                  <td>Computer Fundamentals</td>
                  <td>4</td>
                  <td>86</td>
                  <td><span class="grade a">A</span></td>
                </tr>

                <tr>
                  <td>MA101</td>
                  <td>Mathematics</td>
                  <td>4</td>
                  <td>78</td>
                  <td><span class="grade b">B+</span></td>
                </tr>

                <tr>
                  <td>AI101</td>
                  <td>Artificial Intelligence</td>
                  <td>4</td>
                  <td>72</td>
                  <td><span class="grade c">B</span></td>
                </tr>

                <tr>
                  <td>OS101</td>
                  <td>Operating System</td>
                  <td>3</td>
                  <td>88</td>
                  <td><span class="grade a">A</span></td>
                </tr>

                <tr>
                  <td>DE101</td>
                  <td>Digital Electronics</td>
                  <td>3</td>
                  <td>76</td>
                  <td><span class="grade b">B+</span></td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Performance -->
          <div class="performance">
            <div class="circle">
              <h1>82.5%</h1>
              <p>Overall</p>
            </div>

            <div class="details">
              <p>Total Credits <span>18</span></p>
              <p>Total Subjects <span>5</span></p>
              <p>SGPA <span>8.25</span></p>
            </div>

            <button>Download Marksheet</button>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
