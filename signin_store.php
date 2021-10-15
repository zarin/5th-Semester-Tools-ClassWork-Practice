<?php
session_start();
//echo '<pre>';
//print_r($_GET);
/*debugger*/
//var_dump();
getData();/*Function is being called*/

function getData()
{
    $studentName = $_POST['studentName'];
    $studentId = $_POST['StudentId'];


    include "signin_database_connection.php";

    $insert_query="INSERT INTO students(studentName,StudentId) values('$studentName','$studentId')";
    $insert_query=mysqli_query($connection,$insert_query);

    if($insert_query)
    {
        echo 'Data has been saved successfully';
    }
    else
    {
        echo 'Data has not been saved successfully';
    }
    
}
header("location:signin.php");
?>
