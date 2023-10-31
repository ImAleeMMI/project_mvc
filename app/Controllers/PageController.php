<?php 

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class PageController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
		$routeToReservation = str_replace('{id}', 1, $routes->get('reservation')->getPath());
		$routeToRestaurant = str_replace('{id}', 1, $routes->get('restaurant')->getPath());
		$routeToReview = str_replace('{id}', 1, $routes->get('review')->getPath());

        require_once APP_ROOT . '/views/home.php';
	}
}