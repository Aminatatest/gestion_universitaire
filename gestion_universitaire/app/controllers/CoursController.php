<?php

class CoursController {
    public function index() {
        $cours = cours::all();
        include '../views/cours/index.php';
}

public function create() {
    include '../views/cours/create.php';
}
public function store() {
    $cours = new Cours($_POST['nom_cours'], $_POST['code_cours'], $_POST['nombre_heures']);
    Etudiant::create($cours);
    header("Location: /cours");
}
}
?>