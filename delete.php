<?php
include_once "hamid_function/function.php";

$id = $_GET['d'];
$delete = "DELETE FROM `students` WHERE st_id='$id'";

if(mysqli_query($connect,$delete)){
    
    echo "Data has been Deleted";
    header("location:all-user.php");
}

?>