<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Etudiant</title>
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
        input[type="text"], 
        input[type="email"]{
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
    <h1>Ajouter un Etudiant</h1>
    
<label for="nom">Nom:</label>
<input type="text" id="nom" name="nom" name="nom" required>
<br>
<label for="prenom">Prenom:</label>
<input type="text" id="prnom" name="prnom" name="prenom" required>
<br>
<label for="email">Email:</label>
<input type="email" id="email" name="email" name="email" required>
<br>
<label for="filiere">Filiere:</label>
<input type="text" id="filiere" name="filiere" name="filiere" required>
<br>
<input type="submit" class="ajouter-btn"value="Ajouter Etudiant">
</form>
<br>
<a href="list.php">Retour a la liste des etudiants</a>
</body>
</html>
    </center>
