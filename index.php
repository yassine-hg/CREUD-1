<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="color.css">
    <title>etudiant</title>
</head>
<body>
    <div class="div2">
        <a href="ajouter.php" class="btn_add"> <img src="plus.png">Ajouter</a>
        <div>
            <a href="dashbord.php" class="dash_butt">Dashbord</a>
        </div>
        <table>
            <tr id="items">
                <th>Name</th>
                <th>Email</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php 
                include_once "connexion.php";
                $req = mysqli_query($con , "SELECT * FROM etudiant");
                if(mysqli_num_rows($req) == 0){
                    echo "Il n'y a pas encore d'etudiant ajouté";
                }else{
                   while($row=mysqli_fetch_assoc($req)){
                    ?>
                    <tr>
                        <td><?=$row['name']?></td>
                        <td><?=$row['email']?></td>
                        <td><a href="modifier.php?id=<?=$row['id']?>"><img src="pen.png"></a></td>
                        <td><a href="supprimer.php?id=<?=$row['id']?>"><img src="trash.png"></a></td>
                    </tr>
                    <?php
                   } 
                }
            ?>
        </table>
    </div>
</body>
</html>