<?php
include 'signin_database_connection.php';
$id=$_POST['id'];
$delete_query="DELETE FROM students WHERE id='$id'";
$result=mysqli_query($connection,$delete_query);
if($result)
{
    echo 'Data has been deleted successfully';
}
else
{
    echo 'Failed';
}
header("location:signin.php");
?>