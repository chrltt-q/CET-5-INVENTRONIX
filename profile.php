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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

            <main>
                <div class="side-content">
                    <small>Welcome Back</small>
                    <h2>Inventronix: <br> Innovation Meets Efficiency </h2>
                </div>

                <div class="content">
                    <div>
                        <h1 class="title">Hello, <br> <?php echo $_SESSION['username']?> </h1>
                        <h4>Inventronix</h4>
                    </div>
                </div>

                <div class="side-img"></div>
                <div class="featured-post">
                    <div>
                        <small>Email:</small>
                        <h4><?php echo $_SESSION['email']?></h4>
                    </div>
                    <img src="./img/bg-pup.png" alt="thumb">
                </div>

                <div class="featured-icon">
                    <a href="#"><i class="fa-solid fa-user"></i></a>
                </div>

                <div class="arrows">
                    <i class="fa-solid fa-arrow-left a-left"></i>
                    <i class="fa-solid fa-arrow-right a-right"></i>
                </div>
            </main>
        </div>
    </header>
    <script src="script-for-profile.js"></script>
    <script src="script.js"></script>
</body>
</html>