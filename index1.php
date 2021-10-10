<html>
    <head>
        <body>
            <div class="menu-container">
                <a href="home.html">Home</a>
                <a href="contact.html">Contact</a>  
            </div>
            <div class="banner-container">
                <img src="C:\xampp\htdocs\Tools & Technologies for Internet Programming\banner.jpg">
            </div>
            <div class="paragraph-container">
            <p>Hello World.We are students of 5BF.</p>
            <h1>This is header 1.</h1>
            <h2>This is header 2.</h2>
            <h3>This is header 3.</h3>
            <h4>This is header 4.</h4>
            <h5>This is header 5.</h5>
            <h6>This is header 6.</h6>
             </div>
             <div class="table-container">
              <table border="1">
                  <th>1</th>
                  <th>2</th>
                  <th>3</th>
              </thead>
              <tbody>
                  <tr>
                      <td>Column 1</td>
                      <td>Column 2</td>
                      <td rowspan="2">Column 3</td>
                  </tr>
                  <tr>
                    <td>Column 1</td>
                    <td>Column 2</td>
                    <!-- <td>Column 2</td> -->
                  
                </tr>
                <tr>
                    <td colspan="3">Column 1</td> 
                    <!-- <td>Column 2</td> -->
                    <!-- <td>Column 3</td> -->   
                </tr>
              </tbody>
            </table>
            </div>
            <div class="form-container">
                <form action="store.php" method="post">
                    <table>
                        <tr>
                            <td>Student Name</td>
                            <td><input name="studentName" required id="studentName" type="text" placeholder="Enter Student Name"></td>
                        </tr>
                        <tr>
                            <td>Student ID</td>
                            <td><input name="studentId" required id="studentId" type="text" placeholder="Enter Student ID"></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                                <select name="gender" id="gender">
                                <option>Male</option>
                                <option>Female</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input required type="password" name="password"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </body>
    </head>
</html>