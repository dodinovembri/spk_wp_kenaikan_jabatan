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
$route['user/new/create'] = 'UserController/create_new';
$route['user/new/store'] = 'UserController/store_new';
$route['user/store'] = 'UserController/store';
$route['user/edit/(:any)'] = 'UserController/edit/$1';
$route['user/show/(:any)'] = 'UserController/show/$1';
$route['user/update/(:any)'] = 'UserController/update/$1';
$route['user/destroy/(:any)'] = 'UserController/destroy/$1';
$route['user/change_password/(:any)'] = 'UserController/change_password/$1';
$route['user/store_password'] = 'UserController/store_password';

// routes for employee
$route['employee'] = 'EmployeeController';
$route['employee/create'] = 'EmployeeController/create';
$route['employee/store'] = 'EmployeeController/store';
$route['employee/edit/(:any)'] = 'EmployeeController/edit/$1';
$route['employee/show/(:any)'] = 'EmployeeController/show/$1';
$route['employee/update/(:any)'] = 'EmployeeController/update/$1';
$route['employee/destroy/(:any)'] = 'EmployeeController/destroy/$1';

// routes for rating
$route['ratings/(:any)'] = 'RatingController/index/$1';
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
$route['criterion_values/(:any)'] = 'CriterionValueController/index/$1';
$route['criterion_value/create'] = 'CriterionValueController/create';
$route['criterion_value/store'] = 'CriterionValueController/store';
$route['criterion_value/edit/(:any)'] = 'CriterionValueController/edit/$1';
$route['criterion_value/show/(:any)'] = 'CriterionValueController/show/$1';
$route['criterion_value/update/(:any)'] = 'CriterionValueController/update/$1';
$route['criterion_value/destroy/(:any)'] = 'CriterionValueController/destroy/$1';

// routes for ranking
$route['ranking'] = 'RankingController';
$route['ranking/create'] = 'RankingController/create';
$route['ranking/store'] = 'RankingController/store';
$route['ranking/edit/(:any)'] = 'RankingController/edit/$1';
$route['ranking/show/(:any)'] = 'RankingController/show/$1';
$route['ranking/update/(:any)'] = 'RankingController/update/$1';
$route['ranking/destroy/(:any)'] = 'RankingController/destroy/$1';

// routes for profile
$route['profile'] = 'ProfileController';
$route['profile/create'] = 'ProfileController/create';
$route['profile/store/(:any)'] = 'ProfileController/store/$1';
$route['profile/store_pw/(:any)'] = 'ProfileController/store_pw/$1';
$route['profile/edit/(:any)'] = 'ProfileController/edit/$1';
$route['profile/update/(:any)'] = 'ProfileController/update/$1';
$route['profile/destroy/(:any)'] = 'ProfileController/destroy/$1';

// routes for report
$route['report'] = 'ReportController';
$route['report/create'] = 'ReportController/create';
$route['report/store/(:any)'] = 'ReportController/store/$1';
$route['report/store_pw/(:any)'] = 'ReportController/store_pw/$1';
$route['report/edit/(:any)'] = 'ReportController/edit/$1';
$route['report/update/(:any)'] = 'ReportController/update/$1';
$route['report/destroy/(:any)'] = 'ReportController/destroy/$1';
$route['report/export/pdf'] = 'ReportController/pdf_export';


// routes for employee report
$route['employee_report'] = 'EmployeeReportController';
$route['employee_report/create'] = 'EmployeeReportController/create';
$route['employee_report/store/(:any)'] = 'EmployeeReportController/store/$1';
$route['employee_report/store_pw/(:any)'] = 'EmployeeReportController/store_pw/$1';
$route['employee_report/edit/(:any)'] = 'EmployeeReportController/edit/$1';
$route['employee_report/update/(:any)'] = 'EmployeeReportController/update/$1';
$route['employee_report/destroy/(:any)'] = 'EmployeeReportController/destroy/$1';

// routes for division
$route['division'] = 'DivisionController';
$route['division/create'] = 'DivisionController/create';
$route['division/store'] = 'DivisionController/store';
$route['division/edit/(:any)'] = 'DivisionController/edit/$1';
$route['division/show/(:any)'] = 'DivisionController/show/$1';
$route['division/update/(:any)'] = 'DivisionController/update/$1';
$route['division/destroy/(:any)'] = 'DivisionController/destroy/$1';

// routes for division chart
$route['division_chart'] = 'DivisionChartController';
$route['division_chart/create'] = 'DivisionChartController/create';
$route['division_chart/store'] = 'DivisionChartController/store';
$route['division_chart/edit/(:any)'] = 'DivisionChartController/edit/$1';
$route['division_chart/show/(:any)'] = 'DivisionChartController/show/$1';
$route['division_chart/update/(:any)'] = 'DivisionChartController/update/$1';
$route['division_chart/destroy/(:any)'] = 'DivisionChartController/destroy/$1';

// routes for alternative
$route['alternative'] = 'AlternativeController';
$route['alternative/create'] = 'AlternativeController/create';
$route['alternative/store'] = 'AlternativeController/store';
$route['alternative/edit/(:any)'] = 'AlternativeController/edit/$1';
$route['alternative/show/(:any)'] = 'AlternativeController/show/$1';
$route['alternative/update/(:any)'] = 'AlternativeController/update/$1';
$route['alternative/destroy/(:any)'] = 'AlternativeController/destroy/$1';
$route['school_alternative'] = 'AlternativeController/school_alternative';

// routes for alternative value
$route['alternative_values/(:any)'] = 'AlternativeValueController/index/$1';
$route['alternative_value/create'] = 'AlternativeValueController/create';
$route['alternative_value/store'] = 'AlternativeValueController/store';
$route['alternative_value/edit/(:any)'] = 'AlternativeValueController/edit/$1';
$route['alternative_value/update/(:any)'] = 'AlternativeValueController/update/$1';
$route['alternative_value/destroy/(:any)'] = 'AlternativeValueController/destroy/$1';