<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking | Hotto</title>
</head>
<body>
    <?php require 'connection.php';
    require 'safety.php';
    include 'header2.php'?>

    <section class="container">
        <img src="image/favicon.png" alt="Check mark">

        <h3>Thank you for choosing Hotto</h3>
        <span>Arigatou gozaimasu~ We're thrilled you've chosen to dine with us. Your support means the world to us, and we can't wait to serve you an unforgettable experience. Until we meet again.</span><br>
        <span class="team">The Hotto Team</span><br>
        <input type="submit" onClick="myFunction()" value="Done" class="btn"/>                <script>
            function myFunction() {
                window.location.href="home2.php";
            }
            </script>
    </section>

    <section class="footer">
        <?php include 'footer.php'?>
    </section>
</body>
</html>

<style>
    .footer{
        width:100%;
    }

    .container img{
        width:250px;
    }

    .container h3{
        font-size: 40px;
    }

    .contanier span{
        font-size: 32px;
    }

    .container .btn{
        width:100%;
        border:none;
        padding-top: 20px;
        padding-bottom:20px;
        border-radius: 50px;

        font-size: 20px;
        font-weight: 500;
        color: white;

        background-color: #252525;
        cursor:pointer;
        margin-bottom:150px;
    }

    .container .team{
        font-weight: 600;
    }
    .container {
        font-family: sans-serif;
        display: flex;
        justify-content: center;
        align-content: center;
        flex-direction: column;
        align-items: center;

        max-width: 60%;
        width:100%;
        display:flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-top: 15px;
    }


</style>
