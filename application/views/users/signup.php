<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organic Shop: Let’s order fresh items for you.</title>

    <link rel="shortcut icon" href="assets/images/organic_shop_favicon.ico" type="image/x-icon">

    <script src="../assets/js/vendor/jquery.min.js"></script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    <script src="../assets/js/vendor/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="../assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/vendor/bootstrap-select.min.css">
    <script src="../assets/js/global/global.js"></script>
    <script src="../assets/js/global/validation.js" defer></script>
    <link rel="stylesheet" href="../assets/css/custom/global.css">
    <link rel="stylesheet" href="../assets/css/custom/signup.css">
</head>
<body>
    <div class="wrapper">
        <a href="/dashboard"><img src="../assets/images/organic_shop_logo_large.svg" alt="Organic Shop"></a>
        <form id="login_signup_form" action="" method="post">
            <h2>Signup to order.</h2>
            <a href="login">Already a member? Login here.</a>
            <ul>
                
                <li>
                    <input type="text" name="first_name">
                    <label>First Name</label>
                    <p class="first_name_message"></p>
                </li>
                <li>
                    <input type="text" name="last_name">
                    <label>Last Name</label>
                    <p class="last_name_message"></p>
                </li>
                <li>
                    <input type="email" name="email">
                    <label>Email</label>
                    <p class="email_message"></p>
                </li>
                <li>
                    <input type="password" name="password">
                    <label>Password</label>
                    <p class="password_message"></p>
                </li>
                <li>
                    <input type="password" name="confirm_password">
                    <label>Confirm Password</label>
                    <p class="confirm_password_message"></p>
                </li>
            </ul>
            <button class="signup_btn" type="submit" id="signup_btn">Signup</button>
            <input type="hidden" name="action" value="signup">
        </form>
    </div>
    <div class="popover_overlay">Sign up success!</div>
</body>
</html>