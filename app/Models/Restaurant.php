<?php 
namespace App\Models;

use App\DB;

class Restaurant
{
	protected $id;
	protected $restaurant_name;
	protected $adress;
	protected $tel;
	protected $time;
	protected const TABLE = 'ristorante';
	
    // GET METHODS
	public function getId() { return $this->id; }
	
	public function getRestaurant_name() { return $this->restaurant_name; }
	
	public function getAdress() { return $this->adress; }
	
	public function getTel() { return $this->tel; }
	
	public function getTime() { return $this->time; }
	
    // SET METHODS
	public function setId(string $id) { $this->id = $id; }

    public function setRestaurant_name(string $restaurant_name) { $this->restaurant_name = $restaurant_name; }
	
	public function setAdress(string $adress) { $this->adress = $adress; }
	
	public function setTel(string $tel) { $this->tel = $tel; }
	
	public function setTime(string $time) { $this->time = $time; }

    // CRUD OPERATIONS
	public function create(array $data) { }
	
	public function read(int $id)
	{
		$query = "SELECT * FROM ".self::TABLE." WHERE id = $id";
		$db = new DB();
		$result = $db->select($query);
		$result = $result[0];
		self::setId($result['id']);
		self::setRestaurant_name($result['nome']);
		self::setAdress($result['indirizzo']);
		self::setTel($result['telefono']);
		self::setTime($result['orari_di_apertura']);
	}
	
	public function update(int $id, array $data) { }
	
	public function delete(int $id) { }
}