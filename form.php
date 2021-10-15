<html>
    <head>
<link href="bootstrap.min.css" rel="stylesheet">
<script src="bootstrap.bundle.min.js"></script>
</head>
    <body class="bg-secondary">
        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 my-3">
          <form action="form_data_save.php" method="post">
            <div class="card">
                <div class="card-header">
                    <h3>Student Imformation Form</h3>
</div>
                <div class="card-body">
                <div class="form-group">
                    <label>Student Name</label>
                    <input class="form-control" type="text" id="studentName" name="studentName"placeholder="Enter Student Name">
</div>
<div class="form-group">
                    <label>Student ID</label>
                    <input class="form-control" type="text" id="studentId" name="studentId"placeholder="Enter Student ID">
</div>
<div class="form-group">
                    <label>Department</label>
                    <input class="form-control" type="text" id="Department" name="Department"placeholder="Enter the Department">
</div>
<div class="form-group">
                    <label>Semester</label>
                    <input class="form-control" type="text" id="Semester" name="Semester"placeholder="Enter the Semester">
</div>
<div class="form-group">
                    <label>Section</label>
                    <input class="form-control" type="text" id="Section" name="Section"placeholder="Enter the Section">
</div>
<div class="form-group">
                    <label>Phone Number</label>
                    <input class="form-control" type="text" id="phoneNumber" name="phoneNumber"placeholder="Enter the Phone Number">
</div>
<div class="form-group">
                    <label>Mail Id</label>
                    <input class="form-control" type="text" id="mail" name="mail"placeholder="Enter the Mail ID">
</div>
<div class="form-group">
                    <label>Gender</label>
                    <input class="form-control">
                    <select name="gender" id="gender">
                                <option>Male</option>
                                <option>Female</option>
                                </select>
</div>
<div class="form-group">
                    <label>Password</label>
                    <input required class="form-control" type="password" id="password" name="password"placeholder="Enter the Password">
</div>
</div>
</div>
                <div class="card-footer">
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" id="submitButton" name="submitButton">
</div>
</div>
</form>
</div>
<div class="col-lg-9 col-md-9 col-sm-18 my-3" style="height:200px;">
<table class="table table-bordered table-striped table-hover bg-white">
<tr>
            <td>ID</td>
            <td>Student Name</td>
            <td>Student ID</td>
            <td>Department</td>
            <td>Semester</td>
            <td>Section</td>
            <td>Phone Number</td>
            <td>Mail Id</td>
            <td>Gender</td>
            <td>Delete</td>
            <td>Edit</td>
        </tr>
        <?php
        include 'form_database_connect.php';
        $select_query = "SELECT * FROM students_information";
        $result = mysqli_query($connection,$select_query);  
                        
                                   //or
         //$result = mysqli_query($connection,"SELECT * FROM students");
    
         while ($row_array=mysqli_fetch_array($result))
         {
             ?>
            <tr>
            <td><?php echo $row_array['Id'] ?> </td>
            <td><?php echo $row_array['studentName'] ?> </td>
            <td><?php echo $row_array['studentId'] ?> </td>
            <td><?php echo $row_array['Department'] ?> </td>
            <td><?php echo $row_array['Semester'] ?> </td>
            <td><?php echo $row_array['Section'] ?> </td>
            <td><?php echo $row_array['phoneNumber'] ?> </td>
            <td><?php echo $row_array['mail'] ?> </td>
            <td><?php echo $row_array['gender'] ?> </td>
            <td>
                <form action="form_delete.php" method="post">
                    <input hidden name="id"value="<?php echo $row_array['Id']?>">
                    <input onclick="confirm('Do you want to delete?')" class="btn btn-danger" type="submit"value="Delete">
         </form>
            <td><a class="btn btn-success" href="edit.php?id=<?php echo $row_array['Id']?>">Edit</a>
        </tr>  
        <?php             
         } 
         ?>
</table>
</div>
</div>
</div>  
</div>
</body>
</html>