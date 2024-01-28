<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>gestion des eleves</title>
</head>

<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"><img src="images/plus.png" alt="ajouter">Ajouter</a>
        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prenom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php
        // inclure la page de connexion a la base de donnee
        include_once "connexion.php";
        
        //requetes pour afficher les employes
        $req=mysqli_query($con,"SELECT * FROM employes");
        if(mysqli_num_rows($req)==0){
            //s'il n'existe pas d'employees dans la base de donnee , on affiche ce message:
            echo"il n'ya pas encore d'employes";
        }else{
            //sinon, on affiche les employes qui sonts dans la base de donnee

            while($row=mysqli_fetch_assoc($req)){
                 ?>
                 <tr>
                    <td><?=$row['nom']?></td>
                    <td><?=$row['prenom']?></td>
                    <td><?=$row['age']?></td>
                    <!-- nous allons mettre l'id des employes dans ces lien-->
                    <td><a href="modifier.php?id=<?=$row['id']?>"><img src="images/pen.png" alt=""></a></td>
                    <td><a href="supprimer.php?id=<?=$row['id']?>"><img src="images/trash.png" ></a></td>
                 </tr>
               <?php
            }
        }
        ?>
         
        </table>
    </div>

</body>

</html>