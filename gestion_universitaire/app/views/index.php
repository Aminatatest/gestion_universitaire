<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Étudiants</title>
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
    <center><h1>Liste des Étudiants</h1></center>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Cours</th>
        </tr>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        // Exemple de tableau d'étudiants, remplacez-le par votre requête
        $etudiants = [
            ['id' => 1, 'nom' => 'Abdoulah', 'prenom' => 'Diouce', 'email' => 'Abdoulah@gmail.com', 'cours' => 'Medecin'],
            ['id' => 2, 'nom' => 'Aminata', 'prenom' => 'Diouce', 'email' => 'Aminata.Diouce@gmail.com' ,'cours'=> 'Informatique'],
            ['id' => 3, 'nom' => 'Sokhna', 'prenom' => 'Tandine', 'email' => 'Sokhna.tandine@gmail.com' ,'cours'=> 'Physique'	],
            ['id' => 4, 'nom' => 'AWA', 'prenom' => 'Fall', 'email' => 'Awa.Fall@gmail.com' ,'cours'=> 'Anglais'],
            ['id' => 5, 'nom' => 'Ndeye', 'prenom' => 'Fatou', 'email' => 'Ndeye.Fatou@gmail.com', 'cours'=> 'GestionProjet'],
            

        ];

        if (is_array($etudiants) && !empty($etudiants)) {
            foreach ($etudiants as $etudiant) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($etudiant['id']) . '</td>';
                echo '<td>' . htmlspecialchars($etudiant['nom']) . '</td>';
                echo '<td>' . htmlspecialchars($etudiant['prenom']) . '</td>';
                echo '<td>' . htmlspecialchars($etudiant['email']) . '</td>';
                echo '<td>' . htmlspecialchars($etudiant['cours']) . '</td>';
                
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="4">Aucun étudiant trouvé.</td></tr>';
        
        }
        
        ?>
    </table>
    
    </center>
    
</body>

</html>