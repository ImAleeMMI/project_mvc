<?php 
namespace App\Models;

use App\DB;

class Review
{
	protected $id;
	protected $name_client;
	protected $vote;
	protected $comment;
	protected const TABLE = 'review';

    // GET METHODS
	public function getId() { return $this->id; }
	
	public function getName_client() { return $this->name_client; }
	
	public function getVote() { return $this->vote; }
	
	public function getComment() { return $this->comment; }
	
    // SET METHODS
	public function setId(string $id) { $this->id = $id; }

    public function setName_client(string $name_client) { $this->name_client = $name_client; }
	
	public function setVote(string $vote) { $this->vote = $vote; }
	
	public function setComment(string $comment) { $this->comment = $comment; }
	
    // CRUD OPERATIONS
	public function create(array $data) { }
	
	public function read(int $id)
	{
		$query = "SELECT * FROM self::TABLE WHERE id = $id";
		$db = new DB();
		$result = $db->select($query);
		self::setId($result[0]['id']);
		self::setName_client($result[1]['nome_cliente']);
		self::setVote($result[2]['voto']);
		self::setComment($result[3]['commento']);
	}
	
	public function update(int $id, array $data) { }
	
	public function delete(int $id) { }
}