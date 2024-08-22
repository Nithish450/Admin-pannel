<?php

require_once "../Connection/connection1.php";
$page=$_GET['page'];
$offset=($page-1)*5;
$sql = "SELECT * FROM employee ORDER BY id DESC LIMIT 5 OFFSET $offset";
$data = $con->query($sql);
$i = 1;

if ($data === FALSE) {
    echo "ERROR: " . $con->error;
} else if ($data->num_rows > 0) {
    foreach ($data as $user) {
        echo "
        <tr>
            <td>".$i."</td>
            <td>".$user['firstname']." ".$user['lastname']."</td>
            <td>".$user['status']."</td>
            <td><button id='btn-status'><a href='editemployee.php?id=" .$user['id']."' >"."Edit"."</a></button>
        <button id='btn-delete'><a href='deleteemployee.php?id=" .$user['id']."' >"."Delete"."</a></button></td>


        </tr>";
        
        $i++;
    }
} else {
    echo "Record not found";
}

$con->close();
?>
