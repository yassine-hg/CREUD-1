<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="color.css">
</head>
<body>
    <?php
        include_once "connexion.php";
        $id = $_GET ['id'];
        $req = mysqli_query($con , "SELECT * FROM etudiant WHERE id = $id");
        $row = mysqli_fetch_assoc($req);

       if(isset($_POST['button'])){
           extract($_POST);
           if(isset($nom) && isset($email)){
            $req = mysqli_query($con, "UPDATE etudiant SET name = '$nom' , email = '$email' WHERE id = $id");
            if($req){
            header("location: index.php");
            }else{
                $message = "etudiant non ajouté";
            }

            }else {
               $message = "Veuillez remplir tous les champs !";
            }
        }
    
    ?>
    <div class="form">
        <a href="index.php" class="back_btn"> <img src="back.png"> Retour</a>
        <h2>Modifier l'etudiant: <?=$row['name']?></h2>
        <p class="erreur_message">
            <?php
                if(isset($message)){
                    echo $message;
                }
            ?>
        </p>
        <form action="" method="post">
            <label>Nom</label>
            <input type="text" name="nom" value="<?=$row['name']?>">
            <label>Email</label>
            <input type="email" name="email" value = "<?=$row['email']?>">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html> 