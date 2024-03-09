<?php
//Required to connect database
require 'connection.php';
//Required to ensure session is running
require 'safety.php';

$chosenBooking =$_GET['BookingID'];

$sql = "SELECT * FROM booking WHERE BookingID='$chosenBooking'";
$result = mysqli_query($conn, $sql);
$GetData = mysqli_fetch_array($result);

if (isset($_POST['update'])){

    $newvalue = $_POST['status'];

    echo $newvalue;
    //Update Query
    $update = "UPDATE booking SET BookingStatus='$newvalue'
    WHERE BookingID='$chosenBooking'";
    $result1 = mysqli_query($conn, $update);

if ($result1) {
    echo "<script>alert('Status Updated!');
    window.location='abooking.php'</script>";
} else {
    echo "<script>alert('Status failed to update!');
    window.location='abooking.php'</script>";
}
}
?>

<html>
    <head>
        <title>Change Status | Hotto</title>
    </head>

    <?php include 'header2.php' ?>
    <body>
        <div class="margin">
        <center>
        <h1>Changing Booking Status for <?php echo $chosenBooking ?></h1>
        <form method="POST" action="" enctype="multipart/form-data">
                <?php
            $Status = $GetData['BookingStatus']; // Get the current status from the database

            $statusOptions = array(
                'Completed' => 'Completed',
                'Paid' => 'Paid',
                'Not Paid' => 'Not Paid',
                'Cancelled' => 'Cancelled'
            );

            foreach ($statusOptions as $value => $label) {
                $checked = ($Status === $value) ? 'checked' : '';
                echo '<label class="radio-label"><input type="radio" name="status" value="' . $value . '" ' . $checked . '>' . $label . '</label><br>';
            }
            ?>
            <span class="checkmark"></span><br>
                <input type="hidden" name="BookingID"
                value="<?php echo $chosenBooking; ?>" />
                <button type="submit" class=submit name="update" value="Submit">Submit</button>
            </form>
        </center>
        </div>
    </body>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</html>

<style>
    
    .margin{
        margin: 50px;
    }
    form button{
        border:none;
        width: 20%;
        padding-top: 15px;
        padding-bottom: 15px;
        margin-top: 30px;
        border-radius: 10px;
        background-color: black;
        color: white;
        font-size: 18px;
        font-weight: 600;
        cursor: pointer;
    }
    </style>
