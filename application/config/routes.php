<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "items";
$route['404_override'] = '';
$route['product_info'] = 'items/product_infoView';
$route['index'] = 'items/index';
$route['admin'] = 'items/admin_login';
$route['adminDash'] = 'items/admin_loggedIn';
$route['logOff'] = 'items/logOff';
$route['products'] = 'items/productsPage';
