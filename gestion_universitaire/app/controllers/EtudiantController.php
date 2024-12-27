<?php

class EtudiantController {
    public function index() {
        $etudiants = Etudiant::all();
        include '../views/etudiants/index.php';
}

public function create() {
    include '../views/etudiants/create.php';
}
public function store() {
    $etudiant = new Etudiant($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['filiere']);
    Etudiant::create($etudiant);
    header("Location: /etudiant");
}
}
?>