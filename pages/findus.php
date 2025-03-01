<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://localhost/luxewatches/css/findus.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <title>Luxe Watches</title>
</head>
<header>
    <button class="button1" link rel="stylesheet" href="login.php">
        <span>
            <i class="fa-solid fa-cart-shopping"></i>
        </span>
    </button>
<button class="loginform">
    <a href="login.php">
        <span class="icon1">
            <i class="fa-solid fa-user"></i>
            <?php 
                session_start();
                if(isset($_SESSION['user'])){
                    echo "<span style=\"font-size:16px\">{$_SESSION['user']['first_name']} {$_SESSION['user']['last_name']}</span>";
                }
            ?>
        </span>
        </a>
</button>
<?php 
    if(isset($_SESSION['user'])){
    ?>
    <form class="form1" id="logout" method="post" action="/luxewatches/backend/routes/user/logout.php">
        <button class="formbutton" type="submit">Log Out</button>
    </form>
    <?php 
        }
?>
<div class="main">
    <a href="baza.php">
    <h1 class="fjala1">L U X E</h1>
    <h1 class="fjala2">Watches</h1>
    </a>
    </ul>
</div>
</header>
<body>
    <h2 class="quote">
        “Look at your watch. Don’t look at what time it is.”    
    </h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1456.5328338452018!2d21.146840042580767!3d42.65271665931144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549f47a5602081%3A0xec721f5ff5e05ca0!2sUBT%20College!5e1!3m2!1sen!2s!4v1732896674498!5m2!1sen!2s" 
    class = "googlemaps" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <footer>
        <p>&copy; Luxe Watches</p>
        <div class="words">
            <a href="aboutus.php">About Us</a>
            <a href="findus.php">Find Us</a>
            <a href="kontakt.php">Contact</a>
        </div>
        <div class="social-icons">
            <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </footer>
</body>
</html>
