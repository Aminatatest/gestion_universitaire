<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un cours</title>
    <style>
        body{
            font-family: Arial,
<sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 30;
        }
    h1{
        color : white;
        text-align: center;
        color: #333;
        text-align: center;
        font-size: 2.5em;
         margin-button: 20px;
         padding: 10px;
         background-color: red;
         color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    form {
        background-color: #white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0 , 0  ,0.1);
        max-width: 400px;
        margin:auto;
    }
    label {
            display: block;
            margin-button: 5px;
            font-weight: bold;
        }
        input[type="text"]{
            width: 50%;
            padding: 15px;
            margin-bottom: 15px;
            border:1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"]{
            color:white;
            background-color: red;
            border : none;
            padding : 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 50%;
            font-size: 16px;
        }
        input[type="submit"]: hover{
            background-color: darkblue;
        }
    </style>
        
</head>
<body>
    <h1>Modifier un cours</h1>
<form action="update_cours.php" method="post">
<label for="nom_cours">Nom du cours:</label>
<input type="text" id="nom_cours" name="nom_cours" value="Nom du cours existant" required>
<br>
<label for="code_cours">Code du cours:</label>
<input type="text" id="code_cours" name="code_cours" value="Code du cours existant" required>
<br>
<label for="nombre_heure">Nombre d'Heures:</label>
<input type="number" id="nb_heure" name="nb_heure" value="Heures  existant" required>
<br>
<br>
<input type="submit" class="ajouter-btn"value="Mettre a jour">
</form>
<a href="list.php">Retour a la liste des cours</a>
</body>
</html>
    </center>