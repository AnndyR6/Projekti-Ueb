<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://localhost/luxewatches/css/dizajni.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxe Watches</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <h1 class="fjala1">L U X E</h1>
        <h1 class="fjala2">W A T C H E S</h1>
        <ul>
            <li>New</li>
            <li>Shop</li>
            <li>Sale</li>
            <li>Watches</li>
            <li>Sets</li>
        </ul>
    </div>
</header>
<body>
    <div class="main">
        <img src="http://localhost/luxewatches/assets/logo1.png" alt="shopnow" class="foto1" width="1000px" height="500px">
        <div class="foto1_overlay">
            <div class="butoni">
                <button class="butoni2">Shop now</button>
            </div>
        </div>
    </div>
    <h2 class="quote">
        “Look at your watch. Don’t look at what time it is.”
    </h2>  
    <div class="bodyifaqes">
    <?php 
        require_once $_SERVER['DOCUMENT_ROOT'] . '/luxewatches/backend/controllers/ProductController.php';

        $productsController = new ProductController();
        $products = $productsController->get();
        ?>           
        <?php
            foreach($products as $product){

        ?>
        <div class="foto2">
            <img src="http://localhost/luxewatches/assets/Ore.jpg" class="foto2a" width="400px" height="400px">
            <h1><?php echo $product['name']?></h1>
            <h4><?php echo $product['description']?></h1>
            <p class="price"><?php echo $product['price']?> $</p>
            <p>
                <button>Add to Cart</button>
            </p>
        </div>
        <?php }?>
        
    </div>
</body>
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
</html>