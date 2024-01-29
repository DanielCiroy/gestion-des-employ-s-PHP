<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>modifier</title>
</head>

<body>

<?php

        include_once('connexion.php');
      
        //requetes d'ajout

        //on recupere l'id
        $id=$_GET['id'];
        $req=mysqli_query($con, "SELECT * FROM employes WHERE id= $id");
        $row= mysqli_fetch_assoc($req);
    //verifier si le bouton ajouter a ete cliquer
        if(isset($_POST['modifier'])){
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $age=$_POST['age'];
    //requetes de modification
    $req=mysqli_query($con, "UPDATE employes SET nom='$nom', prenom='$prenom', age='$age' WHERE id=$id");
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
        <h2>modifier un employe</h2>
        <form action="" method="post">
            <label>Nom</label>
            <input type="text" name="nom" value="<?=$row['nom']?>">
            <label>Prenom</label>
            <input type="text" name="prenom" value="<?=$row['prenom']?>">
            <label>Age</label>
            <input type="number" name="age" value="<?=$row['age']?>">
            <input type="submit" value="modifier" name="modifier">
        </form>
    </div>
</body>

</html>