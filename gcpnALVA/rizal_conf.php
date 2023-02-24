<?php
    $connect=mysqli_connect("localhost","root","","db_alva") or die("Connection failed");
    if(!empty($_POST['save']))
    {
        $Email = $_POST['em'];
        $Password = $_POST['pw'];
        // change email and password
        $query = "select * from tbl_employeeaccs WHERE Email = '$Email' and Password = '$Password'";

        
        $result = mysqli_query($connect,$query);
        $riz_e = 'alvarizal2010@gmail.com'; 
        $riz_p = 'alvaRIZAL';
        // $count = mysqli_num_rows($result);
        if($Email == $riz_e && $Password == $riz_p) {
            ?>
            <script>
                // change alert
                alert("Welcome! ALVA-Rizal!");
            </script>
            <?php
                // change url
                header("refresh:0; url=rizal_dbd.php"); 
        } else {
            ?>
            <script>
                alert("Incorrect email or password. Please try again");
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
  <link rel="stylesheet" href="cdo_conf.css">
  <!-- change title -->
  <title>Rizal Confirmation</title>
</head>
<body>
  <div class="container">
    <!-- change action -->
    <form method ="POST" action="rizal_conf.php">
    <div class="header">
        <!-- change span -->
        <h1>Welcome! <span>ALVA-RIZAL</span></h1>
        <hr class="hr">
    </div> 
    <div class="header">
        <p>Please confirm your account before viewing your dashboard<p>
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