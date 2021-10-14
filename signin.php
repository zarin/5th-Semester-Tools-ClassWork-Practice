<?php
include 'header.php';
?>
<form method="post" action="signin_store.php">
    <table>
        <tr>
            <td>Name</td>
            <td>
                <input name="studentName" placeholder="Enter student name" id="studentName">
            </td>
        </tr>
        <tr>
            <td>Roll</td>
            <td>
                <input name="StudentId" placeholder="Enter roll" id="StudentId">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submitButton" value="Save">
            </td>
        </tr>
    </table>
</form>

<?php
include 'footer.php';
?>

