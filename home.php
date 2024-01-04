<?php
    session_start();
    include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventronix - Home</title>
    <link rel="stylesheet" href="styles-for-home.css">
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
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
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
                    <div class="decoration-down anim">
                        INVENTRONIX
                    </div>
                    <div class="decoration-up anim"></div>
                    <div class="overlay anim"></div>
                    <img src="./img/imgslide1.jpg" alt="img" class="slider-img">
                </div>
            </div>

            <div class="text">
                    <div>
                        <h1>Inventronix</h1>
                        <p>
                            Welcome to Inventronix, where innovation meets efficiency in the realm of 
                            computer engineering laboratory rooms. Our dynamic inventory system goes 
                            beyond traditional reservation systems, offering a comprehensive approach 
                            to resource management.
                        </p>
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