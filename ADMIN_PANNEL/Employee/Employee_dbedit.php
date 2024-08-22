<?php
require_once "../Connection/connection1.php";
$id = $_GET['id'];
if($_SERVER["REQUEST_METHOD"]=="POST"){

   $firstname= ucfirst($_POST["fname"]);
   $lastname=ucfirst($_POST["lname"]);
   $status=ucfirst($_POST["status"]);
   $hashed_password=password_hash($password,PASSWORD_DEFAULT);

   $sql = "UPDATE employee SET firstname='$firstname', lastname='$lastname',status='$status' WHERE id='$id'";


if($con->query($sql)===TRUE){
   header("Location: Employee_listtodo.php?page=1");
}
else{
   echo"Error".$sql. "<br>" .$con->error;
}

}
$con->close();


?>m