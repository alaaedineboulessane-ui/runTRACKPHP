<?php
require_once __DIR__ . '/../config/config.php';

class UserModel {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    }

    public function register($nom, $prenom, $username, $password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (nom, prenom, username, password) VALUES (:nom, :prenom, :username, :password)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'username' => $username,
            'password' => $hash
        ]);
    }
}