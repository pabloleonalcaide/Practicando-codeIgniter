<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// si los datos en la uri son /news/create carga el controlador news llamando a la función create
$route['news'] = 'news/index';
$route['news/create'] = 'news/create';
$route['news/probando'] = 'pages/view/about';
$route['news/index'] = 'news/index';
$route['news/(:any)'] = 'news/view/$1';

$route['lista'] = 'lista/view';
$route['lista/mail'] = 'email/send_mail';
$route['auth'] = 'auth/index';
// si no hay datos en la uri, va directo al controlador pages a la función view
$route['default_controller'] = 'pages/view';
// si pasamos cualquier dato por la uri, lo dirige a la función view del controlador pages

$route['(:any)'] = 'pages/view/$1';
