<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Cours</title>
    <center>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: blue;
            color:white;
            font-size: 1.5em;
        }
        h1{
            color: white;
            text-align: center;
            color: #333;
            font-size: 2.5em;
            margin-button: 20px;
            padding: 10px;
            background-color: blue;
            color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
    </style>
</head>
<body>
    <center><h1>Liste des Cours</h1></center>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom du cours</th>
            <th>Code du cours</th>
            <th>Nombre d'Heures</th>
        </tr>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        // Exemple de tableau d'étudiants, remplacez-le par votre requête
        $etudiants = [
            ['id' => 1, 'nom du cours' => 'Informatique','code du cours' => 'INF010', 'nombre heures' => '30'],
            ['id' => 2, 'nom du cours' => 'Mathematique','code du cours' => 'MATH102', 'nombre heures' => '35'],
            ['id' => 3, 'nom du cours' => 'Physique','code du cours' => 'PHY102', 'nombre heures' => '40'],
            ['id' => 4, 'nom du cours' => 'Anglais','code du cours' => 'ANG102', 'nombre heures' => '30'],
            ['id' => 5, 'nom du cours' => 'JAVA','code du cours' => 'JAV102', 'nombre heures' => '40'],

        ];
        

        if (is_array($etudiants) && !empty($etudiants)) {
            foreach ($etudiants as $etudiant) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($etudiant['id']) . '</td>';
                echo '<td>' . htmlspecialchars($etudiant['nom du cours']) . '</td>';
                echo '<td>' . htmlspecialchars($etudiant['code du cours']) . '</td>';
                echo '<td>' . htmlspecialchars($etudiant['nombre heures']) . '</td>';
                
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="4">Aucun étudiant trouvé.</td></tr>';
        }
        ?>
    </table>
    <a href="list.php">Retour a la liste des cours</a>
</body>
</html>
    </center>