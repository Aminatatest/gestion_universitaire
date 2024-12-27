<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Cours</title>
    <style>
        body {
            font-family: Arial,
sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding; 10px;
        }
        h1{
            color: #4CAF50;
            text-align: center;
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
        form{
            background-color: white;
            padding: 5px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            max-width: 30px;
            margin:auto;
        }
        label {
            display: block;
            margin-button: 5px;
            font-weight: bold;
        }
        input[type="text"]{
            width: 20%;
            padding:10px;
            margin-bottom: 10px;
            border:1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"]{
            color:white;
            background-color: #4CAF50;
            border : none;
            padding : 5px;
            border-radius: 4px;
            cursor: pointer;
            width: 30%;
            font-size: 16px;
        }
        input[type="submit"]: hover{
            background-color: darkblue;
        }
        

        </style>
</head>
<body>
    <h1>Ajouter un cours</h1>
<!-- action="process_add_etudiants.php" method="POST"> -->
<label for="nom_cours">Nom du cours:</label>
<input type="text" id="nom_cours" name="nom_cours" name="nom_cours" required>
<br>
<label for="code_cours">Code du cours:</label>
<input type="text" id="code_cours" name="code_cours" name="code_cours" required>
<br>
<label for="nombre_heure">Nombre d'Heures:</label>
<input type="number" id="nb_heure" name="nb_heure" name="nb_heure" required>
<br>
<br>
<input type="submit" class="ajouter-btn"value="Ajouter">
</form>
<br>
<a href="list.php">Retour a la liste des cours</a>
</body>
</html>
    </center>
