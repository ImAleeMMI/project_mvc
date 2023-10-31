<?php 
namespace App\Models;

class Reservation
{
	protected $id;
	protected $first_last_name;
	protected $data_reservation;
	protected $hours;
	protected $peopol;
	
    // GET METHODS
	public function getId()
	{
		return $this->id;
	}
	
	public function getFirst_last_name()
	{
		return $this->first_last_name;
	}
	
	public function getDataReservation()
	{
		return $this->data_reservation;
	}
	
	public function getHours()
	{
		return $this->hours;
	}
	
	public function getPeopol()
	{
		return $this->peopol;
	}
	
	
    // SET METHODS
    public function setFirst_last_name(string $first_last_name)
	{
		$this->first_last_name = $first_last_name;
	}
	
	public function setData(string $data_reservation)
	{
		$this->data_reservation = $data_reservation;
	}
	
	public function setHours(string $hours)
	{
		$this->hours = $hours;
	}
	
	public function setPeopol(string $peopol)
	{
		$this->peopol = $peopol;
	}

    // CRUD OPERATIONS
	public function create(array $data)
	{
		
	}
	
	public function read(int $id)
	{
		
		return $this;
	}
	
	public function update(int $id, array $data)
	{
		
	}
	
	public function delete(int $id)
	{
		
	}
}