<html>
    <head>
        <body>
        <link rel="stylesheet"href="form_style.css">
        <div class="info">
            <title>Student Imformation Form</title>
            <div class="form-box">
                <form action="form_data_save.php" method="post">
                <div class="title">
                <h3>Student Information Table</h3>
            <table class="input-group">
            <tr>
               <td>Student Name</td>
                 <td><input name="studentName" class="Name" required id="studentName" type="text" placeholder="Enter Student Name"></td>
                    </tr>
                        <tr>
                            <td>Student ID</td>
                            <td><input name="studentId" class="Id" required id="studentId" type="text" placeholder="Enter Student ID"></td>
                        </tr>
                        <tr>
                            <td>Department</td>
                            <td><input name="Department" class="Dept" required id="Department" type="text" placeholder="Enter the Department"></td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td><input name="Semester" class="Semester" required id="Semester" type="text" placeholder="Enter the Semester"></td>
                        </tr>
                        <tr>
                            <td>Section</td>
                            <td><input name="Section" class="Section" required id="Section" type="text" placeholder="Enter the Section"></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input name="phoneNumber" class="phoneNumber" required id="phoneNumber" type="text" placeholder="Enter the Phone Number"></td>
                        </tr>
                        <tr>
                            <td>Mail Id</td>
                            <td><input name="mail" class="mail" required id="mail" type="text" placeholder="Enter the Mail Id"></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td class="Gender">
                                <select name="gender" id="gender">
                                <option>Male</option>
                                <option>Female</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input required type="password" class="Password" name="password"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" class="Submit" name="submit" value="Submit"></td>
                        </tr>
</table>
</form>  
</div>       
</body>
</head>
</html>