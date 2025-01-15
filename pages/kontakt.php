<!DOCTYPE html>
<html lang="en">
<head>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="http://localhost/luxewatches/css/kontakt.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxe Watches</title>
    <div class="logos">
        <button class="button1">
            <span>
                <ion-icon name="cart-outline" class="icon"></ion-icon>
            </span>
        </button>
        <button class="loginform">
            <a href="index.php">
                <span class="icon1">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
            </a>
        </button>
    </div>
    <script>
        function validateEmail(email) {
            var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            return emailRegex.test(email);
        }

        function validateAndSubmit() {
            var emailInput = document.getElementById("emailInput");
            var messageInput = document.getElementById("messageInput").value;
            var emailError = document.getElementById("emailError");
            var messageError = document.getElementById("messageError");

            if (!validateEmail(emailInput.value)) {
                emailError.textContent = "Please enter a valid email address.";
                emailInput.style.borderColor = "red";
            } else {
                emailError.textContent = "";
                emailInput.style.borderColor = "";
                if (messageInput.trim() === "") {
                    messageError.textContent = "Message is required.";
                    document.getElementById("messageInput").style.borderColor = "red";
                    return;
                } else {
                    messageError.textContent = "";
                    document.getElementById("messageInput").style.borderColor = "";
                }

                if(emailInput.value && messageInput){
                    document.getElementById('forma').submit();
                }
            }
        }

        
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('forma');

            form.addEventListener('submit', function (event) {
                event.preventDefault();
                validateAndSubmit()
            });
        });
    </script>   
</head>
<body>
    <form id="forma" method="post" action="/luxewatches/backend/routes/contact/save.php">
    <div class="forms">
        <h2>Contact Us</h2>
            <input type="email" class="email" id="emailInput" placeholder="E-mail"  name="email" required><span id="emailError" style="color: red;"></span><br>
            <textarea class="text" id="messageInput" placeholder="Message Us" name="message" required></textarea><span id="messageError" style="color: red;"></span><br>
            <div style="display: flex;justify-content: center">
                    <?php
                    if(isset($_GET['success'])){
                        echo "<span style=\"color: green\">{$_GET['success']}</span>";
                    }
                    ?>
                </div>
            <button class="formbutton" type="submit" required>Submit</button>
    </div>
    </form>
    
</body>
</html>
