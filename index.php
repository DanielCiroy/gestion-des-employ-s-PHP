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
            <tr>
                <td>steve</td>
                <td>Marc</td>
                <td>20 ans</td>
                <td><a href="modifier.html"><img src="images/pen.png" alt=""></a></td>
                <td><a href="#"><img src="images/trash.png" alt=""></a></td>
            </tr>
            <tr>
                <td>dan</td>
                <td>ciroy</td>
                <td>22 ans</td>
                <td><a href="modifier.php"><img src="images/pen.png" alt=""></a></td>
                <td><a href="#"><img src="images/trash.png" alt=""></a></td>
            </tr>
        </table>
    </div>

</body>

</html>