<?php

namespace App\Routes;

use Config\Services;

$routes = Services::routes();

//rotas
$routes->get('/', 'Auth::index');
