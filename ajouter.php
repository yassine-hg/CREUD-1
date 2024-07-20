<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="color.css">
</head>
<body>
    <?php
       if(isset($_POST['button'])){
           extract($_POST);
           if(isset($nom) && isset($email)){
                include_once "connexion.php";
                $req = mysqli_query( "INSERT INTO etudiant VALUES(NULL, '$nom', '$email')");
                if($req){
                    header("location: index.php");
                }else {
                    $message = "etudiant non ajouté";
                }

           }else {
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="back.png"> Retour</a>
        <a href="dashboard.php" class="btn_dash"></a>
        <h2>Ajouter un etudiant</h2>
        <p class="erreur_message">
            <?php 
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>email</label>
            <input type="email" name="email">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>