<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/luxewatches/css/login.css">
    <script src="login1.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <title>Argjendaria Beli</title>
    <script>
        function isValidEmail(email) {
            // A simple email validation regex
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function validateForm() {
            // Reset previous error messages
            document.getElementById('firstnameError').innerText = '';
            document.getElementById('lastnameError').innerText = '';
            document.getElementById('emailError').innerText = '';
            document.getElementById('passwordError').innerText = '';
            document.getElementById('confirmPasswordError').innerText = '';

            // Get form values
            var firstName = document.getElementById('first_name').value;
            var lastName = document.getElementById('last_name').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;

            // Validate each field
            if (firstName === '') {
                document.getElementById('firstnameError').innerText = 'First name is required';
            }

            if (lastName === '') {
                document.getElementById('lastnameError').innerText = 'Last name is required';
            }

            if (email === '') {
                document.getElementById('emailError').innerText = 'Email is required';
            } else if (!isValidEmail(email)) {
                document.getElementById('emailError').innerText = 'Invalid email format';
            }

            if (password === '') {
                document.getElementById('passwordError').innerText = 'Password is required';
            }

            if (confirmPassword === '' || confirmPassword !== password) {
                document.getElementById('confirmPasswordError').innerText = 'Passwords do not match';
            }

            if(confirmPassword && password && firstName && lastName && email){
                document.getElementById('forma').submit();
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('forma');

            form.addEventListener('submit', function (event) {
                event.preventDefault();
                validateForm()
            });
        });
    </script>
</head>
<header>
    <div class="logos">
        <button class="button1">
            <span>
                <ion-icon name="cart-outline" class="icon"></ion-icon>
            </span>
        </button>
        <button class="loginform">
            <a href="baza.php">
                <span class="icon1">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
            </a>
        </button>
    </div>
</header>
<body>
<form method="post" action="/luxewatches/backend/routes/user/register.php" id="forma">
    <div class="container">
        <h1 class="formtitle">Create account</h1>
        <div class="formmessageerror"></div>
            <div class="formgroup">
                <input type="text" class="forminput" id="first_name" name="first_name" placeholder="First Name">
                <div class="forminputerror" id="firstnameError"></div>
            </div>
            <div class="formgroup">
                <input type="text" class="forminput" id="last_name" name="last_name" placeholder="Last Name">
                <div class="forminputerror" id="lastnameError"></div>
            </div>
            <div class="formgroup">
                <input type="text" class="forminput" id="email" name="email" placeholder="Email Address">
                <div class="forminputerror" id="emailError"></div>
            </div>
            <div class="formgroup">
                <input type="password" class="forminput" id="password" name="password" placeholder="Password">
                <div class="forminputerror" id="passwordError"></div>
                <input type="password" class="forminput" id="confirmPassword" name="confrimpassword" placeholder="Confirm Password">
                <div class="forminputerror" id="confirmPasswordError"></div>
            </div>
            <div style="display: flex;justify-content: center">
                <?php
                if(isset($_GET['error'])){
                    echo "<span style=\"color: red\">{$_GET['error']}</span>";
                }
                ?>
            </div>
            <button class="formbutton" type="submit" name="continue">Continue</button>
            <p class="formtext">
                <a href="login.php" id="linkLogin" class="formlink">Already have an account? Log in</a>
            </p>
    </div>


</body>
</html>
