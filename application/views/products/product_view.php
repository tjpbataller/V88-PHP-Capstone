<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src="<?=base_url()?>assets/js/vendor/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/vendor/popper.min.js"></script>
    <script src="<?=base_url()?>assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/vendor/bootstrap-select.min.js"></script>
    <script src="<?=base_url()?>assets/js/global/product_view.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/vendor/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/custom/global.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/custom/product_view.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <a href="/"><h1>Let’s order fresh items for you.</h1></a>
            <div>
                <a class="show_cart" href="/cart">Cart (0)</a>
                <a class="signup_btn" href="/signup">Signup</a>
                <a class="login_btn" href="/login">Login</a>
            </div>
        </header>
        <section>
            <a href="/">Go Back</a>
            <ul>
                <li>
                    <img src="<?=base_url()?>assets/images/burger.png" alt="food">
                    <ul>
                        <li class="active"><button class="show_image"><img src="<?=base_url()?>assets/images/burger.png" alt="food"></button></li>
                        <li><button class="show_image"><img src="<?=base_url()?>assets/images/burger.png" alt="food"></button></li>
                        <li><button class="show_image"><img src="<?=base_url()?>assets/images/burger.png" alt="food"></button></li>
                        <li><button class="show_image"><img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/b7d9211c-26e7-431a-ac24-b0540fb3c00f/air-force-1-07-shoes-WrLlWX.png" alt="food"></button></li>
                    </ul>
                </li>
                <li>
                    <h2>Vegetables</h2>
                    <ul class="rating">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <span>36 Rating</span>
                    <span class="amount">$ 10</span>
                    <p>Lorem ipsum dolor sit amet consectetur. Eget sit posuere enim facilisi. Pretium orci venenatis habitasse gravida nulla tincidunt iaculis. Aliquet at massa quisque libero viverra ut sed. Est vulputate est rutrum nunc nunc pellentesque ultrices pharetra. Mauris euismod sed vel quisque tincidunt suspendisse sed turpis volutpat.</p>
                    <form action="" method="post" id="add_to_cart_form">
                        <ul>
                            <li>
                                <label>Quantity</label>
                                <input type="text" min-value="1" value="1">
                                <ul>
                                    <li><button type="button" class="increase_decrease_quantity" data-quantity-ctrl="1"></button></li>
                                    <li><button type="button" class="increase_decrease_quantity" data-quantity-ctrl="0"></button></li>
                                </ul>
                            </li>
                            <li>
                                <label>Total Amount</label>
                                <span class="total_amount">$ 10</span>
                            </li>
                            <li><button type="submit" id="add_to_cart">Add to Cart</button></li>
                        </ul>
                    </form>
                </li>
            </ul>
            <section>
                <h3>Similar Items</h3>
                <ul>
                    <li>
                        <a href="/products/view/1">
                            <img src="<?=base_url()?>assets/images/food.png" alt="#">
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
                    <li>
                        <a href="/products/view/2">
                            <img src="<?=base_url()?>assets/images/food.png" alt="#">
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
                    <li>
                        <a href="/products/view/3">
                            <img src="<?=base_url()?>assets/images/food.png" alt="#">
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
                    <li>
                        <a href="/products/view/4">
                            <img src="<?=base_url()?>assets/images/food.png" alt="#">
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
                    <li>
                        <a href="/products/view/5">
                            <img src="<?=base_url()?>assets/images/food.png" alt="#">
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
                    <li>
                        <a href="/products/view/6">
                            <img src="<?=base_url()?>assets/images/food.png" alt="#">
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
                    <li>
                        <a href="/products/view/7">
                            <img src="<?=base_url()?>assets/images/food.png" alt="#">
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
            </section>
        </section>
    </div>
</body>
</html>