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
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


    <title>View Task</title>
</head>
<body>
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
        <h2 id="dashboard-title">Task list</h2>
        <div><button id="add1-button"><a href="Employee_Addtodo.php">Add</a></button></div>
        <div id="task-display">
        <table>
            <th>No.</th>
            <th>Name</th>
            <th>Status</th>
            <th>Action</th>
           
            <?php require_once "Employee_dbList.php" ?>
        </table>
    </div>
        <div id="pagination">
            <a href="" id="page-arrow">&laquo;</a>
            <button id="page"><a href="Employee_Listtodo.php?page=1" class="pageno <?php echo ($page == 1) ? 'active':''; ?>">1</a></button>
            <button id="page"><a href="Employee_Listtodo.php?page=2" class="pageno <?php echo ($page == 2) ? 'active':''; ?>">2</a></button>
            <button id="page"><a href="Employee_Listtodo.php?page=3" class="pageno <?php echo ($page == 3) ? 'active':''; ?>">3</a></button>
            <button id="page"><a href="Employee_Listtodo.php?page=4" class="pageno <?php echo ($page == 4) ? 'active':''; ?>">4</a></button>
            <button id="page"><a href="Employee_Listtodo.php?page=5" class="pageno <?php echo ($page == 5) ? 'active':''; ?>">5</a></button>
            <a href="" id="page-arrow1">&raquo;</a>

        </div>
    </div></section>
    
</body>
</html>
            <script type='text/javascript'>
                function confirm(){
                    toastr.info('Deleted Sucessfully..!');

        }
    </script>