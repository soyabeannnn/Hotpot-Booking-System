<?php require 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>   
  
<!-- Header -->
<?php
//This is to validate whether if this is an admin or normal user
//If the status has "Admin" then it will show the admin header
$CustomersID=$_SESSION["CustomersID"];
$Data=mysqli_query($conn, "SELECT * FROM customers WHERE CustomersID='$CustomersID'");
$GetUser=mysqli_fetch_array($Data);


if ($GetUser['Status'] == "Customer") { ?>
<header>
    <nav class="navbar">
      <a href="home2.php"><img src="image/hottologo.png" class="logo"/>
      </a>
        <ul class="nav-list">
          <li class="nav-item"><a class="nav-link" href="booking.php">Create Booking</a></li>
          <li class="nav-item"><a class="nav-link" href="#">History</a></li>
      </ul>
        <a class="log-out" href="logout.php">Log Out</a> 
    </nav>
</header>
</html>
<?php } else if ($GetUser['Status'] == "Admin") { ?>
  <header>
    <nav class="navbar">
      <a href="home2.php"><img src="image/hottologo.png" class="logo"/>
      </a>
        <ul class="nav-list">
          <li class="nav-item"><a class="nav-link" href="abooking.php">History</a></li>
      </ul>
        <a class="log-out" href="logout.php">Log Out</a> 
    </nav>
</header>
<?php } ?>


<style>

  .navbar {
    display:flex;
    align-items: center;
    padding: 0;
    background-color: #ffffff; 
  }

  .logo{
    padding:0;
    margin-left: 20px;
    width: 80px;
  }

  .nav-list{
    display: flex;
    gap: 20px;
    flex: 1;
    list-style-type: none;
  }

  .nav-link{
    color: #822727ff;
    font-weight: bold;
    font-family: sans-serif;
    font-size: 18px;
    padding-top:25px ;
    margin-right:20px ;
  }

  .nav-link:hover {
        color: black; 
    }

  .log-out{
    padding: 10px 15px;
    margin-right: 50px;
    border-radius: 5px;
    background-color: #822727ff;
    color: white;
    font-family: sans-serif;
    font-weight: bold;
    text-decoration: none;
    font-size: 15px;
  }
</style>
