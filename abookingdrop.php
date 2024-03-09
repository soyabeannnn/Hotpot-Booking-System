<?php
//Required to connect database
require 'connection.php';
//Required to ensure session is running
require 'safety.php';

$chosenBooking =$_GET['BookingID'];

//Delete from item_request
$result = mysqli_query($conn,"DELETE FROM booking WHERE BookingID='$chosenBooking'");

//Pop up message
if(!$result){
    echo "<script>alert('The Booking and its data failed to be deleted.');
window.location='abooking.php'</script>";
}else{
echo "<script>alert('The Booking and its data has been deleted.');
window.location='abooking.php'</script>";
}
?>