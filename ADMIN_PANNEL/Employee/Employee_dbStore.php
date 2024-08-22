<?php
require_once "../Connection/connection1.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
   $firstname= ucfirst($_POST["fname"]);
   $lastname=ucfirst($_POST["lname"]);
   $password=$_POST["password"];
   $status=ucfirst($_POST["status"]);
   $hashed_password=password_hash($password,PASSWORD_DEFAULT);

$sql="INSERT INTO employee(firstname,lastname,password,status) VALUES('$firstname','$lastname','$hashed_password','$status')";

if($con->query($sql)===TRUE){
   header("Location: Employee_listtodo.php?page=1");
}
else{
   echo"Error".$sql. "<br>" .$con->error;
}

}
$con->close();


?>