<?php
class Cours {
    public $id;
    public $nom_cours;
    public $code_cours;
    public $nombre_heures;

    public function __construct($nom_cours, $code_cours, $nombre_heures){
        $this->nom_cours = $nom_cours;
        $this->code_cours = $code_cours;
        $this->nombre_heures = $nombre_heures;
    }

    public static function all(){
        global $conn;
        $result = $conn->query("SELECT * FROM cours");
        return $result->fetchall(MYSQLI_ASSOC);
    }

    public static function 
create($cours){
    global $conn;
    $stmt = $conn->prepare("INSERT INTO cours (nom_cours, code_cours ,nombre_heures) VALUES (?,?,?,?)");
    $stmt =bind_param("ssi",$cours->nom_cours,$cours->code_cours,$cours->nombre_heures);
    return $stmt->execute();
}
}
?> 

