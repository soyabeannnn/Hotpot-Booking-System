<?php
require 'connection.php';
require 'safety.php';
include 'header2.php'; 
?>
<!DOCTYPE html>
<html>
<head>
        <title>Hotto | Home</title>
		<link rel="shortcut icon" type="image/x-icon" href="image/favicon.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="page-container">    

<?php 
$CustomersID=$_SESSION["CustomersID"];
$UserData=mysqli_query($conn, "SELECT * FROM customers WHERE CustomersID='$CustomersID'");
$GetCustomers=mysqli_fetch_array($UserData);

$Status = $GetCustomers['Status'];

// Check if query executed successfully
// Display user information and buttons
// Adding buttons for customers
if ($Status === 'Customer') { ?>
    <div class="customer-container">
        <div class="customer-info">
            <div class="customer-name" style="font-size:8vw"> <?php echo $GetCustomers['Name']; ?> </div>
            <div class="customer-id" style="font-size:20px">CustomerID: <?php echo $GetCustomers['CustomersID']; ?></div>
        </div>
        <div class="customer-buttons">
            <button class="button" style="vertical-align:middle; font-size:20px" onclick="location.href='booking.php'">Book Now</button>
            <button class="button booking-history" style="vertical-align:middle; font-size:20px" onclick="location.href='bookinghistory2.php'">Booking History</button>
        </div>
<?php } elseif ($Status === 'Admin') { ?>
    <div class="customer-container">
        <div class="customer-info">
            <div class="admin-status"><?php echo $GetCustomers['Status']; ?></div>
            <div class="customer-name" style="font-size:8vw"><?php echo $GetCustomers['Name'];?></div>
            <div class="customer-id" style="font-size:20px">AdminID: <?php echo $GetCustomers['CustomersID']; ?></div>
        </div>
        <div class="customer-buttons">
            <button class="button" style="vertical-align:middle" onclick="location.href='abooking.php'">View Booking</button>
        </div>
    </div>
<?php } ?>
</div>
</div>
<?php include 'footer.php' ?>
<div class="image-container">
    <img class="hero-image" src="image/profileheader.jpg" alt="Hero Image">
</div> <!-- Close image-container div -->
<style>
    .container {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        width: 60%;
        margin-right: 10%;
        text-align: left;
    }

    .customer-info, .customer-buttons {
        align-items: flex-start; /* Align items to the left */
    }

    .admin-status {
        position: absolute;
        top: 580px;
        right: 200px; /* Adjust this value to move further to the right */
        color: #800000;
    }

    .customer-name,
    .admin-id {
        margin-top: 335px;
    }

    .customer-id {
        margin-top: 0px;
        font-size: 20px; /* Adjust font size as needed */
    }

    .customer-buttons button {
        margin-right: 30px;
        margin-top: 20px;
        background-color: #800000;
        color: white;
        border: none;
        padding: 20px 40px; /* Adjust padding as needed */
        font-size: 20px; /* Adjust font size as needed */
        cursor: pointer;
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        border-radius: 20px;
        font-family: 'Arial', sans-serif; /* Change the font family here */
        font-weight: bold;
    }

    .customer-buttons button.booking-history {
        background-color: #000000;
    }

    .customer-name,
    .admin-id,
    .admin-status,
    .customer-id {
        font-weight: bold;
        font-family: 'Arial', serif;
    }

    .customer-buttons button:after {
        content: '';
        display: block;
        width: 100%;
        border-bottom: 2px solid transparent; /* Invisible line */
    }

    .hero-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: auto;
        max-height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    body {
        margin: 0;
        padding: 0;
    }

    i {
        font-size: 30px;
        width: 35px;
    }

    p span {
        display: inline;
    }

    .navbar {
        display: flex;
        align-items: center;
        padding: 0;
        background-color: #ffffff; 
    }

    .nav-list {
        display: flex;
        gap: 20px;
        flex: 1;
        list-style-type: none;
    }

    .nav-link {
        color: #822727ff;
        font-weight: bold;
        font-family: sans-serif;
        font-size: 18px;
        padding-top: 25px;
        margin-right: 20px;
        text-decoration: none; /* Add this line to remove the underline */
    }

    .nav-link:hover {
        color: black; 
    }

    .page-container {
        display: flex;
        justify-content: center; /* Center the container horizontally */
        width: 80%; /* Adjust as needed */
        margin: 0 auto; /* Center the container horizontally */
    }

    .customer-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start; /* Align items to the left */
        width: 100%; /* Adjust as needed */
        margin-right: 25px; /* Move the container to the right */
        margin-bottom: 50px; /* Ensure there's space between the container and the footer */
    }
</style>

</body>
</html>
