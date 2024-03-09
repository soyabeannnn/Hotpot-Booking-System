<?php
    require 'connection.php';
    require 'safety.php';
    include 'header2.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
</head>
<body>

    <section class="container">
        <div class="title">
            <h1>Select Booking Time</h1>
        </div>

        <form action="booking.php" method="post">
            <div class="booking-details">
                <div class="input-box">
                    <label for="size">Party size</label>
                    <select name="sizeA" id="sizeA" required>
                        <option value="" disabled selected>Select no. of adults</option>
                        <option value="1A">1 Adult</option>
                        <option value="2A">2 Adult</option>
                        <option value="3A">3 Adult</option>
                        <option value="4A">4 Adult</option>                        
                        <option value="5A">5 Adult</option>
                        <option value="6A">6 Adult</option>
                        <option value="7A">7 Adult</option>
                        <option value="8A">8 Adult</option>
                        <option value="9A">9 Adult</option>
                        <option value="10A">10 Adult</option>
                    </select><br>

                    <select name="sizeK" id="sizeK" required>
                        <option value="0K">No children</option>
                        <option value="1K">1 Child</option>
                        <option value="2K">2 Child</option>
                        <option value="3K">3 Child</option>
                        <option value="4K">4 Child</option>
                        <option value="5K">5 Child</option>
                        <option value="6K">6 Child</option>
                        <option value="7K">7 Child</option>
                        <option value="8K">8 Child</option>
                        <option value="9K">9 Child</option>
                        <option value="10K">10 Child</option>
                    </select> <br>
                </div>

                <div class="input-box">
                    <label for="date">Dining date</label>
                    <input type="date" id="date" name="date" required><br>
                    <script>
                        var today = new Date().toISOString().split('T')[0];
                        document.getElementById("date").setAttribute("min", today);
                    </script>
                </div>

                <div class="input-box">
                    <label for="time">Time</label>
                    <select name="time" id="time" required>
                        <option value="" disabled selected>Select time</option>
                        <option value="1000">10:00am</option>
                        <option value="1100">11:00am</option>
                        <option value="1200">12:00pm</option>
                        <option value="1300">1:00pm</option>
                        <option value="1400">2:00pm</option>
                        <option value="1500">3:00pm</option>
                        <option value="1600">4:00pm</option>
                        <option value="1700">5:00pm</option>
                        <option value="1800">6:00pm</option>
                        <option value="1900">7:00pm</option>
                        <option value="2000">8:00pm</option>
                        <option value="2100">9:00pm</option>
                    </select><br>
                </div>

                <div class="input-box">
                    <label for="menu">Menu</label>
                    <select name="menu" id="menu" required>
                        <option value="" disabled selected>Select Package</option>
                        <option value="1">Package 1</option>
                        <option value="2">Package 2</option>
                        <option value="3">Package 3</option>
                        <option value="4">Package 4</option>
                        <option value="5">Package 5</option>
                        <option value="6">Package 6</option>
                    </select>
                </div>

                <div class="input-box">
                    <label for="table" >Table</label>
                        <select name="table" id="table" required>
                            <option value="" disabled selected>Select table</option>
                            <option value="A1">A1</option>
                            <option value="A2">A2</option>
                            <option value="A3">A3</option>
                            <option value="A4">A4</option>
                            <option value="A5">A5</option>
                            <option value="A6">A6</option>
                            <option value="A7">A7</option>
                            <option value="A8">A8</option>
                            <option value="A9">A9</option>
                            <option value="A10">A10</option>
                        </select>
                    </div>
            </div>
            <button name="submit" id="submit">Next</button>
            </div>
        </form>
    </section>
    <section class="footer">
    <?php include 'footer.php'?>
    </section>
    
    
</body>
</html>

<style>


    .container{
        display: flex;
        justify-content: center;
        align-content: center;
        font-family:sans-serif;
        flex-direction: column;
        align-items: center;

        margin-top: 100px;
        background-color: white;
        max-width: 50%;
        width: 100%;
        padding-bottom: 40px;
        padding-top:20px;
        padding-left:35px;
        padding-right:35px;
        border-radius: 5px;
        border: 1px solid black;
        box-shadow: 0px 10px 4px 0px rgba(0, 0, 0, 0.25);
        margin-bottom:150px;
        
    }

    .footer{
        width: 100%;
    }
    .container form .booking-details{
        display:flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    form button{
        border:none;
        width: 100%;
        padding-top: 15px;
        padding-bottom: 15px;
        margin-top: 30px;
        border-radius: 10px;
        background-color: orange;
        color: white;
        font-size: 18px;
        font-weight: 600;
        cursor: pointer;
    }

    form label{
        font-weight: 500;
    }

    form .booking-details .input-box{
        width: calc(100% / 2 - 20px);
        margin: 15px 0 10px 0;
    }


    .booking-details .input-box select{
        margin-top: 5px;
        height: 35px;
        width: 100%;
        outline: none;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding-left: 15px;
        padding-right: 15px;
        font-size: 16px;
        color: darkgrey;
    }

    .booking-details .input-box input{
        margin-top: 5px;
        height: 35px;
        width: 93%;
        outline: none;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding-left: 15px;
        font-size: 16px;
        color: darkgrey;
    }

</style>

<?php
// Define the Booking class
class Booking {
    // Properties
    private $conn;

    // Constructor
    public function __construct($connection) {
        $this->conn = $connection;
    }

    // Method to handle booking submission
    public function submitBooking($sizeA, $sizeK, $date, $time, $table, $menu) {
        // Define variables and set to empty values
        $sizeA = $this->sanitizeInput($sizeA);
        $sizeK = $this->sanitizeInput($sizeK);
        $date = $this->sanitizeInput($date);
        $time = $this->sanitizeInput($time);
        $table = $this->sanitizeInput($table);
        $menu = $this->sanitizeInput($menu);
        $uid = $_SESSION['CustomersID'];

        // Retrieve existing bookings
        $bookingData = mysqli_query($this->conn, "SELECT * FROM booking");
        $getBooking = mysqli_fetch_array($bookingData);

        // Check if the table is already booked for the given date and time
        if ($date == $getBooking['Date'] && $table == $getBooking['TableID'] && $time == $getBooking['Time']) {
            echo "<script>alert('This table has been booked, try a different table, date, or time. Try again.');
                window.location='booking.php'</script>";
        } else {
            // Insert the new booking into the database
            $query = "INSERT INTO booking VALUES ('', '$table', '$menu', '$uid', '', '$date', '$time', '$sizeA', '$sizeK')";
            $result = mysqli_query($this->conn, $query);
            echo "<script>alert('Registration Succeed.');
            window.location='receipt.php'</script>";
        }
    }

    // Method to sanitize input data
    private function sanitizeInput($data) {
        return mysqli_real_escape_string($this->conn, htmlspecialchars($data));
    }
}

// Initialize the Booking class with the database connection
$bookingHandler = new Booking($conn);

// Check if the form is submitted
if (isset($_POST["submit"])) {
    // Get form data
    $sizeA = $_POST['sizeA'];
    $sizeK = $_POST['sizeK'];
    $time = $_POST["time"];
    $date = $_POST["date"];
    $table = $_POST["table"];
    $menu = $_POST['menu'];
    
    // Submit the booking
    $bookingHandler->submitBooking($sizeA, $sizeK, $date, $time, $table, $menu);
}

// Store the booking ID in session
$bookingID = $conn->insert_id;
$_SESSION['bookingID'] = $bookingID;

?>


