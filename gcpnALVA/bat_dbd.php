<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    //CHANGE TABLE
    $query = "SELECT * FROM `tbl_apt_batangas` WHERE CONCAT(`no`, `firstname`, `lastname`, `email`,`contact`,`address`,`type_visa`,`date`,`time`,`type_apt`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    //change table
    $query = "SELECT * FROM `tbl_apt_batangas`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "db_alva");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

// if(isset($_POST['submit'])) {
//     $conn = mysqli_connect("localhost", "root", "", "db_alva");
//     $id = $_POST['id'];

//     $query = "SELECT * FROM tbl_apt_batangas WHERE id = $id";
//     $result = mysqli_query($conn, $query);
//     $row = mysqli_fetch_assoc($result);

//     $query = "INSERT INTO tbl_appr_batangas firstname,lastname,email,contact,address,type_visa,date,time,type_apt) values('$firstname','$lastname','$email','$contact','$address','$type_visa','$date','$time','$type_apt')";
//     mysqli_query($conn, $query);

// }

?>

<!DOCTYPE html>
<html>
    <head>
        <!-- change title -->
        <title>Batangas Dashboard</title>
        <link rel="stylesheet" href="dbd.css">
    </head>
    <body>
    <!-- Navbar -->
    <div class="container">
        <div class="home"><a href="emp_index.html">Return to homepage</a></div>
        <div class="approve"><a href="">Approved Appointments</a></div>
        <div class="logout"><a href="index.html">Logout</a></div>
    </div>
    <div class="header">
        <!-- change h1 -->
        <h1>Batangas - Appointments</h1>
    </div>

        
        <!-- change action -->
         
        <form action="bat_dbd.php" method="post">
            <div class="search">
                <input type="text" name="valueToSearch" placeholder="Value To Search">
                <input type="submit" name="search" value="Search" class="search-btn">
            </div>
            
            <table class="center">
                <tr>
                    <th>No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>VISA type</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Solo/Group</th>
                    <th>Status</th>
                </tr>        

                <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['no'];?></td>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['contact'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['type_visa'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['type_apt'];?></td>
                    <td>
                        <!-- <button type="submit" name="submit">Approve</button>
                        <button>Cancel</button> -->
                        <input type="radio" name="status" value="approve">Approve
                        <input type="radio" name="status" value="cancel">Cancel
                    </td>
                </tr>
                    <?php endwhile;?>
             </table>
        </form>
    </body>
</html>
