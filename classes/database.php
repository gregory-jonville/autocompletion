<?php
class Database
{
   private $db_host;
   private $db_login;
   private $db_password;
   private $db_name;
   public $pdo;

   public function __construct()
   {
       $this->db_host = "localhost";
       $this->db_login = "root";
       $this->db_password = "root";
       $this->db_name = "autocompletion";
   }

   public function connectDb()
   {
       try {
       		// Connexion base de données
           $this->pdo = new PDO("mysql:host=$this->db_host;dbname=$this->db_name;charset=utf8", $this->db_login, $this->db_password);
           // Paramètres requêtes
           $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
           // Paramètres erreurs 
           $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               
           return $this->pdo;

       } catch (PDOException $e) {
           echo "Erreur de connexion à la base de données : " . $e->getMessage();
        }
    }

  public function close(){
    $this->pdo = NULL;
  }

}

$db = new Database();