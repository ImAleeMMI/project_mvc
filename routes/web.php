<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));
$routes->add('reservation', new Route(constant('URL_SUBFOLDER') . '/reservation/{id}', array('controller' => 'ReservationController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('restaurant', new Route(constant('URL_SUBFOLDER') . '/restaurant/{id}', array('controller' => 'RestaurantController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('review', new Route(constant('URL_SUBFOLDER') . '/review/{id}', array('controller' => 'ReviewController', 'method'=>'showAction'), array('id' => '[0-9]+')));
