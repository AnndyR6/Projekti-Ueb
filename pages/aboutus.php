<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/luxewatches/css/aboutus.css">
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <title>Luxe Watches</title>
</head>
<header>
    <button class="button1" link rel="stylesheet" href="login.html">
        <span><i class="fa-solid fa-cart-shopping"></i></span>
    </button>
    <button class="loginform">
        <a href="login.html">
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
    <div class="main">
        <a href="baza.html">
            <h1 class="fjala1">L U X E </h1>
            <h1 class="fjala2">W A T C H E S</h1>
        </a>
    </div>
</header>
</header>
<body>
    <h1 class="header">"Look at your watch. Don’t look at what time it is."</h1>
    <div class="ourstory">
        <img src="http://localhost/luxewatches/assets/store1.jpg" >
    </div>
    <p class="ourstoryp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et aliquam molestiae veniam obcaecati? Sunt eius autem magnam hic ut. Veritatis, id culpa.
    </p>
    <div class="quality">
        <img src="http://localhost/luxewatches/assets/store2.jpg">
    </div>
    <p class="qualityp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque pariatur consequatur dolorem repellat. Quia quaerat fugit dolorem optio aut sequi molestiae qui nostrum recusandae deserunt!</p>
    <div class="vision">
        <img src="http://localhost/luxewatches/assets/store3.jpg" >
    </div>
    <p class="visionp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, facere officiis eveniet dolores nulla deleniti sequi aliquid reprehenderit, quisquam odio necessitatibus, laboriosam asperiores quia cum ipsam.
        
    Alias velit, sit ipsum cum nobis asperiores atque, culpa vero architecto vitae, quaerat voluptatum? Tenetur autem sed quis?</p>
</body>
<footer>
    <p>&copy; Luxe Watches</p>
    <div class="words">
        <a href="aboutus.html">About Us</a>
        <a href="findus.html">Find Us</a>
        <a href="#contact">Contact</a>
    </div>
    <div class="social-icons">
        <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
        <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    </div>
</footer>
</html>