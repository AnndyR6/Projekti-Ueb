<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/luxewatches/css/login.css">
    <title>Luxe Watches</title>
</head>
<header>
    <div class="logos">
        <button class="button1">
            <span>
                <i class="fa-solid fa-cart-shopping"></i>
            </span>
        </button>
        <button class="createform">
            <a href="baza.php">
                <span class="icon1">
                    <i class="fa-solid fa-house"></i>
                </span>
            </a>
        </button>
    </div>
</header>
<body>
    <div class="container">
        <form 
            class="form1"
            id="login" 
            method="post" 
            action="/luxewatches/backend/routes/product/createoredit.php?id=<?php 
            echo ($_GET['id'] ?? '');?>"
        >
            <h1 class="formtitle">Create Product</h1>
            <div class="formmessageerror"></div>
            <div class="formgroup">
                <input name="name" type="text" class="forminput" placeholder="Name">
                <input name="price" type="number" class="forminput" placeholder="100">
                <input name="description" type="text" class="forminput" placeholder="Description">
                <div class="forminputerror"></div>
                <div style="display: flex;justify-content: center">
                    <?php
                    if(isset($_GET['success'])){
                        echo "<span style=\"color: green\">{$_GET['success']}</span>";
                    }
                    ?>
                </div>
                <button class="formbutton" type="submit">Continue</button>
            </div>
        </form>
    </div>
</body>
</html>