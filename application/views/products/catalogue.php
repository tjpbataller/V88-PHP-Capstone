<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link rel="shortcut icon" href="../assets/images/organic_shop_fav.ico" type="image/x-icon">

    <script src="../assets/js/vendor/jquery.min.js"></script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    <script src="../assets/js/vendor/bootstrap-select.min.js"></script>
    <script src="../assets/js/global/dashboard.js"></script>
    <link rel="stylesheet" href="../assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/vendor/bootstrap-select.min.css">
    <link rel="stylesheet" href="../assets/css/custom/global.css">
    <link rel="stylesheet" href="../assets/css/custom/product_dashboard.css">
</head>

<script>
    $(document).ready(function() {
    })
</script>
<body>
    <div class="wrapper">
        <header>
            <a href="/"><h1>Let’s order fresh items for you.</h1></a>
            <div>
                <a class="signup_btn" href="signup">Signup</a>
                <a class="login_btn" href="login">Login</a>
            </div>
        </header>
        <section >
            <form action="process.php" method="post" class="search_form">
                <input type="text" name="search" placeholder="Search Products">
            </form>
            <a class="show_cart" href="cart">Cart (0)</a>
            <form action="process.php" method="post" class="categories_form">
                <h3>Categories</h3>
                <ul>
                    <li>
                        <button type="submit" class="active">
                            <span>36</span><img src="../assets/images/apple.png" alt="#"><h4>All Products</h4>
                        </button>
                    </li>
                    <li>
                        <button type="submit">
                            <span>36</span><img src="../assets/images/apple.png" alt="#"><h4>Vegetables</h4>
                        </button>
                    </li>
                    <li>
                        <button type="submit">
                            <span>36</span><img src="../assets/images/apple.png" alt="#"><h4>Fruits</h4>
                        </button>
                    </li>
                    <li>
                        <button type="submit">
                            <span>36</span><img src="../assets/images/apple.png" alt="#"><h4>Pork</h4>
                        </button>
                    </li>
                    <li>
                        <button type="submit">
                            <span>36</span><img src="../assets/images/apple.png" alt="#"><h4>Beef</h4>
                        </button>
                    </li>
                    <li>
                        <button type="submit">
                            <span>36</span><img src="../assets/images/apple.png" alt="#"><h4>Chicken</h4>
                        </button>
                    </li>
                </ul>
            </form>
            <div>
                <h3>All Products(46)</h3>
                <ul>
                    <li>
                        <a href="products/view/1">
                            <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/b7d9211c-26e7-431a-ac24-b0540fb3c00f/air-force-1-07-shoes-WrLlWX.png" alt="#">
                            <h3>Vegetables</h3>
                            <ul class="rating">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <span>36 Rating</span>
                            <span class="price">$ 10</span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</body>
</html>