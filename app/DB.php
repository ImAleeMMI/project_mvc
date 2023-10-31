<?php

namespace App;

use \PDO;
use \PDOException;

class DB {
    const HOST = 'mysql:dbname=ristorante;host=localhost';
    const USER = 'root';
    const PASSWORD = 'root';
    
    private function getConnection() {
        try{
            $pdo = new PDO(self::HOST, self::USER, self::PASSWORD);
        } catch (PDOException $e) {   
            die("ERRORE: Impossibile stabilire una connessione al database");
        }
        return $pdo;
    }

    public function select($query) {
        $pdo = self::getConnection();
        return $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($query) {
        $pdo = self::getConnection();
        $pdo->exec($query);
    }

    public function createTable($query) {
        $pdo = self::getConnection();
        $pdo->exec($query);
    }
}
