<?php
//database connection
    $connect=mysqli_connect("localhost","root","","db_alva") or die("Connection failed");
    
    if(isset($_POST['submit'])) {
    
    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['address']) && !empty($_POST['type_visa']) && !empty($_POST['date']) && !empty($_POST['time']) && !empty($_POST['type_apt'] && !empty($_POST['cbox']))){   

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $type_visa = $_POST['type_visa'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $type_apt = $_POST['type_apt'];

        $query = "insert into tbl_apt_CDO(firstname,lastname,email,contact,address,type_visa,date,time,type_apt) values('$firstname','$lastname','$email','$contact','$address','$type_visa','$date','$time','$type_apt')";

        $run = mysqli_query($connect,$query) or die(mysqli_error());

        if($run){
            ?>
            <script>
                alert("Form submitted successfully! Please wait for appointment status via email");
            </script>
            <?php
                header("refresh:0; url=cus_index.html");    
        } else {
            ?>
            <script>
                alert("Form not submitted!");
            </script>
            <?php
        }
    }
    else {
        ?>
            <script>
                alert("All fields are requried");
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
    <link rel="stylesheet" href="cdo_apt.css">
    <title>CDO-Appointment</title>
</head>
<body>
    <div class="container">
        <form action="cdo_apt.php" method="post">
        <div class="header">
            <h2>CDO - Appointment</h2>
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
            <label>Contact number</label>
            <input type="text" name="contact" placeholder="Enter your cellpone number"> 
        </div>
        <div class="input-group">
            <label>Address</label>
            <input type="text" name="address">
        </div>
        <div class="input-group">
            <label>Type of VISA</label>
            <select name="type_visa">
                <option value="student">Student VISA</option>
                <option value="tourist">Tourist VISA</option>
                <option value="partner">Partner VISA</option>
                <option value="guardian">Guardian VISA</option>
                <option value="business">Business VISA</option>
            </select>
        </div>
        <div class="input-group">
            <label>Appointment Date</label>
            <input type="date" name="date">
        </div>
        <div class="input-group">
            <label>Appointment Time</label>
            <select name="time">
                <option value="8-9AM">8:00-9:00 AM</option>
                <option value="9-10AM">9:00-10:00 AM</option>
                <option value="10-11AM">10:00-11:00 AM</option>
                <option value="12-1PM">12:00-1:00 PM</option>
                <option value="1-2PM">1:00-2:00 PM</option>
                <option value="2-3PM">2:00-3:00 PM</option>
                <option value="3-4PM">3:00-4:00 PM</option>
                <option value="4-5PM">4:00-5:00 PM</option>
            </select> 
        </div>
        <div class="input-group" id="radio">
        <label>Appointment Type</label>
            <div class="radio">
                <input type="radio" name="type_apt" value="Solo">Solo
                <input type="radio" name="type_apt" value="Group">Group (Maximum of 5)
            </div>
        </div>
        <div class="check">
            <input type="checkbox" name="cbox" id=""> I agree to the <a href="./img/appointmnet-tc.jpg">terms and conditions</a>
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="submit">SUBMIT</button>
        </div>

        </form>
    </div>
</body>
</html>