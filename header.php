<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Header</title>
</head>   
  
<!-- Header -->
<body>
    <nav class="navbar">
      <a href="home.php"><img src="image/hottologo.png" class="logo"/>
      </a>
        <ul class="nav-list">
          <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
      </ul>
        <a class="sign-in" href="login.php">Sign in</a> 
    </nav>
</body>
</html>


<style>

  .navbar {
    display:flex;
    align-items: center;
    padding: 0;
    background-color: #ffffff; 
  }

  .logo{
    padding:0;
    margin-left: 20px;
    width: 80px;
  }

  .nav-list{
    display: flex;
    gap: 20px;
    flex: 1;
    list-style-type: none;
  }

  .nav-link{
    color: #822727ff;
    font-weight: bold;
    font-family: sans-serif;
    font-size: 18px;
    padding-top:25px ;
    margin-right:20px ;
  }

  .nav-link:hover {
        color: black; 
    }

  .sign-in{
    padding: 10px 15px;
    margin-right: 50px;
    border-radius: 5px;
    background-color: #822727ff;
    color: white;
    font-family: sans-serif;
    font-weight: bold;
    text-decoration: none;
    font-size: 15px;
  }
</style>
