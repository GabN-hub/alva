<?php
    $connect=mysqli_connect("localhost","root","","db_alva") or die("Connection failed");
    if(!empty($_POST['save']))
    {
        $Email = $_POST['em'];
        $Pass = $_POST['pw'];
        $query = "select * from tbl_employeeaccs where Email='$Email' and Password='$Pass'";
        
        $result = mysqli_query($connect,$query);
        $count = mysqli_num_rows($result);
        if($count>0) {
            ?>
            <script>
                alert("Successfully logged in");
            </script>
            <?php
                header("refresh:0; url=emp_index.html"); //change url sa employee LOGGED in UI with dahsboard sa nav bar
        } else {
            ?>
            <script>
                alert("Login not successful");
            </script>
            <?php
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="employee.css">
  <title>Employee Log in</title>
</head>
<body>
  <div class="container">
    <form method ="POST" action="employee_log.php">
    <div class="header">
        <h1>Welcome!</h1>
        <hr class="hr">
    </div>    
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="em" placeholder="Enter a valid email address">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="pw" placeholder="Enter password">
    </div>
    <div class="input-group">
        <input type="submit" value="LOG IN" name="save" class="btn">
    </div>
  </div>
  </form>
</body>
</html>