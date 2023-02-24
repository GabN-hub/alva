<?php
    $connect=mysqli_connect("localhost","root","","db_alva") or die("Connection failed");
    if(!empty($_POST['save'])) //name ng button ay save
    {
        $email = $_POST['em'];
        $password = $_POST['pw'];
        $query = "select * from tbl_register where email='$email' and password='$password'"; //dapat manggaling from tbl_register since dito gumawa ng account customers
        
        $result = mysqli_query($connect,$query);
        $count = mysqli_num_rows($result);
        if($count>0) {
            ?>
            <script>
                alert("Successfully logged in");
            </script>
            <?php
                header("refresh:0; url=cus_index.html"); 
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
  <link rel="stylesheet" href="customer.css">
  <title>Customer Log in</title>
</head>
<body>
  <div class="container">
    <form method ="POST" action="customer_log.php">
    <div class="header">
        <h1>Log in to your account</h1>
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
    <div class="input-group">
        <p>Don't have an account yet? <a href="register.php">Click here to create an account.</a></p>
    </div>
  </div>
  </form>
</body>
</html>