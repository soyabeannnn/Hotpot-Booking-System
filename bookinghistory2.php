<?php
require 'connection.php';
require 'safety.php';


    $uid = $_SESSION['CustomersID'];

class BookingHistory {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getBookingHistory() {
        $uid = $_SESSION['CustomersID'];
        $sql = "SELECT p.Name AS PackageName, c.Name, b.*
                FROM package p, customers c, booking b
                WHERE p.PackageID = b.PackageID
                AND c.CustomersID = b.CustomerID
                AND c.CustomersID = '$uid'";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
}

class BookingView {
    private $bookingHistory;

    public function __construct($bookingHistory) {
        $this->bookingHistory = $bookingHistory;
    }

    public function displayBookingHistory() {
        ?>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Booking History | Hotto</title>
        </head>
        <body>

        <?php
            include 'header2.php';
        ?>
        <section>
            <div class="heading-container">
                <h1 class="heading">Booking History</h1><br>
            </div>

            <table width="85%" border="0" align="center" style="font-size:16px">
                <tr>
                    <th>Dining date</th>
                    <th>Time</th>
                    <th>Name</th>
                    <th>Menu</th>
                    <th>Pax</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td colspan="7"><hr></td>
                </tr>

                <?php
                while ($rows = mysqli_fetch_assoc($this->bookingHistory)) {
                    $Date = $rows['Date'];
                    $Time = $rows['Time'];
                    $Name = $rows['Name'];
                    $PackageName = $rows['PackageName'];
                    $AdultPax = $rows['AdultPax'];
                    $ChildPax = $rows['ChlidPax'];
                    $Status = $rows['BookingStatus'];
                    ?>

                    <tr>
                        <td><?php echo $Date; ?></td>
                        <td><?php echo $Time ?></td>
                        <td><?php echo $Name; ?></td>
                        <td><?php echo $PackageName; ?></td>
                        <td><?php echo $AdultPax . " adult(s), " . $ChildPax . " child(ren)"; ?></td>
                        <td><?php echo $Status; ?></td>
                        <td>
                        <button class="delete-button"><a href="abookingdrop.php?BookingID=<?php echo $rows['BookingID']; ?>"><img src="image/delete.png" alt="Delete" style="width: 20px; height: 20px;"></a></button>
                        <td>
                    </tr>
                    <tr>
                    <td colspan="7"><hr></td>
                    </tr>
                    <?php
                }
                ?>

            </table>

            <?php
            /*// Pagination
            $totalRecords = 9; 
            $recordsPerPage = 3; 
            $totalPages = ceil($totalRecords / $recordsPerPage);

            echo "<div class='pagination'>";
            for ($i = 1; $i <= $totalPages; $i++) {
                echo "<a href='?page=$i'>$i</a> ";
            }
            echo "</div>";*/
            ?>

        </section>
        </body>
        
                <?php include 'footer.php';?>
    
        </html>


        <style>
        .heading-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .heading {
            font-size: 30px;
            padding-bottom: 20px;
            margin-left: 120px; 
        }

        table {
        width: 85%;
        border-collapse: collapse;
        margin: 0 auto;
        font-size: 16px;
        }

        th, td {
        padding: 10px;
        text-align: center;
        }


        .pagination {
            text-align: center;
            margin-top:50px;
            margin-bottom: 50px;
            margin-left:700px;
        }

        .pagination a {
            color: black;
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #ccc;
            margin: 0 5px;
        }


        .pagination a.active {
            background-color: #ccc;
        }

        button{
            border: none;
        }

        .delete-button {
            margin-left: 15px; 
        
}


    
    </style>
        <?php
    }
}

// Usage
$bookingHistory = new BookingHistory($conn);
$bookingData = $bookingHistory->getBookingHistory();

$bookingView = new BookingView($bookingData);
$bookingView->displayBookingHistory();
?>

