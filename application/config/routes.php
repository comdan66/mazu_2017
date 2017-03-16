<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Route::root ('main');

// $route['admin'] = "admin/main";
Route::get ('admin', 'admin/main@index');
Route::resource (array ('articles'), 'articles');
