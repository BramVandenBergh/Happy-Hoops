<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

$routes = array(
  'home' => array(
    'controller' => 'Events',
    'action' => 'index'
  ),
  'about' => array(
    'controller' => 'Events',
    'action' => 'about'
  ),
  'events' => array(
    'controller' => 'Events',
    'action' => 'events'
  ),
  'detail' => array(
    'controller' => 'Events',
    'action' => 'detail'
  ),
  'checkout' => array(
    'controller' => 'Events',
    'action' => 'checkout'
  )
);

if (empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if (empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
