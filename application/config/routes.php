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
$route['default_controller'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// routes for auth
$route['login'] = 'AuthController';
$route['auth/login'] = 'AuthController/login';
$route['home'] = 'HomeController';
$route['logout'] = 'HomeController/logout';

// routes for user
$route['user'] = 'UserController';
$route['user/create'] = 'UserController/create';
$route['user/store'] = 'UserController/store';
$route['user/edit/(:any)'] = 'UserController/edit/$1';
$route['user/show/(:any)'] = 'UserController/show/$1';
$route['user/update/(:any)'] = 'UserController/update/$1';
$route['user/destroy/(:any)'] = 'UserController/destroy/$1';


// routes for employee
$route['employee'] = 'EmployeeController';
$route['employee/create'] = 'EmployeeController/create';
$route['employee/store'] = 'EmployeeController/store';
$route['employee/edit/(:any)'] = 'EmployeeController/edit/$1';
$route['employee/show/(:any)'] = 'EmployeeController/show/$1';
$route['employee/update/(:any)'] = 'EmployeeController/update/$1';
$route['employee/destroy/(:any)'] = 'EmployeeController/destroy/$1';

// routes for rating
$route['rating'] = 'RatingController';
$route['rating/create'] = 'RatingController/create';
$route['rating/store'] = 'RatingController/store';
$route['rating/edit/(:any)'] = 'RatingController/edit/$1';
$route['rating/show/(:any)'] = 'RatingController/show/$1';
$route['rating/update/(:any)'] = 'RatingController/update/$1';
$route['rating/destroy/(:any)'] = 'RatingController/destroy/$1';

// routes for criteria
$route['criteria'] = 'CriteriaController';
$route['criteria/create'] = 'CriteriaController/create';
$route['criteria/store'] = 'CriteriaController/store';
$route['criteria/edit/(:any)'] = 'CriteriaController/edit/$1';
$route['criteria/show/(:any)'] = 'CriteriaController/show/$1';
$route['criteria/update/(:any)'] = 'CriteriaController/update/$1';
$route['criteria/destroy/(:any)'] = 'CriteriaController/destroy/$1';

// routes for criterion value
$route['criterion_value'] = 'CriterionValueController';
$route['criterion_value/create'] = 'CriterionValueController/create';
$route['criterion_value/store'] = 'CriterionValueController/store';
$route['criterion_value/edit/(:any)'] = 'CriterionValueController/edit/$1';
$route['criterion_value/show/(:any)'] = 'CriterionValueController/show/$1';
$route['criterion_value/update/(:any)'] = 'CriterionValueController/update/$1';
$route['criterion_value/destroy/(:any)'] = 'CriterionValueController/destroy/$1';