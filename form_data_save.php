<?php
session_start();
getData();/*Function is being called*/

function getData()
{
    $studentName = $_POST['studentName'];
    $studentId = $_POST['studentId'];
    $Department = $_POST['Department'];
    $Semester = $_POST['Semester'];
    $mail = $_POST['mail'];
    $gender = $_POST['gender'];


    include "form_database_connect.php";

    $insert_query="INSERT INTO students_information(studentName,studentId,Department,Semester,mail,gender) values('$studentName','$studentId','$Department','$Semester','$mail','$gender')";
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
header("location:form.php");
?>
    