<?php
include 'form_database_connect.php';
$id=$_POST['id'];
$delete_query="DELETE FROM students_information WHERE id='$id'";
$result=mysqli_query($connection,$delete_query);
if($result)
{
    echo 'Data has been deleted successfully';
}
else
{
    echo 'Failed';
}
header("location:form.php");
?>