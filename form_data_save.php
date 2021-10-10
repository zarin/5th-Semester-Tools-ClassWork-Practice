<?php
session_start();
getData();/*Function is being called*/

function getData()
{
    $studentName = $_POST['studentName'];
    $studentId = $_POST['studentId'];
    $Department = $_POST['Department'];
    $Semester = $_POST['Semester'];
    $Section = $_POST['Section'];
    $phoneNumber = $_POST['phoneNumber'];
    $mail = $_POST['mail'];
    $gender = $_POST['gender'];


    include "form_database_connect.php";

    $insert_query="INSERT INTO students_information(studentName,studentId,Department,Semester,Section,phoneNumber,mail,gender) values('$studentName','$studentId','$Department','$Semester','$Section','$phoneNumber','$mail','$gender')";
    $insert_query=mysqli_query($connection,$insert_query);

    if($insert_query)
    {
        echo 'Data has been saved successfully';
    }
    else
    {
        echo 'Data has not been saved successfully';
    }
    ?>
    <table border="1" style="border-collapse: collapse">
    <tr>
            <td>Student Name</td>
            <td>Student Id</td>
            <td>Department</td>
            <td>Semester</td>
            <td>Section</td>
            <td>Phone Number</td>
            <td>Mail Id</td>
            <td>Gender</td>
        </tr>
        <tr>
            <td><?php echo $studentName ?></td>
            <td><?php echo $studentId ?></td>
            <td><?php echo $Department ?></td>
            <td><?php echo $Semester ?></td>
            <td><?php echo $Section ?></td>
            <td><?php echo $phoneNumber ?></td>
            <td><?php echo $mail ?></td>
            <td><?php echo $gender ?></td>
        </tr>
    </table>
    <?php
}

?>