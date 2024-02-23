<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <script src="../assets/js/vendor/jquery.min.js"></script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    <script src="../assets/js/vendor/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="../assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/vendor/bootstrap-select.min.css">

    <link rel="stylesheet" href="../assets/css/custom/admin_global.css">
    <script src="../assets/js/global/admin_products.js"></script>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Let’s provide fresh items for everyone.</h1>
            <h2>Products</h2>
            <div>
                <a class="switch" href="catalogue.html">Switch to Shop View</a>
                <button class="profile">
                    <img src="../assets/images/profile.png" alt="#">
                </button>
            </div>
            <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle profile_dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                <div class="dropdown-menu admin_dropdown" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </header>
        <aside>
            <a href="#"><img src="../assets/images/organi_shop_logo_dark.svg" alt="Organic Shop"></a>
            <ul>
                <li><a href="dashboard/orders">Orders</a></li>
                <li class="active"><a href="#">Products</a></li>
            </ul>
        </aside>
        <section>
            <form action="process.php" method="post" class="search_form">
            <?= form_open() ?>

                <input type="text" name="search" placeholder="Search Products">
            </form>
            <button class="add_product" data-toggle="modal" data-target="#add_product_modal">Add Product</button>
            <form action="process.php" method="post" class="status_form">
            <?= form_open() ?>

                <h3>Categories</h3>
                <ul>
                    <li>
                        <button type="submit" class="active">
                            <span>36</span><img src="../assets/images/all_orders_icon.svg" alt="#"><h4>All Products</h4>
                        </button>
                    </li>
                    <li>
                        <button type="submit">
                            <span>36</span><img src="../assets/images/pending_icon.svg" alt="#"><h4>Pending</h4>
                        </button>
                    </li>
                    <li>
                        <button type="submit">
                            <span>36</span><img src="../assets/images/on_process_icon.svg" alt="#"><h4>On-Process</h4>
                        </button>
                    </li>
                    <li>
                        <button type="submit">
                            <span>36</span><img src="../assets/images/shipped_icon.svg" alt="#"><h4>Shipped</h4>
                        </button>
                    </li>
                    <li>
                        <button type="submit">
                            <span>36</span><img src="../assets/images/delivered_icon.svg" alt="#"><h4>Delivered</h4>
                        </button>
                    </li>
                </ul>
            </form>
            <div>
                <table class="products_table">
                    <thead>
                        <tr>
                            <th><h3>All Products</h3></th>
                            <th>ID #</th>
                            <th>Price</th>
                            <th>Caregory</th>
                            <th>Inventory</th>
                            <th>Sold</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="product_content">
                        <tr>
                            <td>
                                <span>
                                    <img src="../assets/images/food.png" alt="#">
                                    ????
                                </span>
                            </td>
                            <td><span>?</span></td>
                            <td><span>$ ?.??</span></td>
                            <td><span>????</span></td>
                            <td><span>??</span></td>
                            <td><span>??</span></td>
                            <td>
                                <span>
                                    <button class="edit_product" value="??">Edit</button>
                                    <button class="delete_product">X</button>
                                </span>
                                <form class="delete_product_form" action="#" method="post">
                                    <p>Are you sure you want to remove this item?</p>
                                    <button type="button" class="cancel_remove">Cancel</button>
                                    <button type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    <img src="../assets/images/food.png" alt="#">
                                    ????
                                </span>
                            </td>
                            <td><span>?</span></td>
                            <td><span>$ ?.??</span></td>
                            <td><span>????</span></td>
                            <td><span>??</span></td>
                            <td><span>??</span></td>
                            <td>
                                <span>
                                    <button class="edit_product" value="??">Edit</button>
                                    <button class="delete_product">X</button>
                                </span>
                                <form class="delete_product_form" action="#" method="post">
                                    <p>Are you sure you want to remove this item?</p>
                                    <button type="button" class="cancel_remove">Cancel</button>
                                    <button type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    <img src="../assets/images/food.png" alt="#">
                                    ????
                                </span>
                            </td>
                            <td><span>?</span></td>
                            <td><span>$ ?.??</span></td>
                            <td><span>????</span></td>
                            <td><span>??</span></td>
                            <td><span>??</span></td>
                            <td>
                                <span>
                                    <button class="edit_product" value="??">Edit</button>
                                    <button class="delete_product">X</button>
                                </span>
                                <form class="delete_product_form" action="#" method="post">
                                    <p>Are you sure you want to remove this item?</p>
                                    <button type="button" class="cancel_remove">Cancel</button>
                                    <button type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    <img src="../assets/images/food.png" alt="#">
                                    ????
                                </span>
                            </td>
                            <td><span>?</span></td>
                            <td><span>$ ?.??</span></td>
                            <td><span>????</span></td>
                            <td><span>??</span></td>
                            <td><span>??</span></td>
                            <td>
                                <span>
                                    <button class="edit_product" value="??">Edit</button>
                                    <button class="delete_product">X</button>
                                </span>
                                <form class="delete_product_form" action="#" method="post">
                                    <p>Are you sure you want to remove this item?</p>
                                    <button type="button" class="cancel_remove">Cancel</button>
                                    <button type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    <img src="../assets/images/food.png" alt="#">
                                    ????
                                </span>
                            </td>
                            <td><span>?</span></td>
                            <td><span>$ ?.??</span></td>
                            <td><span>????</span></td>
                            <td><span>??</span></td>
                            <td><span>??</span></td>
                            <td>
                                <span>
                                    <button class="edit_product" value="??">Edit</button>
                                    <button class="delete_product">X</button>
                                </span>
                                <form class="delete_product_form" action="#" method="post">
                                    <p>Are you sure you want to remove this item?</p>
                                    <button type="button" class="cancel_remove">Cancel</button>
                                    <button type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    <img src="../assets/images/food.png" alt="#">
                                    ????
                                </span>
                            </td>
                            <td><span>?</span></td>
                            <td><span>$ ?.??</span></td>
                            <td><span>????</span></td>
                            <td><span>??</span></td>
                            <td><span>??</span></td>
                            <td>
                                <span>
                                    <button class="edit_product" value="??">Edit</button>
                                    <button class="delete_product">X</button>
                                </span>
                                <form class="delete_product_form" action="#" method="post">
                                    <p>Are you sure you want to remove this item?</p>
                                    <button type="button" class="cancel_remove">Cancel</button>
                                    <button type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    <img src="../assets/images/food.png" alt="#">
                                    ????
                                </span>
                            </td>
                            <td><span>?</span></td>
                            <td><span>$ ?.??</span></td>
                            <td><span>????</span></td>
                            <td><span>??</span></td>
                            <td><span>??</span></td>
                            <td>
                                <span>
                                    <button class="edit_product" value="??">Edit</button>
                                    <button class="delete_product">X</button>
                                </span>
                                <form class="delete_product_form" action="#" method="post">
                                    <p>Are you sure you want to remove this item?</p>
                                    <button type="button" class="cancel_remove">Cancel</button>
                                    <button type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    <img src="../assets/images/food.png" alt="#">
                                    ????
                                </span>
                            </td>
                            <td><span>?</span></td>
                            <td><span>$ ?.??</span></td>
                            <td><span>????</span></td>
                            <td><span>??</span></td>
                            <td><span>??</span></td>
                            <td>
                                <span>
                                    <button class="edit_product" value="??">Edit</button>
                                    <button class="delete_product">X</button>
                                </span>
                                <form class="delete_product_form" action="#" method="post">
                                    <p>Are you sure you want to remove this item?</p>
                                    <button type="button" class="cancel_remove">Cancel</button>
                                    <button type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    <img src="../assets/images/food.png" alt="#">
                                    ????
                                </span>
                            </td>
                            <td><span>?</span></td>
                            <td><span>$ ?.??</span></td>
                            <td><span>????</span></td>
                            <td><span>??</span></td>
                            <td><span>??</span></td>
                            <td>
                                <span>
                                    <button class="edit_product" value="??">Edit</button>
                                    <button class="delete_product">X</button>
                                </span>
                                <form class="delete_product_form" action="#" method="post">
                                    <p>Are you sure you want to remove this item?</p>
                                    <button type="button" class="cancel_remove">Cancel</button>
                                    <button type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>
                                    <img src="../assets/images/food.png" alt="#">
                                    ????
                                </span>
                            </td>
                            <td><span>?</span></td>
                            <td><span>$ ?.??</span></td>
                            <td><span>????</span></td>
                            <td><span>??</span></td>
                            <td><span>??</span></td>
                            <td>
                                <span>
                                    <button class="edit_product" value="??">Edit</button>
                                    <button class="delete_product">X</button>
                                </span>
                                <form class="delete_product_form" action="#" method="post">
                                    <p>Are you sure you want to remove this item?</p>
                                    <button type="button" class="cancel_remove">Cancel</button>
                                    <button type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <div class="modal fade form_modal" id="add_product_modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button data-dismiss="modal" aria-label="Close" class="close_modal"></button>
                    <form class="add_product_form" action="/products/process" method="post" data-modal-action="0" enctype="multipart/form-data">
                    <?= form_open() ?>
                        <h2>Add a Product</h2>
                        <ul>
                            <li>
                                <input type="text" name="product_name" required>
                                <label>Product Name</label>
                            </li>
                            <li>
                                <textarea name="description" required></textarea>
                                <label>Description</label>
                            </li>
                            <li>
                                <label>Category</label>
                                <select class="selectpicker" name="category">
                                    <option value="0">Vegetables</option>
                                    <option value="1">Fruits</option>
                                    <option value="2">Pork</option>
                                    <option value="3">Beef</option>
                                    <option value="4">Chicken</option>
                                </select>
                            </li>
                            <li>
                                <input type="number" name="price" value="1">
                                <label>Price</label>
                            </li>
                            <li>
                                <input type="number" name="inventory" value="1" required>
                                <label>Inventory</label>
                            </li>
                            <li>
                                <label>Upload Images (4 Max)<span class="error_message">*Please upload an image.</span></label>
                                <ul>
                                    <li><button type="button" class="upload_image"></button></li>
                                </ul>
                                <ul class="image_preview_list">
                                </ul>
                                <input type="hidden" name="form_data_action" class="form_data_action">
                                <input type="hidden" name="image_index">
                                <input type="file" name="images[]" accept="image/*" class="image_input" multiple="multiple">
                            </li>
                        </ul>
                        <button type="button" data-dismiss="modal" aria-label="Close" id="product_form_cancel">Cancel</button>
                        <button type="submit" id="product_form_save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="popover_overlay"></div>
</body>
</html>