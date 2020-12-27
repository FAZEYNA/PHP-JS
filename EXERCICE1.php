<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>EXERCICE 1</title>
</head>

<body>
    <div class="container mt-3">
        <form method="POST" action="">
            <div class="mb-3">
                <label for="prenom" class="form-label">Entrer votre prénom :</label>
                <input type="text" class="form-control shadow-none w-25" id="prenom" name="prenom" required value="<?php if(isset($_POST["prenom"])) echo $_POST["prenom"];?>">
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Entrer votre nom :</label>
                <input type="text" class="form-control shadow-none w-25" id="nom" name="nom" required value="<?php if(isset($_POST["nom"])) echo $_POST["nom"];?>">
            </div>
            <div class="mb-3">
                <label for="dateNaiss" class="form-label">Entrer votre date de naissance :</label>
                <input type="date" class="form-control shadow-none w-25" id="dateNaiss" name="dateNaiss" max="2005-12-31" required value="<?php if(isset($_POST["dateNaiss"])) echo $_POST["dateNaiss"];?>">
            </div>
            <input type="submit" class="form-control shadow-none w-25" value="Valider" name="valider" id="valider">
        </form>
    </div>
    
    <?php
        if(isset($_POST["valider"]))
        {
            extract($_POST);
            $nom = trim(strip_tags(htmlspecialchars($nom)));
            $prenom = trim(strip_tags(htmlspecialchars($prenom)));
        }
        function detAge($date) {
            $anneeEnCours = strtotime(date("Y-m-d H:i:s"));
            $anneeNaiss = strtotime($date);
            $diff = $anneeEnCours - $anneeNaiss;
            return floor($diff / 31536000) ;   
        }
        function detMail($nom,$prenom){
            $prenom = strtolower($prenom);
            $nom = strtolower($nom);
            return substr($prenom,0,1).$nom."@l2glsp.com";
        }
    ?>

    <div class="container mt-4" id="modifications">
        <div class="row">
            <div class="col">
                <label for="bgColor">Couleur de fond</label>
               <select class="form-select" id="bgColor" name="bgColor">
                    <option selected value="">Neutre</option>
                    <option value="white">Blanc</option>
                    <option value="pink">Rose</option>
                    <option value="blue">Bleu</option>
                    <option value="green">Vert</option>
                    <option value="orange">Orange</option>
                    <option value="black">Noir</option>
                    <option value="red">Rouge</option>
                    <option value="yellow">Jaune</option>
                    <option value="aqua">Aqua</option>
                    <option value="purple">Mauve</option>
                    <option value="gray">Gris</option>
                    <option value="brown">Marron</option>
                </select>
            </div>
            <div class="col">
                <label for="textColor">Couleur du texte</label>
                <select class="form-select" id="textColor">
                    <option selected value="black">Noir</option>
                    <option value="white">Blanc</option>
                    <option value="pink">Rose</option>
                    <option value="blue">Bleu</option>
                    <option value="green">Vert</option>
                    <option value="orange">Orange</option>
                    <option value="black">Noir</option>
                    <option value="red">Rouge</option>
                    <option value="yellow">Jaune</option>
                    <option value="aqua">Aqua</option>
                    <option value="purple">Mauve</option>
                    <option value="gray">Gris</option>
                    <option value="brown">Marron</option>
                </select>            
            </div>
            <div class="col">
                <label for="police">Police</label>
                <input type="text" class="form-control shadow-none" id="police">
            </div>
            <div class="col">
                <label for="taille">Taille de la police</label> 
                <input type="number" min="8" class="form-control shadow-none" id="taille">
            </div>
        </div>
    </div>

    <div class="container mt-5 w-50 p-4" id="infos">
        <p class="text-center">INFORMATIONS </p>
        <p class="text-start">Prénom : <?php if(isset($prenom)) echo ucfirst($prenom);?></p>
        <p class="text-start">Nom : <?php if(isset($nom)) echo ucfirst($nom);?></p>
        <p class="text-start">Date de naissance : <?php if(isset($dateNaiss)) echo ucfirst($dateNaiss);?></p>
        <p class="text-start">Age : <?php if(isset($dateNaiss)) echo detAge($dateNaiss)." ans"; ?></p>
        <p class="text-start">Adresse mail : <?php if(isset($nom)) echo detMail($nom,$prenom); ?></p>
    </div>

    <script src="script.js"></script>
</body>
</html>