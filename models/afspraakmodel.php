<?php

require_once '../config/database.php';

class AfspraakModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    }

    public function opslaanAfspraak($gegevens) {
        $query = "INSERT INTO Afspraak (roze, blauw, roze2, geel, telefoonnummer, email, afspraak_datum, nagelbijt_arrangement, luxe_manicure, nagelreparatie, verzend_datum_tijd) 
                  VALUES (:roze, :blauw, :roze2, :geel, :telefoonnummer, :email, :afspraak_datum, :nagelbijt_arrangement, :luxe_manicure, :nagelreparatie, NOW())";

        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':roze', $gegevens['roze']);
        $stmt->bindParam(':blauw', $gegevens['blauw']);
        $stmt->bindParam(':roze2', $gegevens['roze2']);
        $stmt->bindParam(':geel', $gegevens['geel']);
        $stmt->bindParam(':telefoonnummer', $gegevens['phone']);
        $stmt->bindParam(':email', $gegevens['email']);
        $stmt->bindParam(':afspraak_datum', $gegevens['date']); 
        $stmt->bindParam(':nagelbijt_arrangement', isset($gegevens['optie1']) ? 1 : 0);
        $stmt->bindParam(':luxe_manicure', isset($gegevens['optie2']) ? 1 : 0);
        $stmt->bindParam(':nagelreparatie', isset($gegevens['optie3']) ? 1 : 0);

        if ($stmt->execute()) {
            echo 'Afspraak succesvol opgeslagen!';
        } else {
            echo 'Er is een fout opgetreden bij het opslaan van de afspraak.';
        }
    }
}
