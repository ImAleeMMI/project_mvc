<?php 

namespace App\Controllers;

use App\Models\Restaurant;
use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    // Show the product attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        $restaurant = new Restaurant();
        $restaurant->read($id);

        require_once APP_ROOT . '/views/restaurant.php';
	}
}