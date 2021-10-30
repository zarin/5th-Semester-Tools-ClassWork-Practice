<html>
    <head>
<link href="bootstrap.min.css" rel="stylesheet">
<script src="bootstrap.bundle.min.js"></script>
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 my-5" style="height:200px;">
          <form action="signin_store.php" method="post">
            <div class="card">
                <div class="card-header">
                    <h3>Student Registration Form</h3>
</div>
                <div class="card-body">
                <div class="form-group">
                    <label>Student Name</label>
                    <input class="form-control" type="text" id="studentName" name="studentName">
</div>
               <div class="form-group">
                    <label>Student ID</label>
                    <input class="form-control" type="text" id="StudentId" name="StudentId">
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
<div class="col-lg-6 col-md-6 col-sm-12 my-5" style="height:200px;">
<table class="table table-bordered table-striped table-hover">
<tr>
            <td>ID</td>
            <td>Student Name</td>
            <td>Student ID</td>
            <td>Delete</td>
            <td>Edit</td>
        </tr>
        <?php
        include 'signin_database_connection.php';
        $select_query = "SELECT * FROM students";
        $result = mysqli_query($connection,$select_query);  
                        
                                   //or
         //$result = mysqli_query($connection,"SELECT * FROM students");
    
         while ($row_array=mysqli_fetch_array($result))
         {
             ?>
            <tr>
            <td><?php echo $row_array['Id'] ?> </td>
            <td><?php echo $row_array['studentName'] ?> </td>
            <td><?php echo $row_array['StudentId'] ?> </td>
            <td>
                <form action="signin_delete.php" method="post">
                    <input hidden name="id"value="<?php echo $row_array['Id']?>">
                    <input onclick="return confirm('Do you want to delete?')" class="btn btn-danger" type="submit"value="Delete">
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

</body>
</html>