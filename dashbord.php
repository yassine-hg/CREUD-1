<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="colorv2.css">
    <title>etudiant</title>
</head>
<body>
    <div class="div2">
        <a href="index.php" class="btn_add"> <img src="plus.png">Ajouter</a>
        <table>
            <tr id="items">
                <th>Name</th>
                <th>Email</th>
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
                    </tr>
                    <?php
                   } 
                }
            ?>
        </table>
    </div>
</body>
</html>