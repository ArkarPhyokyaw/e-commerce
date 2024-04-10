<?php
use \App\Routing\RouteDispatcher;
$router= new AltoRouter();
//$router->setBasePath("/e_commeric/public"); instead of host if use localhost 
$router->map ("GET","/","App\Controllers\IndexController@show","Home Route");

#admin route
$router->map ("GET","/admin","App\Controllers\AdminController@index","Admin Home");
$router->map ("GET","/admin/category/created","App\Controllers\CategoryController@index","Category Home");
$router->map ("POST","/admin/category/created","App\Controllers\CategoryController@store","Category Store");
new RouteDispatcher($router);
?>
