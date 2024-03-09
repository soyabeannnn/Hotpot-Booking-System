<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <title>Home | A pot of happiness in every bite</title>
</head>
<body>
    
<?php
include 'header.php';
?>

<section class="container1">
        <div class="background-image">
            <div class="slogan">
                <div id="slogan">
                    <h1>A pot of</h1>
                    <h1>happiness in</h1>
                    <h1> every bite</h1>
                    
                </div>
        </div>
        </div>
    </section>

    <section class="container2">
        <div class="background-image2">
            <div class="location">
                <div id="location">
                    <div class="location-logo">
                        <img src="image/favicon.png" alt="Location logo">
                    </div>
                    <h1>About Us</h1>
                    <p>Indulge in a culinary journey at our<br>hotpot haven, where savory broths, fresh ingredients,<br>and communal dining create unforgettable experiences.<br>Whether you're a spice seeker or a broth connoisseur,<br>our diverse menu promises to tantalize taste buds<br>and warm hearts.</p>
                    <p>Address:<br>210 Starlight Av, Sentral
                </div>
        </div>
        </div>
    </section>
    
    <?php
        include("footer.php");
    ?>

    </body>
</html>

<style>
    .background-image{
        background-image: url('image/home1.png');
        background-position: center;
        width: 100%;
        height: 100%;
        position: relative;
    }

    .background-image2{
        background-image: url('image/home2.png');
        background-position: center;
        width: 100%;
        height: 100%;
        position: relative;
    }

    .slogan{
        color:white;
        font-size: 20px;
        font-family:'Lilita One',sans-serif;
        font-weight: bold;
        margin-left: 150px;
        padding-top: 150px;
        height: min-content;
        text-shadow: 
        -2px -2px 0 #831212,  
            2px -2px 0 #831212,  
            -2px 2px 0 #831212,  
            2px 2px 0 #831212;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .slogan h1{
        font-size: 70px;
    }

    button{
        margin-top: 10px;
        color: #831212; 
        background-color: white;
        padding: 10px 60px; 
        font-size: 20px;
        font-family: sans-serif;
        font-weight: bold;
        cursor: pointer;
        border: none;
        border-radius: 10px;
    }

    .location{
        text-align: center;
        padding-bottom:0;
    }

    .location-logo img{
        max-width: 100px;
        margin-top: 70px;
    }

    .location h1 {
        color: black;
        font-size: 70px;
        font-family: sans-serif;
        font-weight: bold;
        text-align: center;
        margin-top: 10px;
    }

    .location p {
        font-size: 25px; 
        font-weight: bold;
        font-family: sans-serif;
        text-align: center;
        margin-top: 50px;
    }

    </style>

