<!doctype html>
<html lang="en">
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>teachers</title>
    <link rel="stylesheet" href="admin.css" class="css" />
    <link rel="stylesheet" href="teachers.css" class="css" />
  </head>
  <body>
    <div class="main">
      <div class="leftpannel">
        <h1 class="adminHead">Teachers</h1>
        <div class="itemsBox">
          <ul class="list_items">
            <a href="Admin_Dashboard.php"
              ><li class="items">
                <i class="ri-home-4-fill"></i> Dashboard
              </li></a
            >
            <a href="Stud_sect.php">
              <li class="items">
                <i class="ri-graduation-cap-fill"></i> Students
              </li>
            </a>
            <a href="teachers.php"
              ><li class="items active">
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
        <div id="teacherPopup" class="popup-overlay">
          <div class="popup-content">
            <button class="close-btn">&times;</button>
            <h3>Add New Teacher</h3>

            <form id="teacherForm">
              <div class="input-group">
                <label>Teacher ID</label>
                <input
                  id="teachId"
                  name="id"
                  type="text"
                  placeholder="Enter ID"
                  required
                />
              </div>

              <div class="input-group">
                <label>Full Name</label>
                <input
                  id="teachName"
                  name="name"
                  type="text"
                  placeholder="Enter Name"
                  required
                />
              </div>

              <div class="input-group">
                <label>Email ID</label>
                <input
                  id="teachEmail"
                  name="email"
                  type="email"
                  placeholder="example@college.com"
                  required
                />
              </div>

              <div class="input-group">
                <label>Department</label>
                <select required id="teachDepart" name="department">
                  <option value="">Select Department</option>
                  <option value="BCA">BCA</option>
                  <option value="B.Tech">B.Tech</option>
                  <option value="MCA">MCA</option>
                </select>
              </div>

              <div class="input-group">
                <label>Subject</label>
                <input
                  id="teachSubj"
                  name="subj"
                  type="text"
                  placeholder="e.g. Java, DBMS"
                  required
                />
              </div>

              <div class="input-group">
                <label>Status</label>
                <select required id="teachStatus" name="status">
                  <option value="Active">Active</option>
                  <option value="Inactive">Inactive</option>
                </select>
              </div>

              <button type="submit" class="submit-btn">Add Teacher</button>
            </form>
          </div>
        </div>
        <div class="overviewSect">
          <h1 class="mainHead">Overview</h1>
          <div class="cardSect">
            <div id="cards" class="card1">
              <div class="data1">
                <h1 id="teach_Count">50</h1>
                <h2>Total teachers</h2>
              </div>
              <div id="card_logo" class="logo1">
                <i class="ri-presentation-line"></i>
              </div>
            </div>
            <div id="cards" class="card2">
              <div class="data2">
                <h1 id="ActivTeach_Count">55</h1>
                <h2>Active Teachers</h2>
              </div>
              <div id="card_logo" class="logo2">
                <i class="ri-presentation-fill"></i>
              </div>
            </div>
            <div id="cards" class="card3">
              <div class="data3">
                <h1>20</h1>
                <h2>Total Departments</h2>
              </div>
              <div id="card_logo" class="logo3">
                <i class="ri-building-4-fill"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="facul_content">
          <div id="topBar">
            <div class="search">
              <input type="text" id="searchBar" placeholder="search..." />
              <button id="searBtn">
                <i class="ri-search-line"></i> Search
              </button>
            </div>
            <div id="handler">
              <button id="addBtn">
                Add <i class="ri-add-circle-fill"></i>
              </button>
              <button id="clearBtn">
                Reset <i class="ri-reset-right-line"></i>
              </button>
            </div>
          </div>
          <div class="faculty_manag">
            <div id="mangerHead">
              <h1 id="headId" class="head">Teacher Id</h1>
              <h1 id="headName" class="head">Name</h1>
              <h1 id="headEmail" class="head">Email Id</h1>
              <h1 id="headDep" class="head">Department</h1>
              <h1 id="headSub" class="head">Subject</h1>
              <h1 id="headStatus" class="head">Status</h1>
            </div>
            <ul id="todo"></ul>
          </div>
        </div>
      </div>
    </div>
  </body>
  

  <script>
    let teachForm = document.querySelector(".popup-overlay"),
      form = document.getElementById("teacherForm"),
      todo = document.getElementById("todo");

   
    let list = JSON.parse(localStorage.getItem("teachersData")) || [];

       const render = () => {
      todo.innerHTML = list
        .map(
          (t, i) => `
      <li class="todoLists" data-index="${i}">
        ${["id", "name", "email", "department", "subj", "status"].map((k) => `<div class="head2">${t[k]}</div>`).join("")}
        <div class="actions">
          <div class="edit-btn actBtns"><i class="ri-pencil-fill"></i></div>
          <div class="delete-btn actBtns"><i class="ri-delete-bin-5-fill"></i></div>
        </div>
      </li>`,
        )
        .join("");
    };
    render();

    const updateCount = ()=>
    {
        let totalTeach = list.length;
        document.getElementById('teach_Count').innerText = totalTeach;

        let activTeach = list.filter((t)=> t.status == 'Active').length;
        document.getElementById('ActivTeach_Count').innerText = activTeach;

    }
      const save = () => {
      localStorage.setItem("teachersData", JSON.stringify(list));
      render();
      updateCount();
      };

      updateCount()
    
    document
      .getElementById("addBtn")
      .addEventListener("click", () => (teachForm.style.display = "flex"));
    document
      .querySelector(".close-btn")
      .addEventListener("click", () => (teachForm.style.display = "none"));
    document.getElementById("clearBtn").addEventListener("click", () => {
      if (confirm("Clear all?")) {
        list = [];
        save();
      }
    });

    
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      const data = Object.fromEntries(new FormData(form));
     

      list.push(data);
      save();
      teachForm.style.display = "none";
      form.reset();
    });

        todo.addEventListener("click", (e) => {
      const row = e.target.closest(".todoLists");
      if (!row) return;
      const index = row.getAttribute("data-index");

      if (e.target.closest(".delete-btn") && confirm("Delete this?")) {
        list.splice(index, 1);
        save();
      } else if (e.target.closest(".edit-btn")) {
        const teacher = list[index];
    
        Object.keys(teacher).forEach((key) => {
          if (form[key]) form[key].value = teacher[key];
        });

        teachForm.style.display = "flex";
        list.splice(index, 1);
        save();
      }
    });
  </script>
</html>
