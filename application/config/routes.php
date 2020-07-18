<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// User
$route['default_controller'] = 'C_user';
$route['detail'] = 'C_detail';
$route['rekomendasi'] = 'C_rekomendasi';
$route['about'] = 'C_about';

$route['404_override'] = 'error404';
$route['translate_uri_dashes'] = FALSE;

// Admin
$route['admin'] = 'admin/C_dashboard';
$route['admin/(:any)'] = 'admin/C_dashboard/$1';

$route['login'] = 'admin/C_login/login';
$route['logout'] = 'admin/C_login/logout';
$route['validation'] = 'admin/C_login/validation';

$route['adminlist'] = 'admin/C_adminlist';
$route['adminlist/(:any)'] = 'admin/C_adminlist/$1';
$route['adminlist/(:any)/(:any)'] = 'admin/C_adminlist/$1/$2';

$route['coffeeshop'] = 'admin/C_coffeeshop';
$route['coffeeshop/(:any)'] = 'admin/C_coffeeshop/$1';
$route['coffeeshop/(:any)/(:any)'] = 'admin/C_coffeeshop/$1/$2';

$route['kriteria'] = 'admin/C_kriteria';
$route['kriteria/(:any)'] = 'admin/C_kriteria/$1';
$route['kriteria/(:any)/(:any)'] = 'admin/C_kriteria/$1/$2';
