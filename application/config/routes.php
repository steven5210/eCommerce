<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "items";
$route['404_override'] = '';
$route['product_info'] = 'items/product_infoView';
$route['index'] = 'items/index';
$route['admin'] = 'items/admin_login';
$route['adminDash'] = 'items/admin_loggedIn';
$route['logOff'] = 'items/logOff';

//index search by item name
$route['search_by_name'] = 'items/search_by_name';
//index sort item by
$route['sort_by'] = 'items/sort_by';

$route['products'] = 'items/productsPage';

