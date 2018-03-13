<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

//Session management
$route['connection/login'] = 'connection/login';
$route['connection/logout'] = 'connection/logout';

//User management
$route['users/index'] = 'users/index';
$route['users/export'] = 'users/export';
$route['users/reset/(:num)'] = 'users/reset/$1';
$route['users/create'] = 'users/create';
$route['users/edit/(:num)'] = 'users/edit/$1';
$route['users/delete/(:num)'] = 'users/delete/$1';
$route['users/check/login'] = 'users/checkLoginByAjax';
$route['users'] = 'users';

//Examples
$route['examples/index'] = 'examples/index';
$route['examples/views/(:any)'] = 'examples/renderView/$1';
$route['examples/backend/typeahead/files/(:any)'] = 'examples/listFiles/$1';
$route['examples/backend/pdf/file/display'] = 'examples/generatePDF';
$route['examples/backend/pdf/file/download'] = 'examples/downloadPDF';
$route['examples/backend/rest/time/server'] = 'examples/getServerTimeByApi';

//Rest API
$route['api/rest/users']['OPTIONS'] = 'rest/options';
$route['api/rest/users']['GET'] = 'rest/users';
$route['api/rest/users/(:num)']['GET'] = 'rest/users/$1';
$route['api/rest/users']['POST'] = 'rest/users';
$route['api/rest/users/(:num)']['PUT'] = 'rest/users/$1';
$route['api/rest/users/(:num)']['DELETE'] = 'rest/users/$1';

//User properties : is admin, id
$route['api/rest/users/self']['GET'] = 'rest/getPropertiesOfConnectedUser';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;