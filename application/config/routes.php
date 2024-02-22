<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Products';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['/'] = "products/index";
$route['login'] = "users/login";
$route['signup'] = "users/signup";
$route['logout'] = "users/logout";
$route['cart'] = "carts/index";
$route['products/view/(:num)'] = "products/view/$1";
$route['dashboard/products'] = "products/admin_products";
$route['dashboard/orders'] = "orders/admin_orders";