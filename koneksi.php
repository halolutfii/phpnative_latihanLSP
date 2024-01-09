<?php
class DatabaseConnection{
    private $host; private $username; private $password;
    private $database; private $connection;

    public function __construct($host, $username, $password, $database){
        $this->host     = $host; $this->username = $username;
        $this->password = $password; $this->database = $database;
    }

    public function connect(){
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        //cek apakah koneksi berhasil
        if($this->connection->connect_error){
            die("Koneksi gagal: ". $this->connection->connect_error);
        }
    }
    public function disconnect(){
        $this->connection->close();
    }

    public function query($sql){
        $res = $this->connection->query($sql);
        return $res;
    }
}

$host = "localhost";
$user = "root";
$pass = "root";
$db   = "latihanlsp";

$koneksi = new DatabaseConnection($host, $user, $pass, $db);


?>