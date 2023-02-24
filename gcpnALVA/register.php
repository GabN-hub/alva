<?php
//database connection
    $connect=mysqli_connect("localhost","root","","db_alva") or die("Connection failed");
    
    if(isset($_POST['register_btn'])) {
    
    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password'] && !empty($_POST['cbox']))) {   

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "insert into tbl_register(firstname,lastname,email,password) values('$firstname','$lastname','$email','$password')";

        $run = mysqli_query($connect,$query) or die(mysqli_error());

        if($run){
            ?>
            <script>
                alert("Successfully registered account!");
            </script>
            <?php
                header("refresh:0; url=customer_log.php");    
        } else {
            ?>
            <script>
                alert("Account not registered! Please try again.");
            </script>
            <?php
        }
    }
    else {
        ?>
            <script>
                alert("All fields are required.");
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
    <link rel="stylesheet" href="register.css">
    <title>Register Account</title>
</head>
<body>
<div class="container">
    <form method="POST" action="register.php">
        <div class="header">
            <h2>Create an Account</h2>
            <hr class="hr">
        </div>
        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="firstname" placeholder="Enter first name">
        </div>
        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="lastname" placeholder="Enter last name">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter valid email address">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>      
        <div class="check">
            <input type="checkbox" name="cbox"> I am aware that my personal information will be collected, and is protected by the Data Privacy Act of 2012
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="register_btn">REGISTER</button>
        </div>
        <p>
            Have an account already?<a href="customer_log.php">Click here to log in!</a>
        </p>
    </form>
</div>
</body>
</html>