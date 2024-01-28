<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajouter</title>
</head>

<body>
<?php
    //verifier si le bouton ajouter a ete cliquer
    
    if(isset($_POST['ajouter'])){
        include_once('connexion.php');
         $nom=$_POST['nom'];
         $prenom=$_POST['prenom'];
         $age=$_POST['age'];
        //requetes d'ajout
        $req=mysqli_query($con, "INSERT INTO employes VALUES (NULL, '$nom','$prenom','$age')");
        if($req){
            header('location:index.php');
        }
        else{
            echo'etudiant non ajoutee';
        }
    }
    
    
    ?>


    <div class="form">
        <a href="index.php" class="Back_btn"><img src="images/back.png" alt="">Retour</a>
        <h2>Ajouter un employe</h2>
        <form action="" method="post">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Prenom</label>
            <input type="text" name="prenom">
            <label>Age</label>
            <input type="number" name="age">
            <input type="submit" value="Ajouter" name="ajouter">
        </form>
    </div>
</body>

</html>