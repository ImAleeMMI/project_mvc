<?php 
namespace App\Models;

class Restaurant
{
	protected $id;
	protected $name;
	protected $adress;
	protected $tel;
	protected $time;
	
    // GET METHODS
	public function getId()
	{
		return $this->id;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getAdress()
	{
		return $this->adress;
	}
	
	public function getTel()
	{
		return $this->tel;
	}
	
	public function getTime()
	{
		return $this->time;
	}
	
    // SET METHODS
    public function setName(string $name)
	{
		$this->name = $name;
	}
	
	public function setAdress(string $adress)
	{
		$this->adress = $adress;
	}
	
	public function setTel(string $tel)
	{
		$this->tel = $tel;
	}
	
	public function setTime(string $time)
	{
		$this->time = $time;
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