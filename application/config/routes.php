<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'welcome/login/$1';
$route['authenticate'] = 'User/authenticate/$1';
$route['logout'] = 'User/logout/$1';
//route for category
$route['addCategory'] = 'CategoryController/addCategory/$1';
$route['saveCategory'] = 'CategoryController/saveCategory/$1';
$route['checkUniqCategory'] = 'CategoryController/checkUniqCategory/$1';
$route['getCatList'] = 'CategoryController/getCatList/$1';
$route['editCategory'] = 'CategoryController/editCategory/$1';
$route['deleteCategory'] = 'CategoryController/deleteCategory/$1';

//route for Sub category
$route['addSubCategory'] = 'CategorySubController/addSubCategory/$1';
$route['saveSubCategory'] = 'CategorySubController/saveSubCategory/$1';
$route['checkUniqSubCategory'] = 'CategorySubController/checkUniqSubCategory/$1';
$route['getSubCatList'] = 'CategorySubController/getSubCatList/$1';
$route['editSubCategory'] = 'CategorySubController/editSubCategory/$1';
$route['deleteSubCategory'] = 'CategorySubController/deleteSubCategory/$1';