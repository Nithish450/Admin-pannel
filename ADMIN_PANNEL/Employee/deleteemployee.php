<?php
require_once "../Connection/connection1.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM employee WHERE id ='$id'";
     $result = $con->query($sql);
     if ($result == TRUE) {
        header("Location: Employee_listtodo.php?page=1");
}else{
        echo "Error:" . $sql . "<br>" . $con->error;
    }




?>