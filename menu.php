<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <title>Menu | Hotto</title>
</head>
<body>
    
<?php
include 'header.php';
?>

<div class="menu-bar">
        <h2 class="menu-title">Our Menu</h2>
    </div>

    <div class="menu-packages">
        <div class="package">
            <img src="image/sticker1.png" alt="Package 1">
            <p>Package 1</p>
        </div>
        <div class="package">
            <img src="image/sticker2.png" alt="Package 2">
            <p>Package 2</p>
        </div>
        <div class="package">
            <img src="image/sticker3.png" alt="Package 3">
            <p>Package 3</p>
        </div>
    </div>

    <div class="menu-packages">
        <div class="package">
            <img src="image/sticker4.png" alt="Package 4">
            <p>Package 4</p>
        </div>
        <div class="package">
            <img src="image/sticker5.png" alt="Package 5">
            <p>Package 5</p>
        </div>
        <div class="package">
            <img src="image/sticker6.png" alt="Package 6">
            <p>Package 6</p>
        </div>
    </div>

    <?php
        include 'footer.php';
    ?>
    </body>
</html>

<style>

    body{
        background-color:#822727ff ;
        margin: 0;
        padding: 0;
    }

    .menu-bar {
            background-color: #DFB955;
            text-align: center;
            padding: 20px 0;
            margin-bottom: 20px;
        }

        .menu-title {
            color: white;
            font-size: 28px;
            font-family:sans-serif;
            font-weight: bold;
        }

        .menu-packages {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 50px;
        }

        .package {
            flex-basis: calc(33% - 10px);
            margin: 5px;
            text-align: center;
            padding-top: 20px;
        }

        .package img {
            max-width: 100%;
            max-height: 200px; 
            width: auto; 
            height: auto; 
            display: block;
            margin: 0 auto 10px; 
        }

        .package p {
            font-size: 20px;
            font-weight: bold;
            margin-top: 0;
        }

    </style>
