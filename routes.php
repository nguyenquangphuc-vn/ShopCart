
<?php
# routes.php
$controllers = array(
  'pages' => ['home', 'error', 'products', 'login', 'product_details', 'cart']
);
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $controller = 'pages';
  $action = 'error';
}
require_once('controllers/' . $controller . '_controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();