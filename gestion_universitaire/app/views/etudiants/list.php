<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des etudiants</title>
    <style>
        body {
            font-family: Arial,
sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20;
        }
        h1 {
            color: #333;
            text-align: center;
            font-size: 2.5em;
            margin-button: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-transform: uppercase;
            letter-spacing: 1px;

        }
        .btn-ajouter-etudiant {
            margin-button: 2px;
            background-color: #4CAF50;
            color: white;
            padding: 4px 4px;
            font-size: 2.5em;
            border-radius: 5px;
            box-shadow: 0 4px 4px rgba(0, 0, 0,0.2);
            letter-spacing: 1px;
            text-decoration: none;
            border: none;
        }
        table {
            widht: 100%;
            border-collapse: collapse;
            margin-top: 20;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;

        }
        tr:nth-child(even) {
            background-color: #f9f9f9;

        }
        tr:hover {
            background-color: #ddd;
        }
    
        .btn-container {
            display: flex;
            justify-content: flex-end;
        }
        .btn {
            padding: 10px 15px;
            margin-left: 5px;
            border: none;
            color: white;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .btn-ajouter {
            background-color: green;
        }
        .btn-modifier {
            background-color: red;
        }
        .btn-afficher {
            background-color: blue;
        }
</style>
</head>
<body>
    <h1>Liste des etudiants</h1>
    <table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Cours</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Abdoulah</td>
        <td>Diouce</td>
    <td>Abdoulah@gmail.com</td>
    <td>Medecin</td>
    <td class="btn-container">
        <a href='add.php' class='btn btn-ajouter'>Ajouter</a>
        <a href='edit.php' class='btn btn-modifier'>Modifierr</a>
        <a href='index.php' class='btn btn-afficher'>Afficher</a>
    </tr>
    </td>
        <td>2</td>
        <td>Aminata</td>
        <td>Diouce</td></td>
    <td>Aminata.Diouce@gmail.com</td>
    <td>Informatique</td>
    <td class="btn-container">
        <a href='add.php' class='btn btn-ajouter'>Ajouter</a>
        <a href='edit.php' class='btn btn-modifier'>Modifierr</a>
        <a href='index.php' class='btn btn-afficher'>Afficher</a>
    </tr>
    <tr>
     <td>3</td>
     <td>Sokhna</td>
     <td>tandine</td>
     <td>Sokhna.tandine@gmail.com</td>
     <td>Physique</td>
     <td class="btn-container">
        <a href='add.php' class='btn btn-ajouter'>Ajouter</a>
        <a href='edit.php' class='btn btn-modifier'>Modifierr</a>
        <a href='index.php' class='btn btn-afficher'>Afficher</a>
     </tr>
     <tr>
     <td>4</td>
     <td>AWA</td>
     <td>Fall</td>
     <td>Awa.Fall@gmail.com</td>
     <td>Anglais</td>
     <td class="btn-container">
        <a href='add.php' class='btn btn-ajouter'>Ajouter</a>
        <a href='edit.php' class='btn btn-modifier'>Modifierr</a>
        <a href='index.php' class='btn btn-afficher'>Afficher</a>
     </tr>
     <tr>
     <td>5</td>
     <td>Ndeye</td>
     <td>Fatou</td>
     <td>Ndeye.Fatou@gmail.com</td>
     <td>GestionProjet</td>
     <td class="btn-container">
        <a href='add.php' class='btn btn-ajouter'>Ajouter</a>
        <a href='edit.php' class='btn btn-modifier'>Modifierr</a>
        <a href='index.php' class='btn btn-afficher'>Afficher</a>
     </tr>
     <!-- Ajouter d'autres etudiants ici-->
     </tbody>
     </table>
     <br>
     <a href="index.php" class="btn-ajouter-etudiant">Ajouter un Etudiants</a>
</body>
</html>
    </center>