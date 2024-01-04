<?php
    session_start();
    include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventronix - Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-CBXGJfwIO3mrPOxvZf3H0KX3YftGLmlvhV+7+2po/3jP+GHCp4gG4tyPxZMfBpMoHcjLIEUXfJ2BF3shpdsud1A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style-profile.css"/>
    
</head>
<body>
<header>
        <div class="container">
            <nav>
                <a href="home.php" class="logo name">
                    Inventronix
                </a>
                <ul class="menu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
                <button class="menu-btn">
                    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
                    <span class="material-symbols-outlined">
                        segment
                    </span>
                </button>
            </nav>

            <div class="header-body">
                <div class="slider">
                    <div class="decoration-left anim">
                        DISCOVER
                        <span class="material-symbols-outlined">trending_flat</span>
                    </div>
                    <div class="decoration-right anim"></div>
                    <div class="overlay anim"></div>
                    <img src="./img/imgslide1.jpg" alt="img" class="slider-img">
                </div>
                <div class="text">
                    <div>
                        <h1>Hello, <?php echo $_SESSION['username']?> </h1>
                        <p>
                        Email:  <?php echo $_SESSION['email']?> <br>
                        Password: <?php echo $_SESSION['password']?>
                        </p>
                    </div>
                </div>
            </div>
            <nav class="header-bottom">
                <div class="controls">
                    <span class="prev">Prev</span>
                    <span class="next">Next</span>
                </div>
                <ul class="pagination">
                    <li class="page active"><span>01</span></li>
                    <li class="page"><span>02</span></li>
                    <li class="page"><span>03</span></li>
                    <li class="page"><span>04</span></li>
                    <li class="page"><span>05</span></li>
                </ul>
                <span>Sta. Mesa, Manila</span>
            </nav>
        </div>
    </header>
    <script src="script.js"></script>

</body>
</html>