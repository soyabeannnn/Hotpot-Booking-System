<?php
require 'connection.php';
//include 'header.php';

if (isset($_POST['CustomersID'])) {

	$ep = $_POST['ep'];
	$c_ep = $_POST['c_ep'];

	if($ep != $c_ep){
		echo "<script>alert('Confirm New Password must be the same as New Password');
		window.location='registration.php'</script>";
	} else {

        $CustomersID = $_POST['CustomersID'];
        $Password = $_POST['ep'];
        $Name = $_POST['Name'];
        $PhoneNumber = $_POST['PhoneNumber'];
        
        $register= "INSERT INTO customers
        (CustomersID,Password,Name,PhoneNumber,Status)
        VALUES 
        ('$CustomersID','$Password','$Name','$PhoneNumber','Customer')";
    
        $result = mysqli_query($conn, $register);
    
        if ($result) {
            echo "<script>alert('Registration Succeed.');
            window.location='login.php'</script>";
        } else {
            // Check if the reason for failure is duplicate entry
            if (mysqli_errno($conn) == 1062) {
                echo "<script>alert('This UserID already exists. Try again.');
                window.location='registration.php'</script>";
            } else {
                echo "<script>alert('Registration Failed.');
                window.location='registration.php'</script>";
            }
        }
    }
}
?>    

<html>
    <head>
    <title>Register</title>
    </head>
    <?php include 'header.php' ?>
	<body>
	    <div class="container">
	        <div class="register-box">

	            <h1>Register</h1>

                <form method="POST" action="registration.php" enctype="multipart/form-data">
	                <div style="display: flex;" >
	                    <div style="flex: 1;">

                            <label>CustomersID</label>
                            <input type="text" name="CustomersID" placeholder="Benji123" maxlength="12" required autofocus>
                            <br><br>

                            <label>Name</label>
                            <input type='text' name='Name' placeholder="Name" required >
                            <br><br>

                            <label>Password</label>
                            <input type="password" name="ep" placeholder="Password" id="password" required>
                            <br><br>

                            <label>Confirm Password</label>
                            <input type="password" name="c_ep" placeholder="Confirm Password" id="password" required>
                            <br><br>

                            <label>Phone Number</label>
                            <input type='text' name='PhoneNumber' placeholder="Phone Number" required>
                            
                        </div>
                    </div>
                    <br><br>
		            <button type="sumbit">Let's go</button><br><br>
	            </form>
	        <div class="signup-links">
                <span class="signup-link-alt">Already have an account?</span>
                <a class="register-signup-link custom-signup-link" href="login.php">Log In</a>
            </div>
        </div>	
    </div>
        <?php //include 'footer.php';?>
    </body>
   <?php include 'footer.php' ?>
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
            height: 100vh;
        }

        .register-box {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 700px;
            max-height: 80vh;
            overflow-y: auto;
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

        input[type="text"],
        input[type="password"],
		select{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 55%;
            padding: 10px;
			margin-left: 150px;
            background-color: #333333;
            color: #fff;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }

        .custom-signup-link {
        color: #007bff;
        text-decoration: none;
        padding-left: 2px;
        }

        .custom-signup-link:hover {
        text-decoration: underline;
        }

        .signup-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .signup-link-alt {
            color: #000;
			margin-right:300px;
        }

		.form-group {
            margin-left: 35px;
        }

		
		
    </style>
