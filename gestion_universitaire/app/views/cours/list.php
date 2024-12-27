<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des cours</title>
    <!-- <a href="add.php">Ajouter un cours</a> -->
    <style>
        body {
            font-family: Arial,
sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20;
        }
        h2 {
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
        .btn-ajouter-cours {
            margin-button: 8px;
            background-color: #4CAF50;
            color: white;
            padding: 8px 8px;
            font-size: 2.5em;
            border-radius: 8px;
            text-transform: uppercase;
            box-shadow: 0 4px 8px rgba(0, 0, 0,0.2);
            letter-spacing: 1px;
            text-decoration: none;
            border: none;

        }
        table {
            widht: 100%;
            border-collapse: collapse;
            margin-top: 20px 0;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color:white;

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
        .btn:hover {
            opacity: 0.8;
        }
</style>
</head>
<body>
    <a href="add.php" class="btn-ajouter-cours">Ajouter un Cours</a>
    <h2>Liste des cours</h2>
    <table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom du cours</th>
        <th>Code du cours</th>
        <th>Nombre d'heures</th>
        <th>Actions</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Informatique</td>
        <td>INF010</td>
        <td>30</td>
    <td class="btn-container">
        <a href='add.php' class='btn btn-ajouter'>Ajouter</a>
        <a href='edit.php' class='btn btn-modifier'>Modifierr</a>
        <a href='index.php' class='btn btn-afficher'>Afficher</a>
        
    </td>
    </tr>
    <tr>
        <td>2</td>
        <td>Mathematiques</td>
        <td>MATH102</td></td>
        <td>35</td>
    <td class="btn-container">
        <a href='add.php' class='btn btn-ajouter'>Ajouter</a>
        <a href='edit.php' class='btn btn-modifier'>Modifierr</a>
        <a href='index.php' class='btn btn-afficher'>Afficher</a>
    </td>
    </tr>
    <tr>
     <td>3</td>
     <td>Physique</td>
     <td>PHY102</td>
     <td>40</td>
 <td class="btn-container">
        <a href='add.php' class='btn btn-ajouter'>Ajouter</a>
        <a href='edit.php' class='btn btn-modifier'>Modifierr</a>
        <a href='index.php' class='btn btn-afficher'>Afficher</a>
    </td>
    </tr>
     <td>4</td>
     <td>Anglais</td>
     <td>ANG102</td>
     <td>30</td>
<td class="btn-container">
        <a href='add.php' class='btn btn-ajouter'>Ajouter</a>
        <a href='edit.php' class='btn btn-modifier'>Modifierr</a>
        <a href='index.php' class='btn btn-afficher'>Afficher</a>
    </td>
    </tr>
     <td>5</td>
     <td>JAVA</td>
     <td>JAV102</td>
     <td>40</td>
<td class="btn-container">
        <a href='add.php' class='btn btn-ajouter'>Ajouter</a>
        <a href='edit.php' class='btn btn-modifier'>Modifierr</a>
        <a href='index.php' class='btn btn-afficher'>Afficher</a>
    </td>
    </tr>
     <!-- Ajouter d'autres cours ici-->
     </tbody>
     </table>
</body>
</html>
    </center>