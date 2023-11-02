<?php 

namespace App\Controllers;

use App\Models\Reservation;
use Symfony\Component\Routing\RouteCollection;

class ReservationController
{
    // Show the product attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        $reservation = new Reservation();
        $reservation->read($id);

        require_once APP_ROOT . '/views/reservation.php';
	}
}