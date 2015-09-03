<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "items";
$route['404_override'] = '';
$route['product_info/(:any)'] = 'items/product_infoView/$1';
$route['index'] = 'items/index';
$route['admin'] = 'items/admin_login_page';
$route['admin_login'] = 'admins/admin_login';
$route['logOff'] = 'items/logOff';
// AJAX Search Function
$route['search'] = 'items/search_ajax';
//Cart Functions
$route['cart'] = 'items/checkoutView';
//Add quantity and item to cart
$route['add_cart'] = 'items/add_to_cart';
$route['items/remove/(:any)']= 'items/remove_from_cart/$1'; //remove item from cart

//index search by item name
$route['search_by_name'] = 'items/search_by_name';
//index sort item by
$route['sort_by'] = 'items/sort_by';
$route['products'] = 'items/productsPage';
// Main admin login redirect
$route['ordersMain'] = 'items/admin_loggedIn';
$route['orderPage'] = 'items/orderPage';

$route['upload_product'] = 'admins/add_product';
$route['customers/buy'] = 'customers/buy';

//Admin rights controller for add, update, and etc
$route['add_product'] = 'admin_rights/add_product';
?>