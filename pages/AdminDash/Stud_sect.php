<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Students - Admin Portal</title>
    <link rel="stylesheet" href="admin.css" />
    <link rel="stylesheet" href="Stud_sect.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />

    <style>
        .modal-overlay {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.5);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }
        .modal-content {
            background: #fff; 
            padding: 15px 20px; 
            border-radius: 10px;
            width: 500px; 
            max-height: 90vh; 
            overflow-y: auto; 
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            position: relative;
        }
        .close-btn { position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px; }
        h2 { margin-top: 0; font-size: 20px; color: #333; }
        .form-group { margin-bottom: 10px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; color: #555; }
        input, select {
            width: 100%; padding: 8px; border: 1px solid #ccc;
            border-radius: 5px; box-sizing: border-box;
        }
        .submit-btn {
            width: 100%; padding: 12px; background-color: #00897b;
            color: white; border: none; border-radius: 5px; cursor: pointer;
            font-weight: bold; margin-top: 10px;
        }
        .submit-btn:hover { background-color: #00695c; }
       
    </style>
  </head>
  <body>
    <div class="main">
      <div class="leftpannel">
        <h1 class="adminHead"><i class="ri-user-fill"></i> Students</h1>
        <div class="itemsBox">
          <ul class="list_items">
            <a href="Admin_Dashboard.php"
              ><li class="items">
                <i class="ri-home-4-fill"></i> Dashboard
              </li></a
            >
            <a href="Stud_sect.php">
              <li class="items active">
                <i class="ri-graduation-cap-fill"></i> Students
              </li>
            </a>
            <a href="teachers.php"
              ><li class="items">
                <i class="ri-presentation-fill"></i> Teachers
              </li></a
            >
            <a href="course.php">
              <li class="items"><i class="ri-book-3-fill"></i> Courses</li>
            </a>
            <a href="Adm_Logout.php">
              <li id="logoOut" class="items">
                <i class="ri-logout-box-r-line"></i> Logout
              </li>
            </a>
          </ul>
        </div>
      </div>
      <div class="rightContent">
        <div class="modal-overlay">
          <div class="modal-content">
            <span class="close-btn">&times;</span>
            <form action="studDetail.php" method="post">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" placeholder="Enter First Name" name="first_name"  required />
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" placeholder="Enter Last Name" name="last_name" required />
              </div>
              <div class="form-group">
                <label>Father's Name</label>
                <input type="text" placeholder="Enter Father's Name" name="father_name" required />
              </div>
              <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" name="dob" required />
              </div>
              <div class="form-group">
                <label>Contact No.</label>
                <input type="tel" placeholder="Enter Contact Number" name="contact" required />
              </div>
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" placeholder="example@email.com" name="email" required />
              </div>
              <div class="form-group">
                <label>Qualification</label>
                <input type="text" placeholder="e.g. B.Sc, B.Tech" name="qualification" required />
              </div>
              <div class="form-group">
                <label>Course</label>
                <input
                  type="text"
                  placeholder="e.g. Web Development"
                  name="course"
                  required
                />
              </div>
              <div class="form-group">
                <label>Status</label>
                <select name="status">
                  <option value="Active">Active</option>
                  <option value="Inactive">Inactive</option>
                </select>
              </div>
              <button class="submit-btn" type="submit" name="submit">Add Student</button>
            </form>
          </div>
        </div>
        <div class="topbar">
          <div class="topbar-left">
            <h2>Students</h2>
            <p>Manage and view student information</p>
          </div>
          <div class="topbar-right">
            <div class="search-box">
              <i class="fas fa-search"></i>
              <input type="text" placeholder="Search students..." />
            </div>
            <button class="btn-add">
              <i class="fas fa-plus"></i> Add Student
            </button>
          </div>
        </div>

        <div class="stats-grid">
          <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-users"></i></div>
            <div class="stat-info">
              <h3 id="total_studcount">245</h3>
              <p>Total Students</p>
            </div>
          </div>
          <div class="stat-card">
            <div class="stat-icon green"><i class="fas fa-user-check"></i></div>
            <div class="stat-info">
              <h3 id="active_studcount">212</h3>
              <p>Active Students</p>
            </div>
          </div>
          <div class="stat-card">
            <div class="stat-icon orange">
              <i class="fas fa-user-xmark"></i>
            </div>
            <div class="stat-info">
              <h3 id="Inactive_studcount">18</h3>
              <p>Inactive Students</p>
            </div>
          </div>
          <!-- <div class="stat-card">
            <div class="stat-icon purple"><i class="fas fa-user-plus"></i></div>
            <div class="stat-info">
              <h3>15</h3>
              <p>New This Month</p>
            </div>
          </div> -->
        </div>

        <div class="table-section">
          <div class="table-wrapper">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name <i class="fas fa-sort"></i></th>
                  <th>Last Name <i class="fas fa-sort"></i></th>
                  <th>Father's Name <i class="fas fa-sort"></i></th>
                  <th>Date of Birth <i class="fas fa-sort"></i></th>
                  <th>Contact No. <i class="fas fa-sort"></i></th>
                  <th>Email Address <i class="fas fa-sort"></i></th>
                  <th>Qualification <i class="fas fa-sort"></i></th>
                  <th>Course <i class="fas fa-sort"></i></th>
                  <th>Status <i class="fas fa-sort"></i></th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
               <?php 
    
    $conn = mysqli_connect('localhost','root','jeetu2005#','auth');
    $query = "SELECT * FROM students";
    $result = mysqli_query($conn, $query);

    $i = 1;
    while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        <td><?php echo $row['father_name']; ?></td>
        <td><?php echo $row['date_of_birth']; ?></td>
        <td><?php echo $row['contact_no']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['qualification']; ?></td>
        <td><?php echo $row['course']; ?></td>
        <td><?php echo $row['status']; ?></td>
        <td class="actions">
            <a href=""><button class="act-btn edit"><i class="fas fa-pen"></i></button></a>
            
            <a href="delete_stud.php?id=<?php echo $row['student_id']; ?>">
                <button class="act-btn delete"><i class="fas fa-trash"></i></button>
            </a>
        </td>
    </tr>
    <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script>
    const studForm = document.querySelector(".modal-overlay");
    const addbtn = document.querySelector(".btn-add");
    const closebtn = document.querySelector(".close-btn");

    closebtn.addEventListener("click",()=>{
      studForm.style.display = "none"
    })
    
    addbtn.addEventListener("click",()=>{
      studForm.style.display = "flex"
    })


    const getStudentData = async () => {
      try {
        let response = await fetch("get_studData.php");
        data = await response.json();
        document.getElementById("total_studcount").innerText =
          data.totalStudent;
        
          document.getElementById("active_studcount").innerText =
          data.activeStudent;
        
          document.getElementById("Inactive_studcount").innerText =
          data.InactiveStudent;
      } catch (error) {
        console.error("error fetching data", error);
      }
    };

    getStudentData();
  </script>
</html>
