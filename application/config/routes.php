<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "items";
$route['404_override'] = '';
$route['product_info'] = 'items/product_infoView';
$route['index'] = 'items/index';
$route['admin'] = 'items/admin_login';
$route['adminDash'] = 'items/admin_loggedIn';
$route['logOff'] = 'items/logOff';
<<<<<<< HEAD
//index search by item name
$route['search_by_name'] = 'items/search_by_name';
=======
$route['products'] = 'items/productsPage';
>>>>>>> 83b60e43e9462c205f9e91b47100ed412c71208e
