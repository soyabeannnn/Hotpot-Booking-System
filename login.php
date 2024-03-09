<?php
//Required to connect database
require 'connection.php';
?>

<html>
	<head>
		<title>Login | Hotto</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"/>
</head>
    <?php include 'header.php' ?>

    <body>
    <div class="container">
        <div class="login-box">
    <h1>Login</h1>
        <!--action will proceed to loginprocess.php for extra processing-->
        <form action="login.php" method="post">
        <label>CustomerID</label>
        <input type="text" name="CustomersID" placeholder="CusID" size="25" required autofocus>
        <br><br>
        <label>Password</label>
        <input type="password" name="Password" placeholder="Password" size="25" required>
        <br><br>
        <button type="submit">Let's Go</button>
        <a class="signup-link" href="registration.php">New member?</a>
</form>
</div>
</div>
	
</body>
<?php include 'footer.php'?>
</html>
<?php
//Needed to connect the database
require 'connection.php';

//Indicates if a session has begun
session_start();

//Replacing data to enter the SQL query
if (isset($_POST['CustomersID'])) {
    $CustomersID = $_POST['CustomersID'];
    $Password = $_POST['Password'];

    $query = mysqli_query($conn,
        "SELECT * FROM customers WHERE CustomersID='$CustomersID' AND Password='$Password'");
    //Fetches results from SQL
    $row = mysqli_fetch_assoc($query);

    //Checks if the data exist in the database
    if (mysqli_num_rows($query) == 0 || $row['Password'] != $Password) {

        //if it doesn't exist it will show a pop up to indicate and return to login.php
        echo "<script>
                alert('The CustomerID or password is incorrect.');
                window.location = 'login.php';
            </script>";
    } else {
        $_SESSION['CustomersID'] = $row['CustomersID'];
        $_SESSION['Status'] = $row['Status'];
        header("Location: home2.php");
        exit(); // Exit after redirecting to prevent further execution
    }
}
?>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<style>
		body {
			margin: 0;
			background-image: url('images/Sign In.png');
			background-size: cover;
			background: linear-gradient(to top, #800000, #B03060);
		}

		.container {
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
		}

		.login-box {
			background-color: white;
			padding: 50px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			width: 500px;
		}

		h1 {
			text-align: center;
			margin-bottom: 20px;
			font-size: 30px;
			font-weight: bold;
		}

		form label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}

		form input[type="text"],
		form input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		button {
			width: 100%;
			padding: 10px;
			background-color: #333333;
			color: #fff;
			border: none;
			border-radius: 25px;
			cursor: pointer;
		}

		.signup-link {
		display: block;
		text-align: center;
		margin-top: 10px;
		color: #007bff;
		text-decoration: none;
	    }

		.signup-link:hover {
			text-decoration: underline;
		}
		
	</style>
</body>
</html>
