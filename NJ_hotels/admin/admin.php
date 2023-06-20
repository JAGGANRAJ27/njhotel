<?php

include '../config.php';
session_start();

// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){

}else{
  header("location: http://localhost/nj_hotels/index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <script src="https://kit.fontawesome.com/87d417b9e2.js" crossorigin="anonymous"></script>
    <title>NJ Hotels</title>
</head>

<body>
    <div id="mobileview">
        <h5>Admin panel doesn't show in mobile view</h4>
    </div>
  
    <nav class="uppernav">
        <div class="logo">
            <p>NJ Hotels | Admin Panel</p>
        </div>
        <div class="logout">
        <a href="../logout.php"><button class="btn btn-primary">Logout</button></a>
        </div>
    </nav>
    <nav class="sidenav">
        <ul>
            <li class="pagebtn active"><i class="fa fa-sharp fa-solid fa-bars"></i>&nbsp&nbsp&nbsp Dashboard</li>
            <li class="pagebtn"><i class="fa fa-sharp fa-solid fa-hotel"></i>&nbsp&nbsp&nbsp Room Booking</li>
            <li class="pagebtn"><i class="fa fa-sharp fa-solid fa-wallet"></i>&nbsp&nbsp&nbsp Payment</li>            
            <li class="pagebtn"><i class="fa fa-sharp fa-solid fa-door-open"></i>&nbsp&nbsp&nbsp Rooms</li>
        </ul>
    </nav>

    <div class="mainscreen">
        <iframe class="frames frame1 active" src="./dashboard.php" frameborder="0"></iframe>
        <iframe class="frames frame2" src="./roombook.php" frameborder="0"></iframe>
        <iframe class="frames frame3" src="./payment.php" frameborder="0"></iframe>
        <iframe class="frames frame4" src="./room.php" frameborder="0"></iframe>
    </div>
</body>

<script src="./javascript/script.js"></script>

</html>
