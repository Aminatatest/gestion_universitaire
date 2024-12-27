<?php


class Etudiant {
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $filiere;

    public function __construct($nom, $prenom, $email, $filiere){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->filiere = $filiere;
    }

    public static function all(){
        global $conn;
        $result = $conn->query("SELECT * FROM etudiants");
        return $result->fetchall(MYSQLI_ASSOC);
    }

    public static function 
create($etudiant){
    global $conn;
    $stmt = $conn->prepare("INSERT INTO etudiants (nom, prenom ,email, filiere) VALUES (?,?,?,?)");
    $stmt =bind_param("ssss",$etudiant->nom,$etudiant->prenom,$etudiant->email,$etudiant->filiere);
    return $stmt->execute();
}
}
?> 