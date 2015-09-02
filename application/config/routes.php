<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "items";
$route['404_override'] = '';
$route['product_info'] = 'items/product_infoView';
$route['index'] = 'items/index';
$route['admin'] = 'items/admin_login_page';
$route['admin_login'] = 'admins/admin_login';
$route['logOff'] = 'items/logOff';

$route['cart'] = 'items/checkoutView';

$route['cart'] = '/items/checkoutView';
$route['cart'] = '/items/checkoutView';

//index search by item name
$route['search_by_name'] = 'items/search_by_name';
//index sort item by
$route['sort_by'] = 'items/sort_by';
$route['products'] = 'items/productsPage';
// Main admin login redirect
$route['ordersMain'] = 'items/admin_loggedIn';
$route['orderPage'] = 'items/orderPage';

$route['upload_product'] = 'admins/add_product';


//Admin rights controller for add, update, and etc
$route['add_product'] = 'admin_rights/add_product';
?>