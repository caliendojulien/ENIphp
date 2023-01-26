<?php
// Cnx.php
class Cnx
{
    private PDO $pdo;
    private const SELECT_MODELE = "SELECT marque, modele FROM modeles;";
    private const INSERT_MODELE = "INSERT INTO modeles VALUES (?, ?, ?, ?);";

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=tp";
        $this->pdo = new PDO($dsn, 'root', 'password');
    }

    public function getModeles(): array {
        $query = self::SELECT_MODELE;
        $pstmt = $this->pdo->prepare($query);
        $pstmt->execute();
        $resultats = $pstmt->fetchAll();
        return $resultats;
    }

    public function addModele($id_modele, $marque, $modele, $carburant): void {
        $query = self::INSERT_MODELE;
        $pstmt = $this->pdo->prepare($query);
        $pstmt->bindValue(1, $id_modele);
        $pstmt->bindValue(2, $marque);
        $pstmt->bindValue(3, $modele);
        $pstmt->bindValue(4, $carburant);
        $pstmt->execute();
    }

}