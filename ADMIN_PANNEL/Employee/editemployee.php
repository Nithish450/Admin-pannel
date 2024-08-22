<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"media="screen" href="styles.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">


    <title>Task</title>
</head>
<body>
    <?php
    require_once "../Connection/connection1.php";
    $id=$_GET['id'];
    $sql="SELECT * FROM employee WHERE id=$id";
    $data=$con->query($sql);
    $row=$data->fetch_assoc();
    
    ?>

    <section id="main">
    <div id="navigation">
        <div id="name-section">
        <h2>NITHISH G</h2>
    </div>
        <h3 id="nav">Navigation</h3>
        <ul  id="nav-elements">
             <li id="nav-elements1"><i class="fa-solid fa-house"></i><a href="../Dashboard/index.html">Dashboard</a></li>
            <li id="nav-elements1"><i class="fa-solid fa-bars-progress"></i><a href="../Task/Addtodo.php">Task</a></li>
            <li id="nav-elements1"><i class="fa-solid fa-list-check"></i><a href="../TaskList/Listtodo.php">List</a></li>
            <li>Todo<li>
            <li id="nav-elements1"><i class="fa-solid fa-list-check"></i><a href="../Employee/Employee_Listtodo.php?page=1">Employee</a></li>
                
            
        </ul>

    </div>
    <div id="dashboard">
        <div id="head">
            <i class="fa-solid fa-bars"></i>
            <input type="text" placeholder="search" id="search">
            <button id="search-button">Search</button>
            <i class="fa-regular fa-bell"></i>
            <i class="fa-solid fa-border-all"></i>
            <i class="fa-solid fa-gear"></i>
            <i class="fa-solid fa-moon"></i>
            <i class="fa-solid fa-expand"></i>
            <div id="img1">
                <img src="E:\WEB_DEVELOPMENT\HTML\header\Index-Gp-Bootstrap\banner.jpg" id="image">
                <h2 id="name">NITHISH G</h2>
            </div>
        </div>
        <h2 id="dashboard-title">Edit Employee</h2>
        <form method="POST" action="Employee_dbedit.php?id=<?php echo $id = $_GET['id']; ?>">
        <div id="add-task">
            <div id="elements">
            <label>First Name</label><br>
            <input type="text" placeholder="First Name" id="add-task-elements" name="fname"  value="<?php echo $row['firstname']; ?>"><br>
        </div>
        <div id="elements">
            <label>Last Name</label><br>
            <input type="text" placeholder="Last Name" id="add-task-elements" name="lname"  value="<?php echo $row['lastname']; ?>"><br>
        </div>
         
        <div id="elements">
            <label>Status</label><br>
            <input type="text" placeholder="Status  " id="add-task-elements" name="status"  value="<?php echo $row['status']; ?>">
        </div>
        <div id="elements">
        <input type="submit" id="add-button">
            
        
        </div>
        </div>
</form>
    </div></section>
    
</body>
</html>
<script>
    function confirm(){
        swal({
  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    swal("Deleted!", "Your imaginary file has been deleted.", "success");
  } else {
    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});
    }
    </script>