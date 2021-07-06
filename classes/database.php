<?php
class Database
{
  // ATTRIBUTS
  public $pdo;

  // METHODES
  // Constructeur
  public function __construct()
  {
    $this->host = 'localhost';
    $this->username = 'root';
    $this->password = 'root';
    $this->database = 'autocompletion';
  }

  // Connexion database
  public function connectDb()
  {

    try { // Indique la requête SQL à lancer quand on se connecte
      $this->pdo = new PDO(
        'mysql:host=' . $this->host .
          ';dbname=' . $this->database,
        $this->username,
        $this->password,

        array(
          // On définit l'attribut par défaut
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
          // On interragit avec la Base de données en UTF8 pour empêcher les problèmes d'accent
          PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
          // Mode d'erreur
          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        )
      );
      // Retour de la connexion
      return $this->pdo;
      // Récupération des erreurs
    } catch (PDOException $e) {
      echo "Erreur de connexion à la base de données : " . $e->getMessage() . "<br/>";
      die();
    }
  }




  public function close()
  {
    $this->pdo = NULL;
  }

  public function checkInput($var)
    {
        // Convertit les caractères spéciaux en entités HTML
    	$var = htmlspecialchars($var);
        // Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
    	$var = trim($var);
      
    	return $var;
    }
}

$db = new Database();
$con = $db->connectDb();
