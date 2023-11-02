<?php 
namespace App\Models;

use App\DB;

class Reservation
{
	protected $id;
	protected $first_last_name;
	protected $data_reservation;
	protected $hours;
	protected $peopol;
	protected const TABLE = 'prenotazioni';
	
    // GET METHODS
	public function getId(){ return $this->id; }
	
	public function getFirst_last_name() { return $this->first_last_name; }
	
	public function getData_reservation() { return $this->data_reservation; }
	
	public function getHours() { return $this->hours; }
	
	public function getPeopol() { return $this->peopol; }
	
	
    // SET METHODS
	public function setId(string $id) { $this->id = $id; }

    public function setFirst_last_name(string $first_last_name) { $this->first_last_name = $first_last_name; }
	
	public function setData_reservation(string $data_reservation) { $this->data_reservation = $data_reservation; }

	public function setHours(string $hours) { $this->hours = $hours; }
	
	public function setPeopol(string $peopol) { $this->peopol = $peopol; }

    // CRUD OPERATIONS
	public function create(array $data) { }
	
	public function read(int $id)
	{
		$query = "SELECT * FROM ".self::TABLE." WHERE id = $id";
		$db = new DB();
		$result = $db->select($query);
		$result = $result[0];
		self::setId($result['id']);
		self::setFirst_last_name($result['nome_cognome']);
		self::setData_reservation($result['data']);
		self::setHours($result['orario']);
		self::setPeopol($result['persone']);
	}
	
	public function update(int $id, array $data) { }
	
	public function delete(int $id) { }
}