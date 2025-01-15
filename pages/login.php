<!DOCTYPE html>
<html lang="en">
<head>
    <script src="http://localhost/luxewatches/js/login1.js"></script>
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
        <button class="loginform">
            <a href="baza.html">
                <span class="icon1">
                    <i class="fa-solid fa-house"></i>
                </span>
            </a>
        </button>
    </div>
</header>
<body>
    <div class="container">
        <form class="form1" id="login" method="post" action="/luxewatches/backend/routes/user/login.php">
            <h1 class="formtitle">Log in</h1>
            <div class="formmessageerror"></div>
            <div class="formgroup">
                <input name="email" type="text" class="forminput" placeholder="Email">
                <div class="forminputerror"></div>
                <div class="formgroup">
                    <input name="password" type="password" class="forminput" placeholder="Password">
                    <div class="forminputerror"></div>
                </div>
                <div style="display: flex;justify-content: center">
                    <?php
                    if(isset($_GET['error'])){
                        echo "<span style=\"color: red\">{$_GET['error']}</span>";
                    }
                    ?>
                </div>
                <button class="formbutton" type="submit">Continue</button>
                <p class="formtext">
                    <a href="#" class="formlink">Forgot your password?</a>
                </p>
                <p id="linkCreateAccount" class="formtext">
                    <a class="formlink">Don't have an account? Create account.</a>
                </p>
            </div>
        </form>
        <form class="form formhidden" id="createAccount">
            <h1 class="formtitle">Create account</h1>
            <div class="formmessageerror"></div>

            <div class="formgroup">
                <input type="text" class="forminput" placeholder="Username">
                <div class="forminputerror"></div>
                <div class="formgroup">
                    <input type="text" class="forminput" placeholder="Email Address">
                    <div class="forminputerror"></div>
                    <div class="formgroup">
                        <input type="password" class="forminput " placeholder="Password">
                        <div class="forminputerror"></div>
                        <input type="password" class="forminput " placeholder="Confirm Password">
                        <div class="forminputerror"></div>
                    </div>

                    <button class="formbutton" type="submit">Continue</button>
                    <p class="formtext">
                        <a id="linkLogin" class="formlink">Already have an account? Log in.</a>
                    </p>
                </div>
            </div>
        </form>
    </div>
</body>
</html>