



<?php
//connexion a la base de donnee

include_once "connexion.php";
//recuperation du lien

$id=$_GET['id'];

//requetes de suppression

$req=mysqli_query($con, "DELETE FROM employes WHERE id=$id");

//redirection vers la page  des employes

header("location:index.php");


?>